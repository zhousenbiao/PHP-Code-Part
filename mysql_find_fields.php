
<?php

//��mysql����һ����Ľṹ�б仯��������һ���ֶΡ���Ҫ�ж�����ֶ��Ƿ����
mysql_connect('localhost', 'root', 'password');
mysql_select_db('����');
$field = mysql_query('Describe ���� �ֶ���');
$field = mysql_fetch_array($field);

if($field[0]){
  echo 'exist';
}else{
  echo 'none';
}

?>