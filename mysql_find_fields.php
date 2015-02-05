
<?php

//当mysql其中一个表的结构有变化，增加了一个字段。需要判断这个字段是否存在
mysql_connect('localhost', 'root', 'password');
mysql_select_db('库名');
$field = mysql_query('Describe 表名 字段名');
$field = mysql_fetch_array($field);

if($field[0]){
  echo 'exist';
}else{
  echo 'none';
}

?>