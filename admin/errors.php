<?php
/**
 * The FAQ record editor.
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
 * @since     2003-02-23
 */

if (!defined('IS_VALID_PHPMYFAQ_ADMIN')) {
    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']));
    exit();
}

if(isset($_POST['removeError']))
  {
  if($_POST['errorid'] == 'all')
    {
    $faq->removeError('all', $_POST['id']);
    }
  else
    {
    $faq->removeError($_POST['errorid'], $_POST['id']);
    }
  exit;
  }
if(isset($_POST['addError']))
  {
  if($_POST['errorid'] == 'all')
    {
    $i=0;
    $result=$faq->getErrorRecord($_POST['baseid'], $i);
    while($result!=false)
      {
      var_dump($result);
      $faq->addError($result['id'], $_POST['id']);
      $i++;
      $result = $faq->getErrorRecord($_POST['baseid'], $i);
      var_dump($result);
      }
    }
  else
    {
    $faq->addError($_POST['errorid'], $_POST['id']);
    }
  exit;
  }

// Re-evaluate $user
$user = PMF_User_CurrentUser::getFromSession($faqconfig->get('main.ipCheck'));

if ($permission["editbt"] && !PMF_Db::checkOnEmptyTable('faqcategories')) {

    $category = new PMF_Category($current_admin_user, $current_admin_groups, false);
    $category->buildTree();
    
    $helper = PMF_Helper_Category::getInstance();
    $helper->setCategory($category);

    $current_category = '';
    $categories       = array();
    $faqData          = array(
        'id'          => 0,
        'lang'        => $LANGCODE,
        'revision_id' => 0,
        'title'       => '',
        'dateStart'   => '',
        'dateEnd'     => '');

    $tagging = new PMF_Tags();
    
    $query = "
            SELECT
                *
            FROM
                faqdata fd ORDER BY thema DESC";


    $result = $faq->db->query($query);
    $records = array();
     while ($row = $faq->db->fetch_object($result)) 
      {
      $records[]= array('id' => $row->id , 'name' => $row->thema);
      }


    $id   = PMF_Filter::filterInput(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $i = 0;
    $result=$faq->getErrorRecord($_GET['id'], $i);

    $body = "";
    while($result!=false)
      {
      $body .= "<div class='errorWrapper'>";
      $body .= "<p element='".$result['id']."'>".$result['header']."</p>";
      $body .= "<pre style='max-height:150px;'>".$result['content'].'</pre>';
      $body .= "<a style='cursor:pointer;' element='".$result['id']."' class='removeError'>Remove Error</a> - ";
      $body .= "<select>";
      $body .= "<option value='-1'>";
      $body .= "- Select a post -";
      $body .= "</option>";
      foreach($records as $r)
        {
        $body .= "<option value='".$r['id']."'>";
        $body .= $r['name'];
        $body .= "</option>";
        }
      $body .= "</select> ";
      $body .= "<a style='cursor:pointer;' element='".$result['id']."' class='copyError'>Copy error in the selected post</a>";
      $body .='<br/><br/>';
      $body .= "</div>";
      $i++;
      $result=$faq->getErrorRecord($_GET['id'], $i);
      }
      
    $itemTitle   = $faq->getRecordTitle($_GET['id'], false);
 ?>

<script type="text/javascript">
  $(document).ready(function() {

    $('a.removeError').click(function()
        {
        if(confirm('Are you sure?'))
          {
          var obj = $(this);
          var errorid = $(this).attr('element');
          $.post("", { action: "errors", id: <?php echo $id?>, removeError : true, errorid: errorid }, function(){
            if(errorid == 'all')
              {
              $('div.errorWrapper').remove();
              }
            else
              {
              obj.parents('div.errorWrapper').remove();
              }
            } );
           }
       });
       
    $('a.copyError').click(function()
        {
        if(confirm('Are you sure you want to copy the error?'))
          {
          var obj = $(this).parents('div.errorWrapper').find('select');
          var objLink = $(this);
          $.post("", { action: "errors", baseid: <?php echo $id?>, id: obj.val(), addError : true, errorid: objLink.attr('element') }, function(){
            alert('Done');
            } );
           }
       });

  });
</script>

<h2>Manage Errors</h2>
<h4>Migration Post: <?php echo $itemTitle?> </h4>
<div class='errorWrapper'>
<a style='cursor:pointer;' element='all' class='removeError'>Remove All the Errors</a> - 
      <select>
      <option value='-1'>
      - Select a post -
      </option>
      <?php
      foreach($records as $r)
        {
        echo "<option value='".$r['id']."'>";
        echo $r['name'];
        echo "</option>";
        }
        ?>
      </select> 
      <a style='cursor:pointer;' element='all' class='copyError'>Copy all the following errors in the selected post</a>
</div>
<br/>
<br/>
   <?php echo $body;?>
    
 <?php
} elseif ($permission["editbt"] != 1 && !PMF_Db::checkOnEmptyTable('faqcategories')) {
    print $PMF_LANG["err_NotAuth"];
} elseif ($permission["editbt"] && PMF_Db::checkOnEmptyTable('faqcategories')) {
    print $PMF_LANG["no_cats"];
}
