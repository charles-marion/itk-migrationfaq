<?php
/**
 * Reset a forgotten password to a new one.
 *
 * @package    phpMyFAQ
 * @subpackage Administration 
 * @author     Thorsten Rinne <thorsten@phpmyfaq.de>
 * @since      2004-05-11
 * @version    SVN: $Id$ 
 * @copyright  2004-2009 phpMyFAQ Team
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
// Check if config/database.php exist -> if not, redirect to installer
//
if (!file_exists(PMF_ROOT_DIR . '/config/database.php')) {
    header("Location: ".str_replace('admin/index.php', '', $_SERVER['SCRIPT_NAME'])."install/setup.php");
    exit();
}

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

//
// get language (default: english)
//
$Language = new PMF_Language();
$LANGCODE = $Language->setLanguage($faqconfig->get('main.languageDetection'), $faqconfig->get('main.language'));

// Preload English strings
require_once PMF_ROOT_DIR.'/lang/language_en.php';

if (isset($LANGCODE) && PMF_Language::isASupportedLanguage($LANGCODE)) {
    // Overwrite English strings with the ones we have in the current language
    require_once PMF_ROOT_DIR.'/lang/language_'.$LANGCODE.'.php';
} else {
    $LANGCODE = 'en';
}

//
// Initalizing static string wrapper
//
PMF_String::init($LANGCODE);

/* header of the admin page */
require_once ("header.php");
?>
</div>
<div id="bodyText">
<?php

$action = PMF_Filter::filterInput(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

if ($action == "sendmail") {
	
	$username = PMF_Filter::filterInput(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$email    = PMF_Filter::filterInput(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	
        if (!is_null($username) && !is_null($email)) {

            $user       = new PMF_User_CurrentUser();
            $loginExist = $user->getUserByLogin($username);

            if ($loginExist && ($email == $user->getUserData('email'))) {
                $consonants = array(
                    'b','c','d','f','g','h','j','k','l','m','n','p','r','s','t','v','w','x','y','z'
                );
                $vowels = array(
                    'a','e','i','o','u'
                );
                $newPassword = '';
                srand((double)microtime()*1000000);
                for ($i = 1; $i <= 4; $i++) {
                    $newPassword .= $consonants[rand(0,19)];
                    $newPassword .= $vowels[rand(0,4)];
                }
                $user->changePassword($newPassword);
                $text = $PMF_LANG['lostpwd_text_1']."\nUsername: ".$username."\nNew Password: ".$newPassword."\n\n".$PMF_LANG["lostpwd_text_2"];

                $mail = new PMF_Mail();
                $mail->addTo($email);
                $mail->subject = '[%sitename%] Username / password request';
                $mail->message = $text;
                $result = $mail->send();
                unset($mail);
                // Trust that the email has been sent
                print $PMF_LANG["lostpwd_mail_okay"];
                print "<p><img src=\"images/arrow.gif\" width=\"11\" height=\"11\" alt=\"".$PMF_LANG["ad"]."\" border=\"0\" /> <a href=\"index.php\" title=\"".$PMF_LANG["ad"]."\">".$PMF_LANG["ad"]."</a></p>";
            } else {
                print $PMF_LANG["lostpwd_err_1"];
            }
        } else {
            print $PMF_LANG["lostpwd_err_2"];
        }
    } else {
?>
    <form action="?action=sendmail" method="post">
    <fieldset class="login">
        <legend class="login"><?php print $PMF_LANG["ad_passwd_cop"]; ?></legend>

        <label class="left"><?php print $PMF_LANG["ad_auth_user"]; ?></label>
        <input type="text" name="username" size="30" /><br />

        <label class="left"><?php print $PMF_LANG["ad_entry_email"]; ?></label>
        <input type="text"  name="email" size="30" /><br />

        <input class="submit" type="submit" value="<?php print $PMF_LANG["msgNewContentSubmit"]; ?>" />

        <p><img src="images/arrow.gif" width="11" height="11" alt="<?php print $PMF_LANG["ad_sess_back"]; ?> FAQ" border="0" /> <a href="index.php" title="<?php print $PMF_LANG["ad_sess_back"]; ?> FAQ"><?php print $PMF_LANG["ad_sess_back"]; ?></a></p>
        <p><img src="images/arrow.gif" width="11" height="11" alt="<?php print $faqconfig->get('main.titleFAQ'); ?> FAQ" border="0" /> <a href="../index.php" title="<?php print $faqconfig->get('main.titleFAQ'); ?> FAQ"><?php print $faqconfig->get('main.titleFAQ'); ?> FAQ</a></p>

    </fieldset>
    </form>
<?php
}

if (DEBUG) {
    print "\n<p>DEBUG INFORMATION:</p>\n";
    print "<p>".$db->sqllog()."</p>";
}

require_once 'footer.php';
$db->dbclose();