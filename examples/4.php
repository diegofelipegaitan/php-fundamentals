<?php

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

    public function write($type) {
        $ret = '';
        switch($type) {
            case 'XML':
                $ret = '
';
                $ret .= '<br />';
                $ret .= '' . $this->author . '<br />';
                $ret .= '' . $this->date . '<br />';
                $ret .= '' . $this->category . '<br />';
                $ret .= '
';
                break;
            case 'JSON':
                $array = array('article' => $this);
                $ret = json_encode($array);
                break;
        }
        return $ret;
    }

}

$article = new poly_base_Article('Title' , 'Diego Gaitán' , date( 'Y-m-d' ) );
echo $article->write('XML') . "<br />";
echo "<pre> {$article->write('JSON')} </pre>";

