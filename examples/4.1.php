<?php

interface poly_writer_Writer {
    public function write(poly_base_Article $obj);
}

class poly_base_Article {
    public $title;
    public $author;
    public $date;
    public $category;

    public function  __construct($title, $author, $date, $category = 0) {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }

    public function write(poly_writer_Writer $writer) {
        return $writer->write($this);
    }

}

class poly_writer_XMLWriter implements poly_writer_Writer {
    public function write(poly_base_Article $obj) {
        $ret = '
';
        $ret .= '<br />';
        $ret .= '' . $obj->author . '<br />';
        $ret .= '' . $obj->date . '<br />';
        $ret .= '' . $obj->category . '<br />';
        $ret .= '
';
        return $ret;
    }
}

class poly_writer_JSONWriter implements poly_writer_Writer {

    public function write(poly_base_Article $obj) {

        $array = array('article' => $obj);
        return "<pre> ". json_encode($array) ." </pre>";

    }

}

class poly_base_Factory {

    public static function getWriter($format) {
        // construct our class name and check its existence
        $class = 'poly_writer_' . $format . 'Writer';
        if(class_exists($class)) {
            return new $class();
        }
        // otherwise we fail
        throw new Exception('Unsupported format');
    }

}

$article = new poly_base_Article('Polymorphism', 'Diego', time(), 0);

try {
    // $writer = poly_base_Factory::getWriter('XML');
    // $writer = poly_base_Factory::getWriter('JSON');
    $writer = poly_base_Factory::getWriter('HTML');
}
catch (Exception $e) {
    var_dump($e);
    $writer = new poly_writer_XMLWriter();
}

echo $article->write($writer);

