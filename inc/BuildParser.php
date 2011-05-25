<?php

class BuildParser
  {

  protected $_stack = array();
  protected $_file = "";
  protected $_parser = null;
  protected $_currentId = "";
  protected $_current = "";

  public function __construct($file,$id_data)
    {
    $this->_file = $file;
    $this->idData=$id_data;

    $this->_parser = xml_parser_create("UTF-8");
    xml_set_object($this->_parser, $this);
    xml_set_element_handler($this->_parser, "startTag", "endTag");
    xml_set_character_data_handler($this->_parser, 'text');

    $this->_results="";
    $this->faq = new PMF_Faq(null,null);
    }

  public function startTag($parser, $name, $attribs)
    {
    $this->_current = $name;
    array_push($this->_stack, $this->_current);
    }

  public function endTag($parser, $name)
    {
    $this->_current = array_pop($this->_stack);
    if($this->_current=='FAILURE')
      {
      $data=Array('id_data'=>$this->idData,
                  'header'=>$this->TargetName.' ('.$this->SourceFile.')',
                  'content' => $this->Error);

      $this->faq->addErrorRecord($data);
        
      }

    }

  public function text($parser, $data)
    {
    if ($this->getParent()== "ACTION")
      {
      switch($this->_current)
        {
        case 'TARGETNAME':
          $this->TargetName=$data;
          $this->Error='';
        case 'SOURCEFILE':
          $this->SourceFile=$data;
        }
      }
    if ($this->getParent()== "RESULT")
      {
      switch($this->_current)
        {
        case 'STDERR':
          if($data!="")
            {
            $this->Error.=$data;
            }
        }
      }
    }

  public function parse()
    {

    $fh = fopen($this->_file, "r");
    if (!$fh)
      {
      die("Epic fail!\n");
      }

    while (!feof($fh))
      {
      $data = fread($fh, 4096);
      xml_parse($this->_parser, $data, feof($fh));
      }
    }

    private function getParent()
    {
      $size=count($this->_stack);
      if($size<2)return '';
      else
        {
        return $this->_stack[$size-2];
        }
    }

  }
