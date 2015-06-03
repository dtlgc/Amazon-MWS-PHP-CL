<?php
/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 6/3/2015
 * Time: 2:01 PM
 */

require_once(__DIR__ . "/vendor/autoload.php");

function namespaceExists($namespace) {
    $namespace .= "\\";
    foreach(get_declared_classes() as $name)
        if(strpos($name, $namespace) === 0) return true;
    return false;
}

$namespaces=array();
foreach(get_declared_classes() as $name) {
    if(preg_match_all("@[^\\\]+(?=\\\)@iU", $name, $matches)) {
        $matches = $matches[0];
        $parent =&$namespaces;
        while(count($matches)) {
            $match = array_shift($matches);
            if(!isset($parent[$match]) && count($matches))
                $parent[$match] = array();
            $parent =&$parent[$match];

        }
    }
}
print_r($namespaces);

//var_dump(get_declared_classes() );

//use \Cart\Model\MWSCartService_Model_Cart as Carto;
//use MWSCartService_Model_Cart as Carto2;
//use Amazon\MWS\Cart\Model\Cart as Carto;
use Amazon\MWS\Cart\Model\MWSCartService_Model_Cart as Carto;
$please_load = new Carto();
//$please_load = new Carto2();
