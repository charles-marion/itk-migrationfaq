<?php
/**
 * XML, XHTML and PDF export - main page
 * 
 * PHP Version 5.2
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
 *
 * @category  phpMyFAQ 
 * @package   Administration
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @author    Matteo Scaramuccia <matteo@phpmyfaq.de>
 * @copyright 2003-2010 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/MPL-1.1.html Mozilla Public License Version 1.1
 * @link      http://www.phpmyfaq.de
 * @since     2003-04-17
 */

if (!defined('IS_VALID_PHPMYFAQ_ADMIN')) {
    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']));
    exit();
}

require PMF_INCLUDE_DIR . '/Export.php';
?>
    <h2><?php print($PMF_LANG["ad_menu_export"]); ?></h2>
    <form action="?action=exportfile" method="post">
<?php

if (!PMF_Db::checkOnEmptyTable('faqdata')) {

    if (!PMF_Db::checkOnEmptyTable('faqcategories')) {
        $category = new PMF_Category($current_admin_user, $current_admin_groups);
        $category->buildTree();
        
        $helper = PMF_Helper_Category::getInstance();
        $helper->setCategory($category);
?>
        <fieldset><legend><?php print($PMF_LANG['ad_export_which_cat']); ?></legend>
            <label class="left" for="rubrik"><?php print($PMF_LANG["ad_entry_category"]); ?></label>
            <select name="catid" id="catid" size="1">
<?php
        print $helper->renderCategoryOptions();
?>
            </select>
            <br />
            <label class="left" for="downwards"><?php print($PMF_LANG['ad_export_cat_downwards']); ?></label>
            <input type="checkbox" name="downwards" value="1" checked="checked"></input>
        </fieldset>
        <br />
<?php
    }
?>
        <fieldset><legend><?php print($PMF_LANG['ad_export_type']); ?></legend>
            <p>
                <label for="export_type"><?php print($PMF_LANG['ad_export_type_choose']); ?></label><br />
                <input type="radio" name="type" value="pdf" checked="checked" />&nbsp;<?php print($PMF_LANG["ad_export_generate_pdf"]); ?><br />
                <input type="radio" name="type" value="xml" />&nbsp;<?php print($PMF_LANG["ad_xml_gen"]); ?><br />
                <input type="radio" name="type" value="xhtml" />&nbsp;<?php print($PMF_LANG['ad_export_gen_xhtml']); ?>
            </p>
            <p>
                <label for="disposition"><?php print($PMF_LANG['ad_export_download_view']); ?></label>
                <input type="radio" name="dispos" value="<?php print PMF_HttpStreamer::EXPORT_DISPOSITION_ATTACHMENT; ?>" checked="checked"><?php print($PMF_LANG['ad_export_download']); ?></input>
                <input type="radio" name="dispos" value="<?php print PMF_HttpStreamer::EXPORT_DISPOSITION_INLINE; ?>"><?php print($PMF_LANG['ad_export_view']); ?></input>
            </p>
        </fieldset>
        <div align="center">
            <p>
                <input class="submit" type="submit" name="submitExport" value="<?php print(strip_tags($PMF_LANG["ad_menu_export"])); ?>" />
                &nbsp;<input class="submit" type="reset" name="resetExport" value="<?php print(strip_tags($PMF_LANG["ad_config_reset"])); ?>" />
            </p>
        </div>
    </form>
<?php
} else {
    print($PMF_LANG["err_noArticles"]);
}