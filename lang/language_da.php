<?php
/**
* $Id: language_da.php,v 1.27 2007-07-06 19:06:10 thorstenr Exp $
*
* Danish language file
*
* @author       Max Andersen <max@militant.dk>
* @author       Poul Melgaard <pcm@surfray.com>
* @since        2004-06-24
* @copyright    (c) 2004-2006 phpMyFAQ Team
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

$PMF_LANG["metaCharset"] = "UTF-8";
$PMF_LANG["metaLanguage"] = "da";
$PMF_LANG["language"] = "Danish";
// ltr: left to right (e.g. English language); rtl: right to left (e.g. Arabic language)
$PMF_LANG["dir"] = "ltr";

$PMF_LANG["nplurals"] = "2";
/**
 * This parameter is used with the function 'plural' from inc/PMF_Language/Plurals.php
 * If this parameter and function are not in sync plural form support will be broken.
 */

// Navigation
$PMF_LANG["msgCategory"] = "Kategorier";
$PMF_LANG["msgShowAllCategories"] = "Vis alle kategorier";
$PMF_LANG["msgSearch"] = "S&oslash;g:";
$PMF_LANG["msgAddContent"] = "Tilf&oslash;j indhold";
$PMF_LANG["msgQuestion"] = "Stil Sp&oslash;rgsm&aring;l";
$PMF_LANG["msgOpenQuestions"] = "Ubesvarede sp&oslash;rgsm&aring;l";
$PMF_LANG["msgHelp"] = "Hj&aelig;lp";
$PMF_LANG["msgContact"] = "Kontakt";
$PMF_LANG["msgHome"] = "Til forsiden";
$PMF_LANG["msgNews"] = "FAQ-Nyheder";
$PMF_LANG["msgUserOnline"] = " brugere online";
$PMF_LANG["msgXMLExport"] = "XML-Fil";
$PMF_LANG["msgBack2Home"] = "til forsiden";

// Contentpages
$PMF_LANG["msgFullCategories"] = "Kategorier med indhold";
$PMF_LANG["msgFullCategoriesIn"] = "kategorier med indhold i  ";
$PMF_LANG["msgSubCategories"] = "underkategorier";
$PMF_LANG["msgEntries"] = "indl&aelig;g";
$PMF_LANG["msgEntriesIn"] = "Indl&aelig;g i ";
$PMF_LANG["msgViews"] = "visninger";
$PMF_LANG["msgPage"] = "Side ";
$PMF_LANG["msgPages"] = " sider";
$PMF_LANG["msgPrevious"] = "forrige";
$PMF_LANG["msgNext"] = "n&aelig;ste";
$PMF_LANG["msgCategoryUp"] = "Et niveau op";
$PMF_LANG["msgLastUpdateArticle"] = "Sidste opdatering: ";
$PMF_LANG["msgAuthor"] = "Forfatter: ";
$PMF_LANG["msgPrinterFriendly"] = "Printer-venlig version";
$PMF_LANG["msgPrintArticle"] = "Print dette svar";
$PMF_LANG["msgMakeXMLExport"] = "Eksport som XML-Fil";
$PMF_LANG["msgAverageVote"] = "Gennemsnitlig vurdering:";
$PMF_LANG["msgVoteUseability"] = "Vurder venligst dette indl&aelig;g";
$PMF_LANG["msgVoteFrom"] = "af";
$PMF_LANG["msgVoteBad"] = "meget d&aring;rligt";
$PMF_LANG["msgVoteGood"] = "meget godt";
$PMF_LANG["msgVotings"] = "Stemmer ";
$PMF_LANG["msgVoteSubmit"] = "Stem";
$PMF_LANG["msgVoteThanks"] = "mange tak for din stemme!";
$PMF_LANG["msgYouCan"] = "Du kan ";
$PMF_LANG["msgWriteComment"] = "kommentere dette svar";
$PMF_LANG["msgShowKategori"] = "Indhold: ";
$PMF_LANG["msgCommentBy"] = "kommentar fra  ";
$PMF_LANG["msgCommentHeader"] = "Kommentar til dette indl&aelig;g";
$PMF_LANG["msgYourComment"] = "dine kommentarer:";
$PMF_LANG["msgCommentThanks"] = "mange tak for din kommentar!";
$PMF_LANG["msgSeeXMLFile"] = "&Aring;bn XML-Fil";
$PMF_LANG["msgSend2Friend"] = "Send til en ven";
$PMF_LANG["msgS2FName"] = "Dit navn:";
$PMF_LANG["msgS2FEMail"] = "Din e-mail adresse:";
$PMF_LANG["msgS2FFriends"] = "Dine venners:";
$PMF_LANG["msgS2FEMails"] = ". e-mail adresser:";
$PMF_LANG["msgS2FText"] = "Den f&oslash;lgende tekst vil blive sendt:";
$PMF_LANG["msgS2FText2"] = "Du vil finde indl&aelig;gget p&aring; den f&oslash;lgende adresse:";
$PMF_LANG["msgS2FMessage"] = "Yderligere information til dine venner:";
$PMF_LANG["msgS2FButton"] = "send e-mail";
$PMF_LANG["msgS2FThx"] = "Tak for din anbefaling!";
$PMF_LANG["msgS2FMailSubject"] = "Anbefaling fra ";

// Search
$PMF_LANG["msgSearchWord"] = "S&oslash;geord";
$PMF_LANG["msgSearchFind"] = "S&oslash;geresultat for ";
$PMF_LANG["msgSearchAmount"] = " s&oslash;geresultat";
$PMF_LANG["msgSearchAmounts"] = " s&oslash;geresultater";
$PMF_LANG["msgSearchCategory"] = "Kategori: ";
$PMF_LANG["msgSearchContent"] = "indhold: ";

// new Content
$PMF_LANG["msgNewContentHeader"] = "Forslag til FAQ";
$PMF_LANG["msgNewContentAddon"] = "Dit indl&aelig;g bliver ikke offenliggjort med det samme, da det f&oslash;rst skal genneml&aelig;ses af en administrator. <br />N&oslash;dvendige felter: <strong>dit navn</strong>, <strong>din e-mail-adresse</strong>, <strong>kategori</strong>, <strong>overskrift</strong> og <strong>dit forslag</strong>.<br />Separer venligst s&oslash;geord med mellemrum (benyt ikke komma).";
$PMF_LANG["msgNewContentName"] = "Dit navn:";
$PMF_LANG["msgNewContentMail"] = "Din e-mail-adresse:";
$PMF_LANG["msgNewContentCategory"] = "V&aelig;lg kategori:";
$PMF_LANG["msgNewContentTheme"] = "Overskrift:";
$PMF_LANG["msgNewContentArticle"] = "Dit FAQ indl&aelig;g:";
$PMF_LANG["msgNewContentKeywords"] = "N&oslash;gleord:";
$PMF_LANG["msgNewContentLink"] = "URL til dette indl&aelig;g";
$PMF_LANG["msgNewContentSubmit"] = "send";
$PMF_LANG["msgInfo"] = "Yderligere information: ";
$PMF_LANG["msgNewContentThanks"] = "Tak for dit forslag!";
$PMF_LANG["msgNoQuestionsAvailable"] = "Der er p.t. ingen udest&aring;ende sp&oslash;rgsm&aring;l.";

// ask Question
$PMF_LANG["msgNewQuestion"] = "Stil dit sp&oslash;rgsm&aring;l nedenunder:";
$PMF_LANG["msgAskCategory  "] = "V&aelig;lg kategori:";
$PMF_LANG["msgAskYourQuestion"] = "Dit sp&oslash;rgsm&aring;l:";
$PMF_LANG["msgAskThx4Mail"] = "<h2>Tak for din e-mail!</h2>";
$PMF_LANG["msgDate_User"] = "Dato / Bruger";
$PMF_LANG["msgQuestion2"] = "Sp&oslash;rgsm&aring;l";
$PMF_LANG["msg2answer"] = "svar";
$PMF_LANG["msgQuestionText"] = "Her kan du se sp&oslash;rgsm&aring;l oprettet af andre brugere. Hvis du besvarer et sp&oslash;rgsm&aring;l, bliver dit svar muligvis brugt i FAQ'en.";

// Help
$PMF_LANG["msgHelpText"] = "<p>Strukturen af denne FAQ (<strong>F</strong>requently <strong>A</strong>sked <strong>Q</strong>uestions) er rimelig simpel. Du kan enten navigere i <strong><a href=\"?action=show\">kategorierne</a></strong> eller lade <strong><a href=\"?action=search\">FAQ maskinen</a></strong> s&oslash;ge efter n&oslash;gleord.</p>";

// Contact
$PMF_LANG["msgContactEMail"] = "send e-mail til webmaster:";
$PMF_LANG["msgMessage"] = "Din besked:";

// Startseite
$PMF_LANG["msgNews"] = " Nyheder";
$PMF_LANG["msgTopTen"] = "TOP 10";
$PMF_LANG["msgHomeThereAre"] = "Der er ";
$PMF_LANG["msgHomeArticlesOnline"] = " aktive sp&oslash;rgsm&aring;l";
$PMF_LANG["msgNoNews"] = "Ingen nyheder er gode nyheder.";
$PMF_LANG["msgLatestArticles"] = "De fem seneste sp&oslash;rgsm&aring;l:";

// E-Mailbenachrichtigung
$PMF_LANG["msgMailThanks"] = "Tusind tak for dit indl&aelig;g til FAQ'en.";
$PMF_LANG["msgMailCheck"] = "Der er et nyt indl&aelig;g i FAQen!Kontroller venligst admin sektionen!";
$PMF_LANG["msgMailContact"] = "Din besked er sendt til administratoren.";

// Fehlermeldungen
$PMF_LANG["err_noDatabase"] = "Ingen forbindelse til databasen.";
$PMF_LANG["err_noHeaders"] = "Ingen kategori fundet.";
$PMF_LANG["err_noArticles"] = "<p>Ingen indl&aelig;g fundet.</p>";
$PMF_LANG["err_badID"] = "<p>Forkert ID.</p>";
$PMF_LANG["err_noTopTen"] = "<p>Ikke indl&aelig;g nok til en Top 10.</p>";
$PMF_LANG["err_nothingFound"] = "<p>ingen indl&aelig;g fundet.</p>";
$PMF_LANG["err_SaveEntries"] = "N&oslash;dvendige felter: <strong>dit navn</strong>, <strong>din e-mail-adresse</strong>, <strong>kategori</strong>, <strong>overskrift</strong> og <strong>dit indl&aelig;g</strong>!<br /><br /><a href=\"javascript:history.back();\">G&aring; tilbage</a><br /><br />";
$PMF_LANG["err_SaveComment"] = "N&oslash;dvendige felter: <strong>dit navn</strong>, <strong>din e-mail-adresse</strong> og <strong>dine kommentarer</strong>!<br /><br /><a href=\"javascript:history.back();\">En side tilbage</a><br /><br />";
$PMF_LANG["err_VoteTooMuch"] = "<p>Vi t&aelig;ller ikke dobbelt stemmer. <a href=\"javascript:history.back();\">Klik her</a>, for at g&aring; tilbage.</p>";
$PMF_LANG["err_noVote"] = "<p><strong>Du vurderede ikke sp&oslash;rgsm&aring;let!</strong> <a href=\"javascript:history.back();\">Klik venligst her</a>, for at stemme.</p>";
$PMF_LANG["err_noMailAdress"] = "din e-mail-adresse er ikke korrekt.<br /><a href=\"javascript:history.back();\">tilbage</a>";
$PMF_LANG["err_sendMail"] = "N&oslash;dvendige felter: <strong>dit navn</strong>, <strong>din e-mail-adresse</strong> og <strong>dit sp&oslash;rgsm&aring;l</strong>!<br /><br /><a href=\"javascript:history.back();\">En side tilbage</a><br /><br />";

// Hilfe zur Suche
$PMF_LANG["help_search"] = "<p><strong>Fundne indl&aelig;g:</strong><br /></p>";

// MenÃ¼
$PMF_LANG["ad"] = "ADMIN SECTION";
$PMF_LANG["ad_menu_user_administration"] = "Brugere";
$PMF_LANG["ad_menu_entry_aprove"] = "Godkend ";
$PMF_LANG["ad_menu_entry_edit"] = "Ret FAQ-indl&aelig;g";
$PMF_LANG["ad_menu_categ_add"] = "Tilf&oslash;j Kategori";
$PMF_LANG["ad_menu_categ_edit"] = "Ret Kategori";
$PMF_LANG["ad_menu_news_add"] = "Tilf&oslash;j nyheder";
$PMF_LANG["ad_menu_news_edit"] = "Ret nyheder";
$PMF_LANG["ad_menu_open"] = "Ret &aring;bne sp&oslash;rgsm&aring;l";
$PMF_LANG["ad_menu_stat"] = "Statistik";
$PMF_LANG["ad_menu_cookie"] = "Cookies";
$PMF_LANG["ad_menu_session"] = "Se sessioner";
$PMF_LANG["ad_menu_adminlog"] = "Se Adminlog";
$PMF_LANG["ad_menu_passwd"] = "Skift adgangskode";
$PMF_LANG["ad_menu_logout"] = "Log af";
$PMF_LANG["ad_menu_startpage"] = "Startside";

// Nachrichten
$PMF_LANG["ad_msg_identify"] = "Profilnavn.";
$PMF_LANG["ad_msg_passmatch"] = "Begge adgangskoder skal v&aelig;re <strong>ens</strong>!";
$PMF_LANG["ad_msg_savedsuc_1"] = "Egenskaber for gruppen ";
$PMF_LANG["ad_msg_savedsuc_2"] = "blev gemt.";
$PMF_LANG["ad_msg_mysqlerr"] = "grundet <strong>database fejl</strong>, kunne profilen ikke gemmes.";
$PMF_LANG["ad_msg_noauth"] = "Du er ikke autoriseret.";

// Allgemein
$PMF_LANG["ad_gen_page"] = "Side";
$PMF_LANG["ad_gen_of"] = "af";
$PMF_LANG["ad_gen_lastpage"] = "Forrige side";
$PMF_LANG["ad_gen_nextpage"] = "N&aelig;ste side";
$PMF_LANG["ad_gen_save"] = "Gem";
$PMF_LANG["ad_gen_reset"] = "Nulstil";
$PMF_LANG["ad_gen_yes"] = "Ja";
$PMF_LANG["ad_gen_no"] = "Nej";
$PMF_LANG["ad_gen_top"] = "Toppen af siden";
$PMF_LANG["ad_gen_ncf"] = "Ingen kategori fundet!";
$PMF_LANG["ad_gen_delete"] = "Slet";

// Brugeradministration
$PMF_LANG["ad_user"] = "Bruger Administration";
$PMF_LANG["ad_user_username"] = "Registrerede brugere";
$PMF_LANG["ad_user_rights"] = "Bruger rettigheder";
$PMF_LANG["ad_user_edit"] = "ret";
$PMF_LANG["ad_user_delete"] = "slet";
$PMF_LANG["ad_user_add"] = "Tilføj bruger";
$PMF_LANG["ad_user_profou"] = "Brugerprofil";
$PMF_LANG["ad_user_name"] = "Brugernavn";
$PMF_LANG["ad_user_password"] = "Adgangskode";
$PMF_LANG["ad_user_confirm"] = "Godkend";
$PMF_LANG["ad_user_rights"] = "Rettigheder";
$PMF_LANG["ad_user_del_1"] = "Brugeren";
$PMF_LANG["ad_user_del_2"] = "skal slettes?";
$PMF_LANG["ad_user_del_3"] = "Er du sikker?";
$PMF_LANG["ad_user_deleted"] = "Brugeren er slettet.";

// Beitragsverwaltung
$PMF_LANG["ad_entry_aor"] = "Administration af sp&oslash;rgsm&aring;l";
$PMF_LANG["ad_entry_id"] = "ID";
$PMF_LANG["ad_entry_topic"] = "Emne";
$PMF_LANG["ad_entry_action"] = "Aktion";
$PMF_LANG["ad_entry_edit_1"] = "Ret indl&aelig;g";
$PMF_LANG["ad_entry_edit_2"] = "";
$PMF_LANG["ad_entry_theme"] = "Tema:";
$PMF_LANG["ad_entry_content"] = "Indhold:";
$PMF_LANG["ad_entry_keywords"] = "N&oslash;gleord:";
$PMF_LANG["ad_entry_author"] = "Forfatter:";
$PMF_LANG["ad_entry_category"] = "Kategori:";
$PMF_LANG["ad_entry_active"] = "Aktiv?";
$PMF_LANG["ad_entry_date"] = "Dato:";
$PMF_LANG["ad_entry_changed"] = "&aelig;ndret?";
$PMF_LANG["ad_entry_changelog"] = "Historik:";
$PMF_LANG["ad_entry_commentby"] = "Kommentar af";
$PMF_LANG["ad_entry_comment"] = "Kommentarer:";
$PMF_LANG["ad_entry_save"] = "Gem";
$PMF_LANG["ad_entry_delete"] = "Slet";
$PMF_LANG["ad_entry_delcom_1"] = "Er du sikker p&aring; at brugerens kommentar";
$PMF_LANG["ad_entry_delcom_2"] = "skal slettes?";
$PMF_LANG["ad_entry_commentdelsuc"] = "Kommentaren er <strong>slettet</strong>.";
$PMF_LANG["ad_entry_back"] = "Tilbage til artiklen";
$PMF_LANG["ad_entry_commentdelfail"] = "Kommentaren blev <strong>ikke</strong> slettet.";
$PMF_LANG["ad_entry_savedsuc"] = "&aelig;ndringerne blev <strong>gemt</strong>.";
$PMF_LANG["ad_entry_savedfail"] = "Desv&aelig;rre opstod en <strong>database fejl</strong>.";
$PMF_LANG["ad_entry_del_1"] = "Er du sikker p&aring; at indl&aelig;gget";
$PMF_LANG["ad_entry_del_2"] = "af";
$PMF_LANG["ad_entry_del_3"] = "skal slettes?";
$PMF_LANG["ad_entry_delsuc"] = "Er <strong>slettet</strong>.";
$PMF_LANG["ad_entry_delfail"] = "Er <strong>ikke slettet</strong>!";
$PMF_LANG["ad_entry_back"] = "Tilbage";


// Newsverwaltung
$PMF_LANG["ad_news_header"] = "Artikel Titel";
$PMF_LANG["ad_news_text"] = "Sp&oslash;rgsm&aring;lets tekst";
$PMF_LANG["ad_news_link_url"] = "Link: (<strong>uden http://</strong>)!";
$PMF_LANG["ad_news_link_title"] = "Titel p&aring; link:";
$PMF_LANG["ad_news_link_target"] = "destination p&aring; link";
$PMF_LANG["ad_news_link_window"] = "Link &aring;bner nyt vindue";
$PMF_LANG["ad_news_link_faq"] = "Link inde i FAQ";
$PMF_LANG["ad_news_add"] = "Tilf&oslash;j nyheder";
$PMF_LANG["ad_news_id"] = "#";
$PMF_LANG["ad_news_headline"] = "Titel";
$PMF_LANG["ad_news_date"] = "Dato";
$PMF_LANG["ad_news_action"] = "Aktion";
$PMF_LANG["ad_news_update"] = "opdater";
$PMF_LANG["ad_news_delete"] = "slet";
$PMF_LANG["ad_news_nodata"] = "Ingen data fundet i databasen";
$PMF_LANG["ad_news_updatesuc"] = "Nyhederne blev opdateret.";
$PMF_LANG["ad_news_del"] = "Er du sikker p&aring; at ville slette dette?";
$PMF_LANG["ad_news_yesdelete"] = "ja, slet!";
$PMF_LANG["ad_news_nodelete"] = "nej!";
$PMF_LANG["ad_news_delsuc"] = "Nyhed slettet.";
$PMF_LANG["ad_news_updatenews"] = "Opdater nyheder";

// Kategorieverwaltung
$PMF_LANG["ad_categ_new"] = "Tilf&oslash;j ny kategori";
$PMF_LANG["ad_categ_catnum"] = "Kategori Nummer:";
$PMF_LANG["ad_categ_subcatnum"] = "Underkategori Nummer:";
$PMF_LANG["ad_categ_nya"] = "<em>Ikke klar endnu!</em>";
$PMF_LANG["ad_categ_titel"] = "Kategori Titel:";
$PMF_LANG["ad_categ_add"] = "Tilf&oslash;j Kategori";
$PMF_LANG["ad_categ_existing"] = "Eksisterende Kategorier";
$PMF_LANG["ad_categ_id"] = "#";
$PMF_LANG["ad_categ_categ"] = "Kategori";
$PMF_LANG["ad_categ_subcateg"] = "Underkategori";
$PMF_LANG["ad_categ_titel"] = "Kategorititel";
$PMF_LANG["ad_categ_action"] = "Aktion";
$PMF_LANG["ad_categ_update"] = "opdater";
$PMF_LANG["ad_categ_delete"] = "slet";
$PMF_LANG["ad_categ_updatecateg"] = "Opdater Kategori";
$PMF_LANG["ad_categ_nodata"] = "Ingen data fundet i databasen";
$PMF_LANG["ad_categ_remark"] = "V&aelig;r opm&aelig;rksom p&aring; at de eksisterende data ikke vil v&aelig;re tilg&aelig;ngelige mere, hvis du sletter en kategori. Du m&aring; tildele en ny kategori for artiklen eller slette artiklen.";
$PMF_LANG["ad_categ_edit_1"] = "Ret";
$PMF_LANG["ad_categ_edit_2"] = "Kategori";
$PMF_LANG["ad_categ_add"] = "Tilf&oslash;j Kategori";
$PMF_LANG["ad_categ_added"] = "Kategorien oprettet.";
$PMF_LANG["ad_categ_updated"] = "Kategorien er opdateret.";
$PMF_LANG["ad_categ_del_yes"] = "ja, slet!";
$PMF_LANG["ad_categ_del_no"] = "nej!";
$PMF_LANG["ad_categ_deletesure"] = "Er du sikker p&aring; at ville slettet denne kategori?";
$PMF_LANG["ad_categ_deleted"] = "Kategori slettet.";

// Cookies
$PMF_LANG["ad_cookie_cookiesuc"] = "En Cookie <strong>blev</strong> sat.";
$PMF_LANG["ad_cookie_already"] = "En cookie er sat i forvejen. Du har f&oslash;lgende muligheder:";
$PMF_LANG["ad_cookie_again"] = "S&aelig;t cookie igen";
$PMF_LANG["ad_cookie_delete"] = "slet cookie";
$PMF_LANG["ad_cookie_no"] = "Der er ingen cookie gemt endnu. Med en cookie, kan du gemme loginscript, og dermed huske dine login-detaljer. Du har nu f&oslash;lgende muligheder:";
$PMF_LANG["ad_cookie_set"] = "S&aelig;t cookie";
$PMF_LANG["ad_cookie_deleted"] = "Cookie slettet.";

// Adminlog
$PMF_LANG["ad_adminlog"] = "AdminLog";

// Passwd
$PMF_LANG["ad_passwd_cop"] = "Skift adgangskode";
$PMF_LANG["ad_passwd_old"] = "Gammel adgangskode:";
$PMF_LANG["ad_passwd_new"] = "Ny adgangskode:";
$PMF_LANG["ad_passwd_con"] = "Gentag adgangskode:";
$PMF_LANG["ad_passwd_change"] = "Skift adgangskode";
$PMF_LANG["ad_passwd_suc"] = "Adgangskode skiftet.";
$PMF_LANG["ad_passwd_remark"] = "<strong>SE HER:</strong><br />Cookie skal s&aelig;ttes igen!";
$PMF_LANG["ad_passwd_fail"] = "Den gamle adgangskode <strong>skal</strong> angives korrekt og begge adgangskoder skal v&aelig;re <strong>ens</strong>.";

// Adduser
$PMF_LANG["ad_adus_adduser"] = "Tilf&oslash;j bruger";
$PMF_LANG["ad_adus_name"] = "Brugernavn:";
$PMF_LANG["ad_adus_password"] = "Adgangskode";
$PMF_LANG["ad_adus_add"] = "Tilf&oslash;j bruger";
$PMF_LANG["ad_adus_suc"] = "Bruger <strong>oprettet</strong>.";
$PMF_LANG["ad_adus_edit"] = "Ret profil";
$PMF_LANG["ad_adus_dberr"] = "<strong>database fejl!</strong>";
$PMF_LANG["ad_adus_exerr"] = "Brugernavn <strong>eksisterer</strong> i forvejen.";

// Sessions
$PMF_LANG["ad_sess_id"] = "ID";
$PMF_LANG["ad_sess_sid"] = "Session ID";
$PMF_LANG["ad_sess_ip"] = "IP";
$PMF_LANG["ad_sess_time"] = "Tidspunkter";
$PMF_LANG["ad_sess_pageviews"] = "Sidevisninger";
$PMF_LANG["ad_sess_search"] = "S&oslash;g";
$PMF_LANG["ad_sess_sfs"] = "S&oslash;g efter sessioner";
$PMF_LANG["ad_sess_s_ip"] = "IP:";
$PMF_LANG["ad_sess_s_minct"] = "min. aktioner:";
$PMF_LANG["ad_sess_s_date"] = "Dato";
$PMF_LANG["ad_sess_s_after"] = "efter";
$PMF_LANG["ad_sess_s_before"] = "f&oslash;r";
$PMF_LANG["ad_sess_s_search"] = "S&oslash;g";
$PMF_LANG["ad_sess_session"] = "Session";
$PMF_LANG["ad_sess_r"] = "S&oslash;geresultater for";
$PMF_LANG["ad_sess_referer"] = "Referer:";
$PMF_LANG["ad_sess_browser"] = "Browser:";
$PMF_LANG["ad_sess_ai_rubrik"] = "Kategori:";
$PMF_LANG["ad_sess_ai_artikel"] = "Indl&aelig;g:";
$PMF_LANG["ad_sess_ai_sb"] = "S&oslash;ge-strenge:";
$PMF_LANG["ad_sess_ai_sid"] = "Session ID:";
$PMF_LANG["ad_sess_back"] = "Tilbage";

// Statistik
$PMF_LANG["ad_rs"] = "Statistik";
$PMF_LANG["ad_rs_rating_1"] = "Opdeling af";
$PMF_LANG["ad_rs_rating_2"] = "brugere viser:";
$PMF_LANG["ad_rs_red"] = "R&oslash;d";
$PMF_LANG["ad_rs_green"] = "Gr&oslash;n";
$PMF_LANG["ad_rs_altt"] = "med et gennemsnit lavere end 2";
$PMF_LANG["ad_rs_ahtf"] = "med et gennemsnit h&oslash;jere end 4";
$PMF_LANG["ad_rs_no"] = "Ingen opdeling tilg&aelig;ngelig";

// Auth
$PMF_LANG["ad_auth_insert"] = "Skriv venligst brugernavn og adgangskode.";
$PMF_LANG["ad_auth_user"] = "Brugernavn:";
$PMF_LANG["ad_auth_passwd"] = "Adgangskode:";
$PMF_LANG["ad_auth_ok"] = "OK";
$PMF_LANG["ad_auth_reset"] = "Nulstil";
$PMF_LANG["ad_auth_fail"] = "Brugernavn eller adgangskode ikke korrekt.";
$PMF_LANG["ad_auth_sess"] = "SesssionsID er ok.";

// Added v0.8 - 24.05.2001 - Bastian - Admin
$PMF_LANG["ad_config_edit"] = "Ret konfiguration";
$PMF_LANG["ad_config_save"] = "Gem konfiguration";
$PMF_LANG["ad_config_reset"] = "Fortryd";
$PMF_LANG["ad_config_saved"] = "Konfiguration blev gemt.";
$PMF_LANG["ad_menu_editconfig"] = "Ret konfiguration";
$PMF_LANG["ad_att_none"] = "Ingen vedh&aelig;ftninger tilg&aelig;ngelige";
$PMF_LANG["ad_att_att"] = "Vedh&aelig;ftninger:";
$PMF_LANG["ad_att_add"] = "Vedh&aelig;ft fil";
$PMF_LANG["ad_entryins_suc"] = "Indl&aelig;g gemt.";
$PMF_LANG["ad_entryins_fail"] = "En fejl opstod.";
$PMF_LANG["ad_att_del"] = "Slet";
$PMF_LANG["ad_att_nope"] = "Vedh&aelig;ftninger kan kun tilf&oslash;jes imens man retter.";
$PMF_LANG["ad_att_delsuc"] = "Vedh&aelig;ftningen er slettet.";
$PMF_LANG["ad_att_delfail"] = "En fejl opstod under sletningen af vedh&aelig;ftningen.";
$PMF_LANG["ad_entry_add"] = "Opret FAQ-indl&aelig;g";

// Added v0.85 - 08.06.2001 - Bastian - Admin
$PMF_LANG["ad_csv_make"] = "En sikkerhedskopi er et komplet billede af databasens indhold. En sikkerhedskopi b&oslash;r foretages mindst 1 gang om m&aring;neden. Sikkerhedskopi-formatet en en MySQL transaktionsfil, som kan importeres ved hj&aelig;lp af v&aelig;rkt&oslash;jer som phpMyAdmin eller mysql kommandolinie-v&aelig;rkt&oslash;jet.";
$PMF_LANG["ad_csv_link"] = "Hent sikkerhedskopi";
$PMF_LANG["ad_csv_head"] = "Lav sikkerhedskopi";
$PMF_LANG["ad_att_addto"] = "Tilf&oslash;j en vedh&aelig;ftning til indl&aelig;gget";
$PMF_LANG["ad_att_addto_2"] = "";
$PMF_LANG["ad_att_att"] = "Fil:";
$PMF_LANG["ad_att_butt"] = "OK";
$PMF_LANG["ad_att_suc"] = "Filen er oprettet.";
$PMF_LANG["ad_att_fail"] = "En fejl opstod ved tilf&oslash;jelsen af filen.";
$PMF_LANG["ad_att_close"] = "Luk dette vindue";

// Added v0.85 - 08.07.2001 - Bastian - Admin
$PMF_LANG["ad_csv_restore"] = "Her kan du reetablere indholdet af databasen med en backupfil lavet af phpMyFAQ. V&aelig;r opm&aelig;rksom p&aring; at eksisterende data vil blive overskrevet.";
$PMF_LANG["ad_csv_file"] = "Fil";
$PMF_LANG["ad_csv_ok"] = "OK";
$PMF_LANG["ad_csv_linklog"] = "sikkerhedskopier LOGfiler";
$PMF_LANG["ad_csv_linkdat"] = "sikkerhedskopier data";
$PMF_LANG["ad_csv_head2"] = "Genskab";
$PMF_LANG["ad_csv_no"] = "Dette ser ikke ud til at v&aelig;re en sikkerhedskopi af phpMyFAQ.";
$PMF_LANG["ad_csv_prepare"] = "Forbereder databaseforesp&oslash;rgsler...";
$PMF_LANG["ad_csv_process"] = "Foresp&oslash;rgsel...";
$PMF_LANG["ad_csv_of"] = "af";
$PMF_LANG["ad_csv_suc"] = "gennemf&oslash;rt.";
$PMF_LANG["ad_csv_backup"] = "Sikkerhedskopi";
$PMF_LANG["ad_csv_rest"] = "Genskab fra sikkerhedskopi";

// Added v0.8 - 25.05.2001 - Bastian - Admin
$PMF_LANG["ad_menu_backup"] = "Sikkerhedskopi";
$PMF_LANG["ad_logout"] = "Session afbrudt.";
$PMF_LANG["ad_news_add"] = "Tilf&oslash;j nyheder";
$PMF_LANG["ad_news_edit"] = "Ret nyheder";
$PMF_LANG["ad_cookie"] = "Cookies";
$PMF_LANG["ad_sess_head"] = "Se sessioner";

// Added v1.1 - 06.01.2002 - Bastian
$PMF_LANG["ad_menu_categ_edit"] = "Kategorier";
$PMF_LANG["ad_menu_stat"] = "Statistik";
$PMF_LANG["ad_kateg_add"] = "Tilf&oslash;j Kategori";
$PMF_LANG["ad_kateg_rename"] = "Omd&oslash;b";
$PMF_LANG["ad_adminlog_date"] = "Dato";
$PMF_LANG["ad_adminlog_user"] = "Bruger";
$PMF_LANG["ad_adminlog_ip"] = "IP-nummer";

$PMF_LANG["ad_stat_sess"] = "Sessioner";
$PMF_LANG["ad_stat_days"] = "Dage";
$PMF_LANG["ad_stat_vis"] = "Sessioner (Bes&oslash;g)";
$PMF_LANG["ad_stat_vpd"] = "Bes&oslash;g per Dag";
$PMF_LANG["ad_stat_fien"] = "F&oslash;rste log";
$PMF_LANG["ad_stat_laen"] = "Sidste log";
$PMF_LANG["ad_stat_browse"] = "gennemse Sessioner";
$PMF_LANG["ad_stat_ok"] = "OK";

$PMF_LANG["ad_sess_time"] = "Tid";
$PMF_LANG["ad_sess_sid"] = "Session-ID";
$PMF_LANG["ad_sess_ip"] = "IP-nummer";

$PMF_LANG["ad_ques_take"] = "Ret FAQ-indl&aelig;g";
$PMF_LANG["no_cats"] = "Ingen kategorier fundet.";

// Added v1.1 - 17.01.2002 - Bastian
$PMF_LANG["ad_log_lger"] = "Forkert brugernavn eller adgangskode.";
$PMF_LANG["ad_log_sess"] = "Session udl&oslash;bet.";
$PMF_LANG["ad_log_edit"] = "\"Ret Bruger\"-Form for f&oslash;lgende bruger: ";
$PMF_LANG["ad_log_crea"] = "\"Ny artikel\" form.";
$PMF_LANG["ad_log_crsa"] = "Ny registrering gemt.";
$PMF_LANG["ad_log_ussa"] = "Opdater data p&aring; f&oslash;lgende bruger: ";
$PMF_LANG["ad_log_usde"] = "Slettet f&oslash;lgende bruger: ";
$PMF_LANG["ad_log_beed"] = "Ret form for f&oslash;lgende bruger: ";
$PMF_LANG["ad_log_bede"] = "Slet f&oslash;lgende registrering: ";

$PMF_LANG["ad_start_visits"] = "Bes&oslash;g";
$PMF_LANG["ad_start_articles"] = "Artikler";
$PMF_LANG["ad_start_comments"] = "kommentarer";


// Added v1.1 - 30.01.2002 - Bastian
$PMF_LANG["ad_categ_paste"] = "s&aelig;t ind";
$PMF_LANG["ad_categ_cut"] = "klip";
$PMF_LANG["ad_categ_copy"] = "kopier";
$PMF_LANG["ad_categ_process"] = "Bearbejder kategorier...";

// Added v1.1.4 - 07.05.2002 - Thorsten
$PMF_LANG["err_NotAuth"] = "<strong>Du har ikke rettigheder.</strong>";

// Added v1.2.3 - 29.11.2002 - Thorsten
$PMF_LANG["msgPreviusPage"] = "forrige side";
$PMF_LANG["msgNextPage"] = "n&aelig;ste side";
$PMF_LANG["msgPageDoublePoint"] = "Side: ";
$PMF_LANG["msgMainCategory"] = "Hovedkategori";

// Added v1.2.4 - 30.01.2003 - Thorsten
$PMF_LANG["ad_passwdsuc"] = "Din adgangskode er skiftet.";

// Added v1.3.0 - 04.03.2003 - Thorsten
$PMF_LANG["msgPDF"] = "Vis som PDF fil";
$PMF_LANG["ad_xml_head"] = "XML-Sikkerhedskopi";
$PMF_LANG["ad_xml_hint"] = "Gem alle sp&oslash;rgsm&aring;l i FAQ i een XML-fil.";
$PMF_LANG["ad_xml_gen"] = "opret XML file";
$PMF_LANG["ad_entry_locale"] = "Sprog";
$PMF_LANG["msgLangaugeSubmit"] = "Skift sprog:";

// Added v1.3.1 - 29.04.2003 - Thorsten
$PMF_LANG["ad_entry_preview"] = "Eksempel";
$PMF_LANG["ad_attach_1"] = "V&aelig;lg venligst f&oslash;rst et bibliotek for vedh&aelig;ftninger i konfiguration.";
$PMF_LANG["ad_attach_2"] = "V&aelig;lg venligst f&oslash;rst et link til vedh&aelig;ftninger.";
$PMF_LANG["ad_attach_3"] = "Filen attachment.php kan ikke &aring;bnes uden kr&aelig;vede rettigheder.";
$PMF_LANG["ad_attach_4"] = "Den vedh&aelig;ftede fil skal v&aelig;re mindre end %s bytes.";
$PMF_LANG["ad_menu_export"] = "Eksporter din FAQ";
$PMF_LANG["ad_export_1"] = "Byg RSS-Feed til";
$PMF_LANG["ad_export_2"] = ".";
$PMF_LANG["ad_export_file"] = "Fejl: Kan ikke skrive fil.";
$PMF_LANG["ad_export_news"] = "Nyheder RSS-Feed";
$PMF_LANG["ad_export_topten"] = "Top 10 RSS-Feed";
$PMF_LANG["ad_export_latest"] = "5 seneste sp&oslash;rgsm&aring;l RSS-Feed";
$PMF_LANG["ad_export_pdf"] = "PDF-Eksport af alle sp&oslash;rgsm&aring;l";
$PMF_LANG["ad_export_generate"] = "byg RSS-Feed";

$PMF_LANG["rightsLanguage"]['adduser'] = "tilføj bruger";
$PMF_LANG["rightsLanguage"]['edituser'] = "rediger bruger";
$PMF_LANG["rightsLanguage"]['deluser'] = "slet bruger";
$PMF_LANG["rightsLanguage"]['addbt'] = "tilføj indlæg";
$PMF_LANG["rightsLanguage"]['editbt'] = "rediger indlæg";
$PMF_LANG["rightsLanguage"]['delbt'] = "slet indlæg";
$PMF_LANG["rightsLanguage"]['viewlog'] = "se log";
$PMF_LANG["rightsLanguage"]['adminlog'] = "se admin log";
$PMF_LANG["rightsLanguage"]['delcomment'] = "slet kommentarer";
$PMF_LANG["rightsLanguage"]['addnews'] = "tilføj nyheder";
$PMF_LANG["rightsLanguage"]['editnews'] = "rediger nyheder";
$PMF_LANG["rightsLanguage"]['delnews'] = "slet nyheder";
$PMF_LANG["rightsLanguage"]['addcateg'] = "tilføj kategorier";
$PMF_LANG["rightsLanguage"]['editcateg'] = "rediger kategorier";
$PMF_LANG["rightsLanguage"]['delcateg'] = "slet kategorier";
$PMF_LANG["rightsLanguage"]['passwd'] = "skift adgangskode";
$PMF_LANG["rightsLanguage"]['editconfig'] = "rediger konfiguration";
$PMF_LANG["rightsLanguage"]['addatt'] = "tilføj vedhæftninger";
$PMF_LANG["rightsLanguage"]['delatt'] = "slet vedhæftninger";
$PMF_LANG["rightsLanguage"]['backup'] = "lav sikkerhedskopi";
$PMF_LANG["rightsLanguage"]['restore'] = "genskab sikkerhedskopi";
$PMF_LANG["rightsLanguage"]['delquestion'] = "slet åbne spørgsmål";
$PMF_LANG["rightsLanguage"]['changebtrevs'] = "rediger revisioner";

$PMF_LANG["msgAttachedFiles"] = "vedh&aelig;ftede filer:";

// Added v1.3.3 - 27.05.2003 - Thorsten
$PMF_LANG["ad_user_action"] = "action";
$PMF_LANG["ad_entry_email"] = "E-mail-adresse:";
$PMF_LANG["ad_entry_allowComments"] = "Tillad kommentarer";
$PMF_LANG["msgWriteNoComment"] = "Du kan ikke kommentere dette indl&aelig;g";
$PMF_LANG["ad_user_realname"] = "Fulde navn:";
$PMF_LANG["ad_export_generate_pdf"] = "generer PDF-fil";
$PMF_LANG["ad_export_full_faq"] = "Eksporter hele FAQ'en til en PDF-fil: ";
$PMF_LANG["err_bannedIP"] = "Din IP-adresse er blevet forment adgang.";
$PMF_LANG["err_SaveQuestion"] = "N&oslash;dvendige felter: <strong>dit navn</strong>, <strong>din e-mail-adresse</strong> og <strong>dit sp&oslash;rgsm&aring;l</strong>.<br /><br /><a href=\"javascript:history.back();\">Ã©n side tilbage</a><br /><br />\n";

// added v1.3.4 - 23.07.2003 - Thorsten
$PMF_LANG["ad_entry_fontcolor"] = "Skrifttype farve: ";
$PMF_LANG["ad_entry_fontsize"] = "Skrifttype st&oslash;rrelse: ";

// added v1.4.0 - 2003-12-04 by Thorsten / Mathias
$LANG_CONF['main.language'] = array(0 => "Vælg", 1 => "Sprog");
$LANG_CONF["main.languageDetection"] = array(0 => "checkbox", 1 => "Aktiver automatic content negotiation");
$LANG_CONF['main.titleFAQ'] = array(0 => "input", 1 => "FAQ-titel");
$LANG_CONF['main.currentVersion'] = array(0 => "print", 1 => "phpMyFAQ-version");
$LANG_CONF["main.metaDescription"] = array(0 => "input", 1 => "Beskrivelse af siden");
$LANG_CONF["main.metaKeywords"] = array(0 => "input", 1 => "N&oslash;gleord til Spiders");
$LANG_CONF["main.metaPublisher"] = array(0 => "input", 1 => "Navn p&aring; udgiver");
$LANG_CONF['main.administrationMail'] = array(0 => "input", 1 => "E-mail-adresse til administrator");
$LANG_CONF["main.contactInformations"] = array(0 => "area", 1 => "Kontaktinformation");
$LANG_CONF["main.send2friendText"] = array(0 => "area", 1 => "Tekst til send2friend siden");
$LANG_CONF['main.maxAttachmentSize'] = array(0 => "input", 1 => "maximum Size for attachments in Bytes (max. %sByte)");
$LANG_CONF["main.disableAttachments"] = array(0 => "checkbox", 1 => "Link the attachments below the entries?");
$LANG_CONF["main.enableUserTracking"] = array(0 => "checkbox", 1 => "benyt Tracking?");
$LANG_CONF["main.enableAdminLog"] = array(0 => "checkbox", 1 => "benyt administratorlog?");
$LANG_CONF["main.ipCheck"] = array(0 => "checkbox", 1 => "Do you want the IP to be checked when checking the UINs in admin.php?");
$LANG_CONF["main.numberOfRecordsPerPage"] = array(0 => "input", 1 => "Antal viste indl&aelig;g pr. side");
$LANG_CONF["main.numberOfShownNewsEntries"] = array(0 => "input", 1 => "Antal nyhedsartikler");
$LANG_CONF['main.bannedIPs'] = array(0 => "area", 1 => "Ban these IPs");
$LANG_CONF["main.enableRewriteRules"] = array(0 => "checkbox", 1 => "Aktiver underst&oslash;ttelse af mod_rewrite? (standard: sl&aring;et fra)");
$LANG_CONF["main.ldapSupport"] = array(0 => "checkbox", 1 => "Aktiver underst&oslash;ttelse af LDAP? (standard: sl&aring;et fra)");

$PMF_LANG["ad_categ_new_main_cat"] = "as new main category";
$PMF_LANG["ad_categ_paste_error"] = "Moving this category isn't possible.";
$PMF_LANG["ad_categ_move"] = "Flyt kategori";
$PMF_LANG["ad_categ_lang"] = "Sprog";
$PMF_LANG["ad_categ_desc"] = "Beskrivelse";
$PMF_LANG["ad_categ_change"] = "Change with";

$PMF_LANG["lostPassword"] = "Glemt adgangskode? Klik her.";
$PMF_LANG["lostpwd_err_1"] = "Fejl: Brugernavn og e-mail-adresse blev ikke fundet.";
$PMF_LANG["lostpwd_err_2"] = "Fejl: Forkerte indtastninger!";
$PMF_LANG["lostpwd_text_1"] = "Thank you for requesting your account information.";
$PMF_LANG["lostpwd_text_2"] = "Please set a new personal password in the admin section of your FAQ.";
$PMF_LANG["lostpwd_mail_okay"] = "Adgangskode sendt via e-mail.";

$PMF_LANG["ad_xmlrpc_button"] = "Hent versionsnummeret til nyeste udgave af phpMyFAQ";
$PMF_LANG["ad_xmlrpc_latest"] = "Nyeste udgave kan hentes p&aring; ";

// added v1.5.0 - 2005-07-31 by Thorsten
$PMF_LANG['ad_categ_select'] = 'V&aelig;lg kategorisprog';

// added v1.5.1 - 2005-09-06 by Thorsten
$PMF_LANG['msgSitemap'] = 'Sitemap';

// added v1.5.2 - 2005-09-23 by Lars
$PMF_LANG['err_inactiveArticle'] = 'This entry is in revision and can not be displayed.';
$PMF_LANG['msgArticleCategories'] = 'Categories for this entry';

// added v1.6.0 - 2006-02-02 by Thorsten
$PMF_LANG['ad_entry_solution_id'] = 'Unique solution ID';
$PMF_LANG['ad_entry_faq_record'] = 'FAQ-indl&aelig;g';
$PMF_LANG['ad_entry_new_revision'] = 'Opret ny revision?';
$PMF_LANG['ad_entry_record_administration'] = 'Tilg&aelig;ngelighed af indl&aelig;g';
$PMF_LANG['ad_entry_changelog'] = 'Changelog';
$PMF_LANG['ad_entry_revision'] = 'Revision';
$PMF_LANG['ad_changerev'] = 'V&aelig;lg revision';
$PMF_LANG['msgCaptcha'] = "Indtast venligst de bogstaver, som du kan se i billedet";
$PMF_LANG['msgSelectCategories'] = 'S&oslash;g i ...';
$PMF_LANG['msgAllCategories'] = '... alle kategorier';
$PMF_LANG['ad_you_should_update'] = 'Din installation af phpMyFAQ er for&aelig;ldet. Du b&oslash;r opdatere til sidste nye version.';
$PMF_LANG['msgAdvancedSearch'] = 'Avanceret s&oslash;gning';

// added v1.6.1 - 2006-04-25 by Matteo and Thorsten
$PMF_LANG['spamControlCenter'] = 'Spam control center';
$LANG_CONF["spam.enableSafeEmail"] = array(0 => "checkbox", 1 => "Print user email in a safe way (standard: enabled).");
$LANG_CONF["spam.checkBannedWords"] = array(0 => "checkbox", 1 => "Check public form content against banned words (standard: enabled).");
$LANG_CONF["spam.enableCaptchaCode"] = array(0 => "checkbox", 1 => "Use a catpcha code to allow public form submission (standard: enabled).");
$PMF_LANG['ad_session_expiring'] = 'Your session will expire in %d minutes: would you like to go on working?';

// added v1.6.2 - 2006-06-13 by Matteo
$PMF_LANG['ad_stat_management'] = 'Sessions management';
$PMF_LANG['ad_stat_choose'] = 'V&aelig;lg m&aring;ned';
$PMF_LANG['ad_stat_delete'] = 'Delete immediately the selected sessions';

// added v2.0.0 - 2005-09-15 by Thorsten and by Minoru TODA
$PMF_LANG['ad_menu_glossary'] = 'Ordforklaringer';
$PMF_LANG['ad_glossary_add'] = 'Tilf&oslash;j ordforklaring';
$PMF_LANG['ad_glossary_edit'] = 'Rediger ordforklaring';
$PMF_LANG['ad_glossary_item'] = 'Item';
$PMF_LANG['ad_glossary_definition'] = 'Definition';
$PMF_LANG['ad_glossary_save'] = 'Gem ordforklaring';
$PMF_LANG['ad_glossary_save_success'] = 'Ordforklaring blev gemt!';
$PMF_LANG['ad_glossary_save_error'] = 'Ordforklaringen kunne ikke gemmes, da der skete en fejl.';
$PMF_LANG['ad_glossary_update_success'] = 'Ordforklaringen blev opdateret!';
$PMF_LANG['ad_glossary_update_error'] = 'Ordforklaringen kunne ikke opdateres, da der skete en fejl.';
$PMF_LANG['ad_glossary_delete'] = 'Slet ordforklaring';
$PMF_LANG['ad_glossary_delete_success'] = 'Ordforklaringen blev slettet!';
$PMF_LANG['ad_glossary_delete_error'] = 'Ordforklaringen kunne ikke slettes, da der skete en fejl.';
$PMF_LANG['ad_linkcheck_noReferenceURL'] = 'Automatic link verification disabled (base URL for link verify not set)';
$PMF_LANG['ad_linkcheck_noAllowUrlOpen'] = 'Automatic link verification disabled (PHP option allow_url_fopen not Enabled)';
$PMF_LANG['ad_linkcheck_checkResult'] = 'Automatic link verification result';
$PMF_LANG['ad_linkcheck_checkSuccess'] = 'OK';
$PMF_LANG['ad_linkcheck_checkFailed'] = 'Fejlede';
$PMF_LANG['ad_linkcheck_failReason'] = 'Reason(s) failed:';
$PMF_LANG['ad_linkcheck_noLinksFound'] = 'No URLs compatible with link verifier feature found.';
$PMF_LANG['ad_linkcheck_searchbadonly'] = 'Only with bad links';
$PMF_LANG['ad_linkcheck_infoReason'] = 'Yderligere information:';
$PMF_LANG['ad_linkcheck_openurl_infoprefix'] = 'Found while testing <strong>%s</strong>: ';
$PMF_LANG['ad_linkcheck_openurl_notready'] = 'LinkVerifier not ready.';
$PMF_LANG['ad_linkcheck_openurl_maxredirect'] = 'Maximum redirect count <strong>%d</strong> exceeded.';
$PMF_LANG['ad_linkcheck_openurl_urlisblank'] = 'Resolved to blank URL.';
$PMF_LANG['ad_linkcheck_openurl_tooslow'] = 'Host <strong>%s</strong> is slow or not responding.';
$PMF_LANG['ad_linkcheck_openurl_nodns'] = 'DNS resolution of host <strong>%s</strong> is slow or is failed due to DNS issues, local or remote.';
$PMF_LANG['ad_linkcheck_openurl_redirected'] = 'URL was redirected to <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_ambiguous'] = 'Ambiguous HTTP status <strong>%s</strong> returned.';
$PMF_LANG['ad_linkcheck_openurl_not_allowed'] = 'The <em>HEAD</em> method is not supported by the host <strong>%s</strong>, allowed methods: <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_not_found'] = 'This resource cannot be found at host <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_protocol_unsupported'] = '%s protocol unsupported by Automatic link verification.';
$PMF_LANG['ad_menu_linkconfig'] = 'URL Verifier';
$PMF_LANG['ad_linkcheck_config_title'] = 'URL Verifier Configuration';
$PMF_LANG['ad_linkcheck_config_disabled'] = 'URL Verifier feature disabled';
$PMF_LANG['ad_linkcheck_config_warnlist'] = 'URLs to warn';
$PMF_LANG['ad_linkcheck_config_ignorelist'] = 'URLs to ignore';
$PMF_LANG['ad_linkcheck_config_warnlist_description'] = 'URLs prefixed with items below will be issued warning regardless of whether it is valid.<br />Use this feature to detect soon-to-be defunct URLs';
$PMF_LANG['ad_linkcheck_config_ignorelist_description'] = 'Exact URLs listed below will be assumed valid without validation.<br />Use this feature to omit URLs that fail to validate using URL Verifier';
$PMF_LANG['ad_linkcheck_config_th_id'] = 'ID#';
$PMF_LANG['ad_linkcheck_config_th_url'] = 'URL to match';
$PMF_LANG['ad_linkcheck_config_th_reason'] = 'Match reason';
$PMF_LANG['ad_linkcheck_config_th_owner'] = 'Entry owner';
$PMF_LANG['ad_linkcheck_config_th_enabled'] = 'Set to enable entry';
$PMF_LANG['ad_linkcheck_config_th_locked'] = 'Set to lock ownership';
$PMF_LANG['ad_linkcheck_config_th_chown'] = 'Set to obtain ownership';
$PMF_LANG['msgNewQuestionVisible'] = 'The question have to be reviewed first before getting public.';
$PMF_LANG['msgQuestionsWaiting'] = 'Waiting for publishing by the administrators: ';
$PMF_LANG['ad_entry_visibility'] = 'Publish?';

// added v2.0.0 - 2006-01-02 by Lars
$PMF_LANG['ad_user_error_password'] =  "Indtast venligst en adgangskode. ";
$PMF_LANG['ad_user_error_passwordsDontMatch'] =  "Adgangskoderne er ikke identiske. ";
$PMF_LANG['ad_user_error_loginInvalid'] =  "Det angivne brugernavn er ikke gyldigt.";
$PMF_LANG['ad_user_error_noEmail'] =  "Indtast venligst en gyldig e-mail-adresse. ";
$PMF_LANG['ad_user_error_noRealName'] =  "Indtast venligst dit rigtige navn. ";
$PMF_LANG['ad_user_error_delete'] =  "Brugerkontoen kunne ikke slettes. ";
$PMF_LANG['ad_user_error_noId'] =  "No ID specified. ";
$PMF_LANG['ad_user_error_protectedAccount'] =  "Brugerkontoen er beskyttet. ";
$PMF_LANG['ad_user_deleteUser'] = "Slet bruger";
$PMF_LANG['ad_user_status'] = "Status:";
$PMF_LANG['ad_user_lastModified'] = 'Sidst ændret:'; //:WARNING: æ => &aelig; smadrer brugeradministration!
$PMF_LANG['ad_gen_cancel'] = "Fortryd";
$PMF_LANG["rightsLanguage"]['addglossary'] = 'tilføj ordforklaring';
$PMF_LANG["rightsLanguage"]['editglossary'] = 'rediger ordforklaring';
$PMF_LANG["rightsLanguage"]['delglossary'] = 'slet ordforklaring';
$PMF_LANG["ad_menu_group_administration"] = "Grupper";
$PMF_LANG['ad_user_loggedin'] = 'Du er logget ind som ';

$PMF_LANG['ad_group_details'] = "Gruppedetaljer";
$PMF_LANG['ad_group_add'] = "Tilf&oslash;j gruppe";
$PMF_LANG['ad_group_add_link'] = "Tilf&oslash;j gruppe";
$PMF_LANG['ad_group_name'] = "Gruppenavn:";
$PMF_LANG['ad_group_description'] = "Beskrivelse:";
$PMF_LANG['ad_group_autoJoin'] = "Auto-join:";
$PMF_LANG['ad_group_suc'] = "Group <strong>successfully</strong> added.";
$PMF_LANG['ad_group_error_noName'] = "Please enter a group name. ";
$PMF_LANG['ad_group_error_delete'] = "Group could not be deleted. ";
$PMF_LANG['ad_group_deleted'] = "The group was successfully deleted.";
$PMF_LANG['ad_group_deleteGroup'] = "Slet gruppe";
$PMF_LANG['ad_group_deleteQuestion'] = "Er du sikker p&aring; at denne gruppe skal slettes?";
$PMF_LANG['ad_user_uncheckall'] = "Unselect All";
$PMF_LANG['ad_group_membership'] = "Gruppemedlemsskab";
$PMF_LANG['ad_group_members'] = "Medlemmer";
$PMF_LANG['ad_group_addMember'] = "+";
$PMF_LANG['ad_group_removeMember'] = "-";

// added v2.0.0 - 2006-07-20 by Matteo
$PMF_LANG['ad_export_which_cat'] = 'Limit the FAQ data to be exported (optional)';
$PMF_LANG['ad_export_cat_downwards'] = 'Downwards?';
$PMF_LANG['ad_export_type'] = 'Format of the export';
$PMF_LANG['ad_export_type_choose'] = 'Choose one of the supported formats:';
$PMF_LANG['ad_export_download_view'] = 'Download or view in-line?';
$PMF_LANG['ad_export_download'] = 'download';
$PMF_LANG['ad_export_view'] = 'view in-line';
$PMF_LANG['ad_export_gen_xhtml'] = 'Lav XHTML-fil';
$PMF_LANG['ad_export_gen_docbook'] = 'Lav Docbook-fil';

// added v2.0.0 - 2006-07-22 by Matteo
$PMF_LANG['ad_news_data'] = 'News data';
$PMF_LANG['ad_news_author_name'] = 'Forfatter:';
$PMF_LANG['ad_news_author_email'] = 'Forfatter e-mail:';
$PMF_LANG['ad_news_set_active'] = 'Aktiver:';
$PMF_LANG['ad_news_allowComments'] = 'Tillad kommentarer:';
$PMF_LANG['ad_news_expiration_window'] = 'Dato/-tidsstyring af indl&aelig;g (valgfrit)';
$PMF_LANG['ad_news_from'] = 'Fra:';
$PMF_LANG['ad_news_to'] = 'Til:';
$PMF_LANG['ad_news_insertfail'] = 'An error occurred inserting the news item into the database.';
$PMF_LANG['ad_news_updatefail'] = 'An error occurred updating the news item into the database.';
$PMF_LANG['newsShowCurrent'] = 'Vis aktuelle nyheder.';
$PMF_LANG['newsShowArchive'] = 'Vis arkiverede nyheder.';
$PMF_LANG['newsArchive'] = 'Nyhedsarkiv';
$PMF_LANG['newsWriteComment'] = 'comment on this entry';
$PMF_LANG['newsCommentDate'] = 'Added at: ';

// added v2.0.0 - 2006-07-29 by Matteo & Thorsten
$PMF_LANG['ad_record_expiration_window'] = 'Tidsstyring af indlæg (valgfrit)';
$PMF_LANG['admin_mainmenu_home'] = 'Hjem';
$PMF_LANG['admin_mainmenu_users'] = 'Brugere';
$PMF_LANG['admin_mainmenu_content'] = 'Indhold';
$PMF_LANG['admin_mainmenu_statistics'] = 'Statistik';
$PMF_LANG['admin_mainmenu_exports'] = 'Eksporter';
$PMF_LANG['admin_mainmenu_backup'] = 'Backup';
$PMF_LANG['admin_mainmenu_configuration'] = 'Konfiguration';
$PMF_LANG['admin_mainmenu_logout'] = 'Log ud';

// added v2.0.0 - 2006-08-15 by Thorsten and Matteo
$PMF_LANG["ad_categ_owner"] = 'Kategori-ejer';
$PMF_LANG['adminSection'] = 'Administration';
$PMF_LANG['err_expiredArticle'] = 'Dette indl&aelig;g er udl&oslash;bet og kan ikke vises';
$PMF_LANG['err_expiredNews'] = 'This news is expired and can not be displayed';
$PMF_LANG['err_inactiveNews'] = 'This news is in revision and can not be displayed';
$PMF_LANG['msgSearchOnAllLanguages'] = 'S&oslash;g i alle sprog:';
$PMF_LANG['ad_entry_tags'] = 'Tags';
$PMF_LANG['msg_tags'] = 'Tags';

// added v2.0.0 - 2006-09-03 by Matteo
$PMF_LANG['ad_linkcheck_feedback_url-batch1'] = 'Checking...';
$PMF_LANG['ad_linkcheck_feedback_url-batch2'] = 'Checking...';
$PMF_LANG['ad_linkcheck_feedback_url-batch3'] = 'Checking...';
$PMF_LANG['ad_linkcheck_feedback_url-checking'] = 'Checking...';
$PMF_LANG['ad_linkcheck_feedback_url-disabled'] = 'Disabled';
$PMF_LANG['ad_linkcheck_feedback_url-linkbad'] = 'Links KO';
$PMF_LANG['ad_linkcheck_feedback_url-linkok'] = 'Links OK';
$PMF_LANG['ad_linkcheck_feedback_url-noaccess'] = 'No access';
$PMF_LANG['ad_linkcheck_feedback_url-noajax'] = 'No AJAX';
$PMF_LANG['ad_linkcheck_feedback_url-nolinks'] = 'No Links';
$PMF_LANG['ad_linkcheck_feedback_url-noscript'] = 'No Script';

// added v2.0.0 - 2006-09-02 by Thomas
$PMF_LANG['msg_related_articles'] = 'Relaterede indl&aelig;g';
$LANG_CONF['records.numberOfRelatedArticles'] = array(0 => "input", 1 => "Antal relaterede indl&aelig;g");

// added v2.0.0 - 2006-09-09 by Rudi
$PMF_LANG['ad_categ_trans_1'] = 'Overs&aelig;t';
$PMF_LANG['ad_categ_trans_2'] = 'Kategori';
$PMF_LANG['ad_categ_translatecateg'] = 'Overs&aelig;t kategori';
$PMF_LANG['ad_categ_translate'] = 'Overs&aelig;t';
$PMF_LANG['ad_categ_transalready'] = 'Already translated in: ';
$PMF_LANG["ad_categ_deletealllang"] = 'Delete in all languages?';
$PMF_LANG["ad_categ_deletethislang"] = 'Delete in this language only?';
$PMF_LANG["ad_categ_translated"] = "The category has been translated.";

// added v2.0.0 - 2006-09-21 by Rudi
$PMF_LANG["ad_categ_show"] = "Overblik";
$PMF_LANG['ad_menu_categ_structure'] = "Category Overview including its languages";

// added v2.0.0 - 2006-09-26 by Thorsten
$PMF_LANG['ad_entry_userpermission'] = 'Bruger-rettigheder:';
$PMF_LANG['ad_entry_grouppermission'] = 'Gruppe-rettigheder:';
$PMF_LANG['ad_entry_all_users'] = 'Adgang for alle brugere';
$PMF_LANG['ad_entry_restricted_users'] = 'Kun adgang for';
$PMF_LANG['ad_entry_all_groups'] = 'Adgang for alle grupper';
$PMF_LANG['ad_entry_restricted_groups'] = 'Kun adgang for';
$PMF_LANG['ad_session_expiration'] = 'Time to your session expiration';
$PMF_LANG['ad_user_active'] = 'Aktiv';
$PMF_LANG['ad_user_blocked'] = 'Blokeret';
$PMF_LANG['ad_user_protected'] = 'Beskyttet';

// added v2.0.0 - 2006-10-07 by Matteo
$PMF_LANG['ad_entry_intlink'] = 'Select a FAQ record to insert it as a link...';

//added 2.0.0 - 2006-10-10 by Rudi
$PMF_LANG["ad_categ_paste2"] = "Paste after";
$PMF_LANG["ad_categ_remark_move"] = "The exchange of 2 categories is only possible at the same level.";
$PMF_LANG["ad_categ_remark_overview"] = "The correct order of categories will be shown, if all categories are defined for the actual language (first column).";

// added v2.0.0 - 2006-10-15 by Matteo
$PMF_LANG['msgUsersOnline'] = ' :: %d g&aelig;ster og %d registrerede';
$PMF_LANG['ad_adminlog_del_older_30d'] = 'Delete immediately logs older than 30 days';
$PMF_LANG['ad_adminlog_delete_success'] = 'Older logs successfully deleted.';
$PMF_LANG['ad_adminlog_delete_failure'] = 'No logs deleted: an error occurred performing the request.';

// added 2.0.0 - 2006-11-19 by Thorsten
$PMF_LANG['opensearch_plugin_install'] = 'Tilf&oslash;j s&oslash;geplugin';
$PMF_LANG['ad_quicklinks'] = 'Kviklinks';
$PMF_LANG['ad_quick_category'] = 'Tilf&oslash;j ny kategori';
$PMF_LANG['ad_quick_record'] = 'Tilf&oslash;j nyt FAQ-indl&aelig;g';
$PMF_LANG['ad_quick_user'] = 'Tilf&oslash;j ny bruger';
$PMF_LANG['ad_quick_group'] = 'Tilf&oslash;j ny gruppe';

// added v2.0.0 - 2006-12-30 by Matteo
$PMF_LANG['msgNewTranslationHeader'] = 'Translation proposal';
$PMF_LANG['msgNewTranslationAddon'] = 'Your proposal will not be published right away, but will be released by the administrator upon receipt. Required  fields are <strong>your Name</strong>, <strong>your email address</strong>, <strong>your headline translation</strong> and <strong>your faq translation</strong>. Please separate the keywords with space only.';
$PMF_LANG['msgNewTransSourcePane'] = 'Source pane';
$PMF_LANG['msgNewTranslationPane'] = 'Translation pane';
$PMF_LANG['msgNewTranslationName'] = "Your Name:";
$PMF_LANG['msgNewTranslationMail'] = "Your email address:";
$PMF_LANG['msgNewTranslationKeywords'] = "Keywords:";
$PMF_LANG['msgNewTranslationSubmit'] = 'Send dit forslag';
$PMF_LANG['msgTranslate'] = 'Foresl&aring; en overs&aelig;ttelse til';
$PMF_LANG['msgTranslateSubmit'] = 'Start overs&aelig;ttelse...';
$PMF_LANG['msgNewTranslationThanks'] = "Tak for dit forslag til overs&aelig;ttelse!";

// added v2.0.0 - 2007-02-27 by Matteo
$PMF_LANG["rightsLanguage"]['addgroup'] = "tilføj grupper";
$PMF_LANG["rightsLanguage"]['editgroup'] = "rediger grupper";
$PMF_LANG["rightsLanguage"]['delgroup'] = "slet grupper";

// added v2.0.0 - 2007-02-27 by Thorsten
$PMF_LANG['ad_news_link_parent'] = 'Link &aring;bner i parent window';

// added v2.0.0 - 2007-03-04 by Thorsten
$PMF_LANG['ad_menu_comments'] = 'Kommentarer';
$PMF_LANG['ad_comment_administration'] = 'Administration af kommentarer';
$PMF_LANG['ad_comment_faqs'] = 'Kommentarer til FAQ-indl&aelig;g:';
$PMF_LANG['ad_comment_news'] = 'Kommentarer til nyheder:';
$PMF_LANG['ad_groups'] = 'Grupper';

// added v2.0.0 - 2007-03-10 by Thorsten
$LANG_CONF['records.orderby'] = array(0 => 'select', 1 => 'Sortering af indl&aelig;g (afh&aelig;nger af egenskab)');
$LANG_CONF['records.sortby'] = array(0 => 'select', 1 => 'Sortering af indl&aelig;g (faldende eller stigende)');
$PMF_LANG['ad_conf_order_id'] = 'ID (standard)';
$PMF_LANG['ad_conf_order_thema'] = 'Titel';
$PMF_LANG['ad_conf_order_visits'] = 'Antal g&aelig;ster';
$PMF_LANG['ad_conf_order_datum'] = 'Dato';
$PMF_LANG['ad_conf_order_author'] = 'Forfatter';
$PMF_LANG['ad_conf_desc'] = 'faldende';
$PMF_LANG['ad_conf_asc'] = 'stigende';
$PMF_LANG['mainControlCenter'] = 'Konfiguration';
$PMF_LANG['recordsControlCenter'] = 'Konfiguration af FAQ-indl&aelig;g';

// added v2.0.0 - 2007-03-17 by Thorsten
$PMF_LANG['msgInstantResponse'] = 'Kviks&oslash;gning';
$PMF_LANG['msgInstantResponseMaxRecords'] = '. Find below the first %d records.';

// added v2.0.0 - 2007-03-29 by Thorsten
$LANG_CONF['records.defaultActivation'] = array(0 => 'checkbox', 1 => "Activate a new records (standard: deactivated)");
$LANG_CONF['records.defaultAllowComments'] = array(0 => 'checkbox', 1 => "Allow comments for new records (standard: disallowed)");

// added v2.0.0 - 2007-04-04 by Thorsten
$PMF_LANG['msgAllCatArticles'] = 'Indl&aelig;g i denne kategori';
$PMF_LANG['msgDescriptionInstantResponse'] = 'Kviksvar s&oslash;ger mens du taster, s&aring; du hurtigt kan finde svaret!';
$PMF_LANG['msgTagSearch'] = 'Tagged entries';
$PMF_LANG['ad_pmf_info'] = 'phpMyFAQ information';
$PMF_LANG['ad_online_info'] = 'Online versionscheck';
$PMF_LANG['ad_system_info'] = 'Systeminformation';
