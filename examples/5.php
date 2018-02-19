<?php


/*
spl_autoload_register(function ($className) {
    $tmp = explode( "\\" ,$className );
    require $tmp[0]."/".$tmp[1].".php";
});

use nameSpace1\foo as foo1;
use nameSpace2\foo as foo2;

foo1::bar();
foo2::bar();

*/


require "nameSpace1/foo.php";
require "nameSpace2/foo.php";
