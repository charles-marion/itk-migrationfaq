<?php
/**
 * Select an attachment and save it or create the SQL backup files
 *
 * @category  phpMyFAQ
 * @package   Administration
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @author    Anatoliy Belsky <ab@php.net>
 * @since     2002-09-17 
 * @copyright 2002-2009 phpMyFAQ
 *
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 */

define('PMF_ROOT_DIR', dirname(dirname(__FILE__)));

//
// Define the named constant used as a check by any included PHP file
//
define('IS_VALID_PHPMYFAQ_ADMIN', null);

//
// Autoload classes, prepend and start the PHP session
//
require_once PMF_ROOT_DIR.'/inc/Init.php';
PMF_Init::cleanRequest();
session_name(PMF_COOKIE_NAME_AUTH.trim($faqconfig->get('main.phpMyFAQToken')));
session_start();

/**
 * Initialize attachment factory
 */
PMF_Attachment_Factory::init($faqconfig->get('main.attachmentsStorageType'),
                             $faqconfig->get('main.defaultAttachmentEncKey'),
                             $faqconfig->get('main.enableAttachmentEncryption'));

$currentSave   = filter_input(INPUT_POST, 'save',   FILTER_SANITIZE_STRING);
$currentAction = PMF_Filter::filterInput(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

$Language = new PMF_Language();
$LANGCODE = $Language->setLanguage($faqconfig->get('main.languageDetection'), $faqconfig->get('main.language'));

require_once PMF_ROOT_DIR . '/lang/language_en.php';

if (isset($LANGCODE) && PMF_Language::isASupportedLanguage($LANGCODE)) {
    require_once PMF_ROOT_DIR . '/lang/language_'.$LANGCODE.'.php';
} else {
    $LANGCODE = 'en';
}

$auth = false;
$user = PMF_User_CurrentUser::getFromSession($faqconfig->get('main.ipCheck'));
if ($user) {
    $auth = true;
} else {
    $error = $PMF_LANG['ad_auth_sess'];
    $user  = null;
    unset($user);
}

//
// Get current user rights
//
$permission = array();
if ($auth === true) {
    // read all rights, set them FALSE
    $allRights = $user->perm->getAllRightsData();
    foreach ($allRights as $right) {
        $permission[$right['name']] = false;
    }
    // check user rights, set them TRUE
    $allUserRights = $user->perm->getAllUserRights($user->getUserId());
    foreach ($allRights as $right) {
        if (in_array($right['right_id'], $allUserRights))
            $permission[$right['name']] = true;
    }
}

if (is_null($currentAction) || !is_null($currentSave)) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $PMF_LANG["metaLanguage"]; ?>" lang="<?php print $PMF_LANG["metaLanguage"]; ?>">
<head>
    <title><?php print $faqconfig->get('main.titleFAQ'); ?> - powered by phpMyFAQ</title>
    <meta name="copyright" content="(c) 2001-2009 phpMyFAQ Team" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="../template/<?php echo PMF_Template::getTplSetName(); ?>/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="../template/<?php echo PMF_Template::getTplSetName(); ?>/favicon.ico" type="image/x-icon" />
    <style type="text/css">
    @import url(style/admin.css);
    body { margin: 5px; }
    </style>
    <script type="text/javascript" src="../inc/js/functions.js"></script>
</head>
<body>
<?php
}
if (is_null($currentAction) && $auth && $permission["addatt"]) {
    $recordId   = filter_input(INPUT_GET, 'record_id',   FILTER_VALIDATE_INT);
    $recordLang = filter_input(INPUT_GET, 'record_lang', FILTER_SANITIZE_STRING);
?>
    <form action="?action=save" enctype="multipart/form-data" method="post">
    <fieldset>
    <legend><?php print $PMF_LANG["ad_att_addto"]." ".$PMF_LANG["ad_att_addto_2"]; ?></legend>
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php print $faqconfig->get('main.maxAttachmentSize'); ?>" />
        <input type="hidden" name="record_id" value="<?php print $recordId; ?>" />
        <input type="hidden" name="record_lang" value="<?php print $recordLang; ?>" />
        <input type="hidden" name="save" value="TRUE" />
        <?php print $PMF_LANG["ad_att_att"]; ?> <input name="userfile" type="file" />
        <input class="submit" type="submit" value="<?php print $PMF_LANG["ad_att_butt"]; ?>" />
    </fieldset>
    </form>
<?php
}

if (!is_null($currentAction) && $auth && !$permission["addatt"]) {
    print $PMF_LANG["err_NotAuth"];
    die();
}

if (!is_null($currentSave) && $currentSave == true && $auth && $permission["addatt"]) {
    $recordId   = filter_input(INPUT_POST, 'record_id',   FILTER_VALIDATE_INT);
    $recordLang = filter_input(INPUT_POST, 'record_lang', FILTER_SANITIZE_STRING);
?>
<p><strong><?php print $PMF_LANG["ad_att_addto"]." ".$PMF_LANG["ad_att_addto_2"]; ?></strong></p>
<?php
    if (is_uploaded_file($_FILES["userfile"]["tmp_name"]) && !(filesize($_FILES["userfile"]["tmp_name"]) > $faqconfig->get('main.maxAttachmentSize'))) {

        $att = PMF_Attachment_Factory::create();
        $att->setRecordId($recordId);
        $att->setRecordLang($recordLang);
        
        /**
         * To add user difined key
         * $att->setKey($somekey, false);
         */
        try {
            $uploaded = $att->save($_FILES["userfile"]["tmp_name"], $_FILES["userfile"]["name"]);
            
            if ($uploaded) {
                print "<p>".$PMF_LANG["ad_att_suc"]."</p>";
            } else {
                throw new Exception;
            }
        } catch (Exception $e) {
            $att->delete();
            print "<p>".$PMF_LANG["ad_att_fail"]."</p>";
        }
    } else {
        printf("<p>%s</p>", sprintf($PMF_LANG['ad_attach_4'], $faqconfig->get('main.maxAttachmentSize')));
    }
    print "<p align=\"center\"><a href=\"javascript:window.close()\">".$PMF_LANG["ad_att_close"]."</a></p>";
}
if (!is_null($currentSave) && $currentSave == true && $auth && !$permission["addatt"]) {
    print $PMF_LANG["err_NotAuth"];
    die();
}

if (DEBUG) {
    print "\n\n-- Debug information:\n<p>".$db->sqllog()."</p>";
}

if (!is_null($currentSave) && $currentAction != 'savedcontent' && $currentAction != 'savedlogs') {
    print "</body></html>";
}

$db->dbclose();
