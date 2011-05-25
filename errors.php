<?php
echo '<html>';
echo '<body>';
echo "<a class='returnArtikel' href='index.php?action=artikel&id=".$_GET['id']."'>Voir post correspondant</a>";
$faq = new PMF_Faq(null,null);
$i=0;
$result=$faq->getErrorRecord($_GET['id'], $i);
while($result!=false)
  {
  echo "<p>".$result['header']."</p>";
  echo "<pre>".$result['content'].'</pre>';
  $i++;
  $result=$faq->getErrorRecord($_GET['id'], $i);
  }
echo '</body>';
exit();
?>
