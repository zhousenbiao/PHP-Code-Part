
<?php

echo date(¡°H:i:s¡±);
$connect_mysql->query(¡®BEGIN');
$params = array(¡®value'=>'50¡ä);
for($i=0;$i<2000000;$i++){

$connect_mysql->insert($params);

if($i%100000==0){

$connect_mysql->query(¡®COMMIT');
$connect_mysql->query(¡®BEGIN');

}

}

$connect_mysql->query(¡®COMMIT');
echo date(¡°H:i:s¡±);

?>
