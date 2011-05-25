<?php
/**
 * Frontend for Backup and Restore
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
 * @copyright 2003-2010 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/MPL-1.1.html Mozilla Public License Version 1.1
 * @link      http://www.phpmyfaq.de
 * @since     2003-02-24
 */

if (!defined('IS_VALID_PHPMYFAQ_ADMIN')) {
    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']));
    exit();
}

printf('<h2>%s</h2>', $PMF_LANG['ad_csv_backup']);

if ($permission['backup']) {
?>
    <fieldset>
        <legend><?php print $PMF_LANG["ad_csv_head"]; ?></legend>
        <p><?php print $PMF_LANG["ad_csv_make"]; ?></p>
        <p align="center">
            <a href="backup.export.php?action=backup_content"><?php print $PMF_LANG["ad_csv_linkdat"]; ?></a> | 
            <a href="backup.export.php?action=backup_logs"><?php print $PMF_LANG["ad_csv_linklog"]; ?></a>
        </p>
    </fieldset>

    <form method="post" action="?action=restore" enctype="multipart/form-data">
    <fieldset>
        <legend><?php print $PMF_LANG["ad_csv_head2"]; ?></legend>
        <p><?php print $PMF_LANG["ad_csv_restore"]; ?></p>
        <div align="center">
        <?php print $PMF_LANG["ad_csv_file"]; ?>:
            <input type="file" name="userfile" size="30" />&nbsp;
            <input class="submit" type="submit" value="<?php print $PMF_LANG["ad_csv_ok"]; ?>" />
        </div>
    </fieldset>
    </form>
<?php
} else {
	print $PMF_LANG["err_NotAuth"];
}
