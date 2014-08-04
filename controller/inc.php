<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 14-7-26
 * Time: 下午11:09
 * To change this template use File | Settings | File Templates.
 */
session_start();
include(__FILE__."/../../inc/conn.php");

$uri = ($_SERVER['SCRIPT_NAME']);
$arr = explode("/",$uri);
$n = count($arr) - 1;
$controller = $arr[$n];
if(file_exists("controller/".$controller)) include_once("controller/".$controller);
if($controller != 'dcllogin.php'){
    if(!isset($_SESSION['unitId']) or empty($_SESSION['unitId'])){
        header("location:dcllogin.php");
        exit;
    }
}


function run(){
    $method = isset($_GET['m']) ? $_GET['m'] : 'index';
    eval($method."();?>");
}