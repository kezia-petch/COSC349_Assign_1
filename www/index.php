<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Currency and Timezone Converter</title>
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
  <h1>Currency and Timezone Converter</h1>

<p>Showing a list of the possible Country and associated City conversions:</p>

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



<body>


<div class="container">
<div class="main">
<h2>Select What Country/City and Conversion Type You Want:</h2>
<form action="dayconverter.php" method="post">
<!----- Select Option Fields Starts Here ----->
<label class="heading">Country/City:</label>
<select multiple name="Country/City[]">
    
<option value="Australia/Sydney">Australia/Sydney</option>
<option value="Brazil/Brasilia">Brazil/Brasilia</option>
<option value="Cabo Verde/Praia">Cabo Verde/Praia</option>
<option value="Canada/Whitehorse">Canada/Whitehorse</option>
<option value="Chile/Easter Island">Chile/Easter Island</option>
<option value="Cook Islands/Rarotonga">Cook Islands/Rarotonga</option>
<option value="India/Kolkata">India/Kolkata</option>
<option value="Kiribati/Kiritimati">Kiribati/Kiritimati</option>
<option value="Maldives/Male">Maldives/Male</option>
<option value="Malta/Valletta">Malta/Valletta</option>
<option value="NZ/Wellington">NZ/Wellington</option>
<option value="Oman/Muscat">Oman/Muscat</option>
<option value="Peru/Lima">Peru/Lima</option>
<option value="Samoa/Apia">Samoa/Apia</option>
<option value="Sierra Leone/Freetown">Sierra Leone/Freetown</option>
<option value="Singapore/Singapore">Singapore/Singapore</option>
<option value="South Africa/Johannesburg">South Africa/Johannesburg</option>
<option value="South Korea/Seoul">South Korea/Seoul</option>
<option value="Taipei/Taiwan">Taipei/Taiwan</option>
<option value="United Kingdom/Bermuda">United Kingdom/Bermuda</option>
<option value="United Kingdom/Isle Of Man">United Kingdom/Isle Of Man</option>
<option value="United States/Fairbanks">United States/Fairbanks</option>
<option value="United States/Houston">United States/Houston</option>
<option value="United States/Los Angeles">United States/Los Angeles</option>
<option value="Vanuatu/Port Vila">Vanuatu/Port Vila</option>
<option value="Yemen/Sana">Yemen/Sana</option>
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
