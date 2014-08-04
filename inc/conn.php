<?php
$conn = mssql_connect("127.0.0.1\MSSQLSERVER2008","sa","wmgd") or die(mysql_error());
$conn1 = mssql_select_db("wmgd",$conn) or die(mysql_error());

# ģ��mysql_insert_id()����
function mssql_insert_id($connms) {
    $id = false;
    $res = mssql_query('SELECT @@identity AS id',$connms);
    if($row = mssql_fetch_row($res)){
        $id = trim($row[0]);
    }
    mssql_free_result($res);
    return $id;
}