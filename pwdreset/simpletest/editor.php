<?php
  class editor{
     public function load($fname)
     {
        $doc=new DOMDocument();

        if($doc->load($fname))  $res=$this->parse($doc);
        else                    throw new Exception('error load XML');

        return $res;
     }


     private function parse($doc)
     {
        $xpath = new DOMXpath($doc);
        $items = $xpath->query("book");
        $result = array();
        foreach($items as $item)
        {
           $result[]=array('fields'=>$this->parse_fields($item));
        }
        return $result;
     }


     private function parse_fields($node)
     {
        $res=array();
        foreach($node->childNodes as $child)
        {
           if($child->nodeType==XML_ELEMENT_NODE)
           {
              $res[$child->nodeName]=$child->nodeValue;
           }
        }
        return $res;
     }


     //save array to xml
     public function save($fname, $rows)
     {
        $doc = new DOMDocument('1.0','utf-8');
        $doc->formatOutput = true;

        $books = $doc->appendChild($doc->createElement('books'));

        foreach($rows as $row)
        {
           $book=$books->appendChild($doc->createElement('book'));
           foreach($row['fields'] as $field_name=>$field_value)
           {
              $f=$book->appendChild($doc->createElement($field_name));
              $f->appendChild($doc->createTextNode($field_value));
           }
        }

        file_put_contents($fname, $doc->saveXML());
     }

  }
?>