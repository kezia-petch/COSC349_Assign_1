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
  <h1>Currency Converter</h1>

<p>Showing list of avaliable conversions:</p>

<table border="3">
  <tr><th>Country/City</th><th>Currency</th><th>Timezone</th><th>Offset from UTC</th></tr>

<?php
 
$db_host   = '192.168.2.12';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM dayconverter");

while($row = $q->fetch()){
  echo "<tr><td>".$row["name"]."</td><td>".$row["currency"]."</td><td>".$row["timezone"]."</td><td>".$row["offset"]."</td></tr>\n";
}

?>
</table>

<form action="checkbox-form.php" method="post">

    <body>
    <div class="container">
    <div class="main">
    <h2>Select what country/city you want the conversion to be for:</h2>
    <form action="form.php" method="post">
    <!----- Select Option Fields Starts Here ----->
    <label class="heading">Country/City:</label>
    <select multiple name="Country/City[]">
    <option value="Red">Red</option>
    <option value="Green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Pink">Pink</option>
    <option value="Yellow">Yellow</option>
    <option value="White">White</option>
    <option value="Black">Black</option>
    <option value="Violet">Violet</option>
    <option value="Limegreen">Limegreen</option>
    <option value="Brown">Brown</option>
    <option value="Orange">Orange</option>
    </select>
    <?php include'select_value.php'; ?>
    <!---- Radio Button Starts Here ----->
    <label class="heading">Converison Type:</label>
    <input name="radio" type="radio" value="Currency Conversion">Currency Conversion
    <input name="radio" type="radio" value="Timezone Conversion">Timezone Conversion
    <?php include'radio_value.php'; ?>
    <input name="submit" type="submit" value="Convert">
    </form>
    </div>
    </div>
</form>
</body>
</html>
