<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 14-7-27
 * Time: 上午12:11
 * To change this template use File | Settings | File Templates.
 */

$sql = "select projectId,projectName from tbl_project";
$rs = mssql_query($sql);
$projects = array();
while($row = mssql_fetch_array($rs)){
    $projects[] = $row;
}