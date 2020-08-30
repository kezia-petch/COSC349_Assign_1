<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Date and Time Converter</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
  <h1>Date and Time Converter</h1>

<p>Showing list of avaliable conversions:</p>

<table border="3">
  <tr><th>Country/City</th><th>Currency</th<th>Timezone</th<th>Offset from UTC</th></tr>

<?php
 
$db_host   = '192.168.2.12';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM dayconverter");

while($row = $q->fetch()){
  echo "<tr><td>".$row["code"]."</td><td>".$row["name"]."</td></tr>\n";
}

?>
</table>
</body>
</html>
