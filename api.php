<?php

/**
 * The rest/json application interface
 *
 * PHP Version 5.2.0
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
 * @package   PMF_Service
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @copyright 2009-2010 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/MPL-1.1.html Mozilla Public License Version 1.1
 * @link      http://www.phpmyfaq.de
 * @since     2009-09-03
 */
//
// Prepend and start the PHP session
//
require 'inc/Init.php';
define('IS_VALID_PHPMYFAQ', null);
PMF_Init::cleanRequest();
session_name(PMF_COOKIE_NAME_AUTH . trim($faqconfig->get('main.phpMyFAQToken')));
session_start();

// Send headers
$http = PMF_Helper_Http::getInstance();
$http->setContentType('application/json');
$http->addHeader();

// Set user permissions
$current_user = -1;
$current_groups = array(-1);

$action = PMF_Filter::filterInput(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$language = PMF_Filter::filterInput(INPUT_GET, 'lang', FILTER_SANITIZE_STRING, 'en');
$categoryId = PMF_Filter::filterInput(INPUT_GET, 'categoryId', FILTER_VALIDATE_INT);
$recordId = PMF_Filter::filterInput(INPUT_GET, 'recordId', FILTER_VALIDATE_INT);

// Get language (default: english)
$Language = new PMF_Language();
$language = $Language->setLanguage($faqconfig->get('main.languageDetection'), $faqconfig->get('main.language'));

// Set language
if (PMF_Language::isASupportedLanguage($language))
  {
  require 'lang/language_' . $language . '.php';
  }
else
  {
  require 'lang/language_en.php';
  }

$plr = new PMF_Language_Plurals($PMF_LANG);
PMF_String::init($language);

// Set empty result
$result = array();

// Handle actions
switch ($action)
  {
  case 'addItkErrors':
    require_once 'inc/BuildParser.php';
    $post = $_GET['post'];
    $key = $_GET['key'];
    if($key!="SgBF7Teem2")
      {
      echo "Key error.";
      exit();
      }

    $file_path='php://input';
   // $file_path='CDashFile/Build2.xml';
    if(!isset($_GET['post']))
      {
      $faq = new PMF_Faq(null,null);
      if(!isset($_GET['change']))
        {
        echo "Please set a post or a change.";
        exit;
        }
      $post=$faq->getIdFromChange($_GET['change']);
      }
    if(!is_numeric($post)||$post==null)
      {
      echo "Unbale to match post";
      exit;
      }
    $parser= new BuildParser($file_path,$post);
    $parser->parse();
    echo 'OK';
    break;
  case 'addItkChange':
    $path = $_GET['path']; //exemplte : http://review.source.kitware.com/cat/224%2C1%2CMigration/DecoupleNumericTraitsFromContainers.xml

    $tmp=explode(",", $path);
    $tmps=explode("/", $tmp[0]);
    foreach($tmps as $tmp)
      {
      $change=$tmp;
      }    
    $gerrit_url="http://review.source.kitware.com/#change,".$change;
    $category = $_GET['category'];
    if(!is_numeric($category))
      {
      echo "Category parameter should be a number.";
      exit();
      }
    $key = $_GET['key'];
    if($key!="SgBF7Teem2")
      {
      echo "Key error.";
      exit();
      }
    $tmpDirectory = getcwd() . "/tmp/" . rand();
    while (file_exists($tmpDirectory))
      {
      $tmpDirectory = getcwd() . "/tmp/" . rand();
      }
    mkdir($tmpDirectory);
    $zipFile = $tmpDirectory.'/zip.zip';
    copy($path, $zipFile);

    if(!file_exists($zipFile))
      {
      echo "Unable to find the file.";
      exit;
      }
      
    $zipFile = $tmpDirectory . '/zip.zip';
    $zip = new ZipArchive;
    $zip->open($tmpDirectory . '/zip.zip');
    $zip->extractTo($tmpDirectory);
    $zip->close();
    $xmlFile="";
    $dir = opendir($tmpDirectory) or die('Erreur');
    while ($Entry = @readdir($dir))
      {
      if (is_dir($tmpDirectory . '/' . $Entry) && $Entry != '.' && $Entry != '..')
        {

        }
      else
        {
        if(strpos($Entry, ".xml")!=false)
          {
          $xmlFile=$tmpDirectory.'/'.$Entry;
          }
        }
      }
    if($xmlFile=="")
      {
      echo "Unable to find the xml file.";
      exit;
      }
    $xml = simplexml_load_file($xmlFile);

    $tmp = (string) $xml->SampleCode[0]->Old[0];
    $content = '';
    $content="<p>".nl2br($xml->Description[0])."</p>";
    if(!empty($tmp))
      {      
      $content.="<h3>Broken API Sample Code:</h3>";
      $content.=":code:".str_replace("\n", "<br/>", htmlspecialchars($xml->SampleCode[0]->Old[0])).":code:";
      $content.="<h3>New API Sample Code:</h3>";
      $content.=":code:".str_replace("\n", "<br/>", htmlspecialchars($xml->SampleCode[0]->New[0])).":code:";
      }
      
    $content.="<h3>Gerrit:</h3>";
    $content.="<p><a href='$gerrit_url'>$gerrit_url</a></p>";

    $content.="<h3>Gerrit ChangeId:</h3>";
    $xmlNode = $xml->xpath('Gerrit-ChangeId');
    $content.="<p>".$xmlNode[0][0]."</p>";

    $tmp = (string) $xml->FileList[0];
    if(!empty($tmp))
      {
      $content.="<h3>Changed Files:</h3>";
      $content.="<pre>".$xml->FileList[0]."</pre>";
      }

    $xmlNode = $xml->xpath('MigrationFix-Manual');
    $xmlNode2 = $xml->xpath('MigrationFix-Automatic');
    $content.="<h3>Changes:</h3>";
    $content.="<table class='changesTable'>";
    $content.="<tr class='changesTitles'>";
    $content.="  <td>";
    $content.="    Old";
    $content.="  </td>";
    $content.="  <td>";
    $content.="    New ";
    $content.="  </td>";
    $content.="</tr>";
    foreach($xmlNode as $xmlChild)
      {
      $tmp = (string) $xmlChild[0]->Old[0];
      if(!empty($tmp))
        {
        $content.="<tr>";
        $content.="  <td>";
        $content.="    :code:".str_replace("\n", "<br/>", htmlspecialchars($xmlChild[0]->Old[0])).":code:";
        $content.="  </td>";
        $content.="  <td>";
        $content.="    :code:".str_replace("\n", "<br/>", htmlspecialchars($xmlChild[0]->New[0])).":code:";
        $content.="  </td>";
        $content.="</tr>";
        }
      }
    foreach($xmlNode2 as $xmlChild)
      {
      $tmp =(string) $xmlChild[0]->Old[0];
      if(!empty($tmp))
        {
        $content.="<tr>";
        $content.="  <td>";
        $content.="    :code:".str_replace("\n", "<br/>", htmlspecialchars($xmlChild[0]->Old[0])).":code:";
        $content.="  </td>";
        $content.="  <td>";
        $content.="    :code:".str_replace("\n", "<br/>", htmlspecialchars($xmlChild[0]->New[0])).":code:";
        $content.="  </td>";
        $content.="</tr>";
        }
      }
    $content.="</table>";

    $faq = new PMF_Faq(null,null);

    $oldRecord=$faq->getIdFromChange($change);


    $data['lang']="en";
    $data['active']="yes";
    $data['sticky']=0;
    $data['author']='admin';
    $data['email']='kitware@kitware.com';
    $data['comment']='y';
    $data['thema']=$xml->Title[0];
    $data['content']=$content;
    $data['date']=date('YmdHis');
    $data['linkState']=$change;
    $data['dateStart']='00000000000000';
    $data['dateEnd']='99991231235959';
    $data['linkDateCheck']=0;
    $data['keywords']='';

    if($oldRecord!=null)
      {
      $data['revision_id']=0;
      $data['id']=$oldRecord;

      $faq->updateRecord($data);

      $record_id=$oldRecord;
      }
    else
      {
      $record_id=$faq->addRecord($data);
      $faq->addCategoryRelations(array($category), $record_id, "en");
      $faq->db->query("INSERT INTO  ".SQLPREFIX."faqdata_user VALUES ('$record_id','-1')");
      }
    $uri=explode('.',$_SERVER["REQUEST_URI"]);
    echo"http://".$_SERVER["SERVER_NAME"].substr($uri[0], 0,  strrpos($uri[0], "/"))."/index.php?action=artikel&id=".$record_id;
    exit;
    break;
  case 'getVersion':
    $result = array('version' => $faqconfig->get('main.currentVersion'));
    break;

  case 'getApiVersion':
    $result = array('apiVersion' => (int) $faqconfig->get('main.currentApiVersion'));
    break;

  case 'search':
    $search = new PMF_Search($db, $Language);
    $searchString = PMF_Filter::filterInput(INPUT_GET, 'q', FILTER_SANITIZE_STRIPPED);
    $result = $search->search($searchString, false);
    $url = $faqconfig->get('main.referenceURL') . '/index.php?action=artikel&cat=%d&id=%d&artlang=%s';

    foreach ($result as &$data)
      {
      $data->answer = html_entity_decode(strip_tags($data->answer), ENT_COMPAT, 'utf-8');
      $data->answer = PMF_Utils::makeShorterText($data->answer, 12);
      $data->link = sprintf($url, $data->category_id, $data->id, $data->lang);
      }
    break;

  case 'getCategories':
    $category = new PMF_Category($current_user, $current_groups, true);
    $result = $category->categories;
    break;

  case 'getFaqs':
    $faq = new PMF_Faq($current_user, $current_groups);
    $result = $faq->getAllRecordPerCategory($categoryId);
    break;

  case 'getFaq':
    $faq = new PMF_Faq($current_user, $current_groups);
    $faq->getRecord($recordId);
    $result = $faq->faqRecord;
    break;
  }

// print result as JSON
print json_encode($result);

