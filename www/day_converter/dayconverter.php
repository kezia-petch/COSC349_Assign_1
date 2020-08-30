//<html>
//<body>
//<?php
//if(isset($_POST['submit'])){
//if(!empty($_POST['Country/City'])) {
//echo "<span>You have selected :</span><br/>";
// As output of $_POST['Color'] is an array we have to use Foreach Loop to display individual value
//foreach ($_POST['Country/City'] as $select)
//{
//echo "<span><b>".$select."</b></span><br/>";
//}
//}
//else { echo "<span>Please Select Atleast One Color.</span><br/>";}
//}
//?>
//<?php
//if (isset($_POST['submit'])) {
//if(isset($_POST['radio']))
//{
//echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
//}
//else{ echo "<span>Please choose any radio button.</span>";}
//}
////?>
<?php
    if((isset($_POST['submit'])) && (isset($_POST['radio'], "Timezone Conversion"))){
        if((!empty($_POST['Country/City'], "Australia/Sydney")) && ) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Brazil/Brasilia")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Cabo Verde/Praia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Canada/Whitehorse")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Chile/Easter Island")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Cook Islands/Rarotonga")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "India/Kolkata")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Kiribati/Kiritimati")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Maldives/Male")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Malta/Valletta")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "NZ/Wellington")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Oman/Muscat")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Peru/Lima")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Samoa/Apia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Sierra Leone/Freetown")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Singapore/Singapore")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "South Africa/Johannesburg")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "South Korea/Seoul")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Taipei/Taiwan")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Bermuda")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Isle Of Man")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United States/Fairbanks")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United States/Houston")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United States/Los Angeles")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Vanuatu/Port Vila")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Yemen/Sana")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        else{
            echo "<span>Please Select Atleast One Country/City.</span><br/>";
        }
    }
        
    elseif((isset($_POST['submit'])) && (isset($_POST['radio'], "Currency Conversion"))){
        if((!empty($_POST['Country/City'], "Australia/Sydney")) && ) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Brazil/Brasilia")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Cabo Verde/Praia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Canada/Whitehorse")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Chile/Easter Island")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Cook Islands/Rarotonga")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "India/Kolkata")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Kiribati/Kiritimati")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Maldives/Male")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Malta/Valletta")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "NZ/Wellington")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Oman/Muscat")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Peru/Lima")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Samoa/Apia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Sierra Leone/Freetown")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Singapore/Singapore")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "South Africa/Johannesburg")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "South Korea/Seoul")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Taipei/Taiwan")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Bermuda")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Isle Of Man")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United States/Fairbanks")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United States/Houston")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "United States/Los Angeles")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Vanuatu/Port Vila")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        if(!empty($_POST['Country/City'], "Yemen/Sana")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
        }
        else{
            echo "<span>Please Select Atleast One Country/City.</span><br/>";
        }
    }
    
    else{
            echo "<span>Please Select Atleast One Country/City and One Conversion Method.</span><br/>";}
        }
            
?>
