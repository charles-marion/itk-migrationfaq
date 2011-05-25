<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{metaLanguage}" lang="{metaLanguage}">
<head>
    <title>ITK Migration</title>
    <base href="{baseHref}" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <meta name="title" content="ITK Migration" />
    <meta name="description" content="ITK is an open-source, cross-platform system that provides developers with an extensive suite of software tools for image analysis.  Developed through extreme programming methodologies, ITK employs leading-edge algorithms for registering and segmenting multidimensional data. " />
    <meta name="keywords" content="kitware, image analysis,faq ,migration, registration, segmentation, ITK, ITK consulting" />
    <meta name="copyright" content="(c) 2001 - 2010 phpMyFAQ Team" />
    <meta name="generator" content="phpMyFAQ {phpmyfaqversion}" />
    <meta name="Content-Language" content="utf-8" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <meta name="revisit-after" content="7 days" />
    <meta name="MSSmartTagsPreventParsing" content="true" />    
    <style type="text/css" media="screen">@import url(template/{tplSetName}/{stylesheet}.css);</style>
    <style type="text/css" media="print">@import url(template/{tplSetName}/print.css);</style>
    <script type="text/javascript" src="inc/js/functions.js"></script>
    <script type="text/javascript" src="inc/js/jquery.min.js"></script>
    <link rel="shortcut icon" href="template/{tplSetName}/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="template/{tplSetName}/favicon.ico" type="image/x-icon" />
    <link rel="alternate" title="News RSS Feed" type="application/rss+xml" href="feed/news/rss.php" />
    <link rel="alternate" title="TopTen RSS Feed" type="application/rss+xml" href="feed/topten/rss.php" />
    <link rel="alternate" title="Latest FAQ Records RSS Feed" type="application/rss+xml" href="feed/latest/rss.php" />
    <link rel="alternate" title="Open Questions RSS Feed" type="application/rss+xml" href="feed/openquestions/rss.php" />
    <link rel="microsummary" href="microsummary.php?action={action}" />
    <link rel="search" type="application/opensearchdescription+xml" title="{metaTitle}" href="{opensearch}" />
</head>
<body dir="{dir}" onload="javascript:focusOnSearchField();">

<div id="content">
<div class="header" id="header">
    <div>
      <img style="height:50px;position: relative; top:-10px;"  src="images/itk100.png"/>
        <ul>
            <li>{msgContact}</li>
            <li>{msgHelp}</li>
        </ul>
    </div>
</div>
<div class="columns">
    <div class="leftcolumn">
            <h2 class="invisible">Navigation</h2>
            <div class="content">
                <div id="categories">
                    <ul>
                        <li class="home">{backToHome}</li>
                        <li>{allCategories}</li>
                        {showCategories}
                        <li>{showSitemap}</li>
                    </ul>
                </div>
            </div>

            <div class="content">
                <div id="langform">
                <form action="{writeLangAdress}" method="post">
                <input type="hidden" name="action" value="" />
                </form>
                </div>
            </div>

    </div>

    <div class="rightcolumn">
        {rightBox}
                

    </div>

    <div class="main-content">
        [globalSearchBox]
        <form id="search" action="{writeSendAdress}" method="get">
             <input type="text" name="search" id="searchfield" size="30" />
             <input type="submit" name="submit" value="{searchBox}" />
             <input type="hidden" name="searchcategory" value="{categoryId}" />
             <input type="hidden" name="action" value="search" />
         </form>
        [/globalSearchBox]
        [globalSuggestBox]
        <form id="instantform" action="?action=instantresponse" method="post">
        <input id="ajaxlanguage" name="ajaxlanguage" type="hidden" value="{ajaxlanguage}" />
        <input class="inputfield" id="instantfield" type="text" name="search" value="" />
        </form>
        [/globalSuggestBox]

    {writeContent}
    
    </div>
</div>

<div class="clearing"></div>
<div id="footer" class="footer">
    <p id="copyrightnote">{copyright}</p>
</div>

{debugMessages}
</div>

</body>
</html>