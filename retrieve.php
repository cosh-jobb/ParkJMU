<?php
$host="134.126.65.63";
$username="root";
$password="hellocheckin";
$db_name="Parking2";

$con=mysql_connect("$host", "$username", "$password") or die ("cannot connect");
mysql_select_db("$db_name") or die ("cannot select database");
$sql = "select * from lot";
$result = mysql_query($sql);
$json = array();

if(mysql_num_rows(#result)){
while($row=mysql_fetch_assoc($result)){
$json['available'][]=$row;
}
}

mysql_close($con);
echo json_encode($json);
?>
