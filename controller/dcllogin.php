<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 14-7-26
 * Time: 下午11:07
 * To change this template use File | Settings | File Templates.
 */
include("inc.php");

function login(){
    $userName = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? md5($_POST['password']) : '';

    $sql = "select dclUnitId,unitName,userName from tbl_dclunit where userName = '$userName' and password = '$password'";
    //echo $sql;
    $rs = mssql_query($sql) or die(mysql_error());
    $have = mssql_num_rows($rs);
    if($have > 0){
        list($unitId,$unitName,$userName) = mssql_fetch_array($rs);
        $_SESSION['unitId'] = $unitId;
        $_SESSION['unitName'] = $unitName;
        $_SESSION['userName'] = $userName;
        header("location: ../declare.php");
    }else{
        header("location: ../dcllogin.php?error=1");
    }
}

function logout(){
    session_destroy();
    unset($_SESSION);
    //echo 1;echo __FILE__."/../../declare.php";
    echo '<script>top.window.location="../declare.php"</script>';
    exit;
}


run();
