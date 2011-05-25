<?php
/**
 * Shows the page with the news record and - when available - the user
 * comments
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
 * @package   Frontend
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @author    Matteo Scaramuccia <matteo@scaramuccia.com>
 * @copyright 2006-2009 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/MPL-1.1.html Mozilla Public License Version 1.1
 * @link      http://www.phpmyfaq.de
 * @since     2006-07-23
 */

if (!defined('IS_VALID_PHPMYFAQ')) {
    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']));
    exit();
}

$captcha = new PMF_Captcha($db, $Language);
$comment = new PMF_Comment();

$captcha->setSessionId($sids);
if (!is_null($showCaptcha)) {
    $captcha->showCaptchaImg();
    exit;
}

$oNews   = new PMF_News();
$news_id = PMF_Filter::filterInput(INPUT_GET, 'newsid', FILTER_VALIDATE_INT);

if (is_null($news_id)) {
    header('Location: http://'.$_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']));
    exit();
}

$faqsession->userTracking('news_view', $id);

// Define the header of the page
$writeNewsHeader = $faqconfig->get('main.titleFAQ') . $PMF_LANG['msgNews'];
$writeNewsRSS    = '&nbsp;<a href="feed/news/rss.php" target="_blank"><img id="newsRSS" src="images/feed.png" width="16" height="16" alt="RSS" /></a>';

// Get all data from the news record
$news = $oNews->getNewsEntry($news_id);

$content = $news['content'];
$header  = $news['header'];

// Add Glossary entries
$oGlossary = new PMF_Glossary();
$content   = $oGlossary->insertItemsIntoContent($content);
$header    = $oGlossary->insertItemsIntoContent($header);
 
// Add information link if existing
if (strlen($news['link']) > 0) {
    $content .= sprintf('</p><p>%s<a href="%s" target="%s">%s</a>',
        $PMF_LANG['msgInfo'],
        $news['link'],
        $news['target'],
        $news['linkTitle']);
}

// Show link to edit the news?
$editThisEntry = '';
if (isset($permission['editnews'])) {
    $editThisEntry = sprintf(
                        '<a href="%sadmin/index.php?action=news&amp;do=edit&amp;id=%d">%s</a>',
                        PMF_Link::getSystemRelativeUri('index.php'),
                        $news_id,
                        $PMF_LANG['ad_menu_news_edit']);
}

// Is the news item expired?
$expired = (date('YmdHis') > $news['dateEnd']);

// Does the user have the right to add a comment?
if ((!$news['active']) || (!$news['allowComments']) || $expired) {
    $commentMessage = $PMF_LANG['msgWriteNoComment'];
} else {
    $oLink            = new PMF_Link($_SERVER['SCRIPT_NAME'].'?'.str_replace('&', '&amp;', $_SERVER['QUERY_STRING']));
    $oLink->itemTitle = $header;
    $commentHref      = $oLink->toString().'#comment';
    $commentMessage   = sprintf(
        '<a onclick="javascript:$(\'#comment\').show();" href="%s">%s</a>',
        $commentHref,
        $PMF_LANG['newsWriteComment']);
}

// Set the template variables
$tpl->processTemplate ("writeContent", array(
    'writeNewsHeader'     => $writeNewsHeader,
    'writeNewsRSS'        => $writeNewsRSS,
    'writeHeader'         => $header,
    'writeContent'        => $content,
    'writeDateMsg'        => ($news['active'] && (!$expired)) ? $PMF_LANG['msgLastUpdateArticle'].'<span id="newsLastUpd">'.$news['date'].'</span>' : '',
    'writeAuthor'         => ($news['active'] && (!$expired)) ? $PMF_LANG['msgAuthor'] . ': ' . $news['authorName'] : '',
    'editThisEntry'       => $editThisEntry,
    'writeCommentMsg'     => $commentMessage,
    'msgWriteComment'     => $PMF_LANG['newsWriteComment'],
    'writeSendAdress'     => '?'.$sids.'action=savecomment',
    'newsId'              => $news_id,
    'newsLang'            => $news['lang'],
    'msgCommentHeader'    => $PMF_LANG['msgCommentHeader'],
    'msgNewContentName'   => $PMF_LANG['msgNewContentName'],
    'msgNewContentMail'   => $PMF_LANG['msgNewContentMail'],
    'defaultContentMail'  => ($user instanceof PMF_User_CurrentUser) ? $user->getUserData('email') : '',
    'defaultContentName'  => ($user instanceof PMF_User_CurrentUser) ? $user->getUserData('display_name') : '',
    'msgYourComment'      => $PMF_LANG['msgYourComment'],
    'msgNewContentSubmit' => $PMF_LANG['msgNewContentSubmit'],
    'captchaFieldset'     => printCaptchaFieldset($PMF_LANG['msgCaptcha'], $captcha->printCaptcha('writecomment'), $captcha->caplength),
    'writeComments'       => $comment->getComments($news_id, PMF_Comment::COMMENT_TYPE_NEWS)));

$tpl->includeTemplate('writeContent', 'index');
