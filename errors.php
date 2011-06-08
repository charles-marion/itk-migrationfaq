<?php
$body = '';
$faq = new PMF_Faq(null,null);
$i=0;
$result=$faq->getErrorRecord($_GET['id'], $i);
while($result!=false)
  {
  $body .= "<p>".$result['header']."</p>";
  $body .= "<pre>".$result['content'].'</pre>';
  $i++;
  $result=$faq->getErrorRecord($_GET['id'], $i);
  }
  
if(isset($_GET['ajax']))
  {
  echo '<html>';
  echo '<body>';

  echo $body;
  echo '</body>';
  exit();
  }
else
  {
  $body = "<a class='returnArtikel' href='index.php?action=artikel&id=".$_GET['id']."'>See related migration page</a>" .$body;
// Set the template variables
  $tpl->processTemplate ("writeContent", array(
    'writeContent'                  => $body,
   ));
  $tpl->includeTemplate('writeContent', 'index');
  }
?>
