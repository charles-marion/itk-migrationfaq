<?php
/**
 * The send2friend page
 *
 * @category  phpMyFAQ
 * @package   Frontend
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @since     2002-09-16
 * @copyright 2002-2009 phpMyFAQ Team
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

if (!defined('IS_VALID_PHPMYFAQ')) {
    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']));
    exit();
}

$captcha = new PMF_Captcha($db, $Language);
$captcha->setSessionId($sids);

if (!is_null($showCaptcha)) {
    $captcha->showCaptchaImg();
    exit;
}

$faqsession->userTracking('send2friend', 0);

$cat     = PMF_Filter::filterInput(INPUT_GET, 'cat', FILTER_VALIDATE_INT);
$id      = PMF_Filter::filterInput(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$artlang = PMF_Filter::filterInput(INPUT_GET, 'artlang', FILTER_SANITIZE_STRIPPED);

$send2friendLink = sprintf('%s/index.php?action=artikel&amp;cat=%d&amp;id=%d&amp;artlang=%s',
    $faqconfig->get('main.referenceURL'),
    (int)$cat,
    (int)$id,
    urlencode($artlang));

$tpl->processTemplate ('writeContent', array(
    'msgSend2Friend'     => $PMF_LANG['msgSend2Friend'],
    'writeSendAdress'    => '?'.$sids.'action=mailsend2friend',
    'msgS2FReferrer'     => 'link',
    'msgS2FName'         => $PMF_LANG['msgS2FName'],
    'msgS2FEMail'        => $PMF_LANG['msgS2FEMail'],
    'defaultContentMail' => ($user instanceof PMF_User_CurrentUser) ? $user->getUserData('email') : '',
    'defaultContentName' => ($user instanceof PMF_User_CurrentUser) ? $user->getUserData('display_name') : '',
    'msgS2FFriends'      => $PMF_LANG['msgS2FFriends'],
    'msgS2FEMails'       => $PMF_LANG['msgS2FEMails'],
    'msgS2FText'         => $PMF_LANG['msgS2FText'],
    'send2friend_text'   => $faqconfig->get('main.send2friendText'),
    'msgS2FText2'        => $PMF_LANG['msgS2FText2'],
    'send2friendLink'    => $send2friendLink,
    'msgS2FMessage'      => $PMF_LANG['msgS2FMessage'],
    'captchaFieldset'    => printCaptchaFieldset($PMF_LANG['msgCaptcha'], $captcha->printCaptcha('send2friend'), $captcha->caplength),
    'msgS2FButton'       => $PMF_LANG['msgS2FButton']));

$tpl->includeTemplate('writeContent', 'index');
