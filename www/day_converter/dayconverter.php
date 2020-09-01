// This set of if statements is a set of hardcoded currency conversions
// to cover every possible country/city option for the currency conversion
// radio button option. This currency conversion is comparing every country/city
// option to the New Zealand Dollar.
<?php
    if((isset($_POST['submit'])) && (isset($_POST['radio'], "Timezone Conversion"))){
        if(!empty($_POST['Country/City'], "Australia/Sydney")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.92 Australian Dollar";
        }
        if(!empty($_POST['Country/City'], "Brazil/Brasilia")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 3.71 Brazilian Real";
        }
        if(!empty($_POST['Country/City'], "Cabo Verde/Praia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 62.39 Cape Verdean Escudo";
        }
        if(!empty($_POST['Country/City'], "Canada/Whitehorse")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.88 Canadian Dollar";
        }
        if(!empty($_POST['Country/City'], "Chile/Easter Island")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 524.53 Chilean Peso";
        }
        if(!empty($_POST['Country/City'], "Cook Islands/Rarotonga")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $1 New Zealand Dollar";
        }
        if(!empty($_POST['Country/City'], "India/Kolkata")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 49.29 Indian Rupee";
        }
        if(!empty($_POST['Country/City'], "Kiribati/Kiritimati")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.92 Australian Dollar";
        }
        if(!empty($_POST['Country/City'], "Maldives/Male")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 10.41 Maldivian Rufiyaa";
        }
        if(!empty($_POST['Country/City'], "Malta/Valletta")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 0.56 Euro";
        }
        if(!empty($_POST['Country/City'], "NZ/Wellington")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $1 New Zealand Dollar";
        }
        if(!empty($_POST['Country/City'], "Oman/Muscat")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 0.26 Omani Rial";
        }
        if(!empty($_POST['Country/City'], "Peru/Lima")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 2.38 Sol";
        }
        if(!empty($_POST['Country/City'], "Samoa/Apia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 1.72 Samoan Tala";
        }
        if(!empty($_POST['Country/City'], "Sierra Leone/Freetown")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 6,597.30 Sierra Leonean Leone";
        }
        if(!empty($_POST['Country/City'], "Singapore/Singapore")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.92 Singapore Dollar";
        }
        if(!empty($_POST['Country/City'], "South Africa/Johannesburg")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 11.29 South African Rand";
        }
        if(!empty($_POST['Country/City'], "South Korea/Seoul")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 800.54 South Korean won";
        }
        if(!empty($_POST['Country/City'], "Taipei/Taiwan")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 19.84 NT$";
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Bermuda")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.68 Bermudan Dollar";
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Isle Of Man")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 0.5 Manx Pound";
        }
        if(!empty($_POST['Country/City'], "United States/Fairbanks")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.68 United States Dollar";
        }
        if(!empty($_POST['Country/City'], "United States/Houston")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.68 United States Dollar";
        }
        if(!empty($_POST['Country/City'], "United States/Los Angeles")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.68 United States Dollar";
        }
        if(!empty($_POST['Country/City'], "Vanuatu/Port Vila")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 74.1 Ni-Vanuatu Vatu";
        }
        if(!empty($_POST['Country/City'], "Yemen/Sana")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 169.17 Yemeni Rial";
        }
        else{
            echo "<span>Please Select Atleast One Country/City.</span><br/>";
        }
    }
// This set of if statements is a set of hardcoded timezone conversion comparisons
// to cover every possible country/city option for the timezone conversion
// radio button option. This timezone conversion is comparing every country/city
// option to the timezone New Zealand is situated in.
    elseif((isset($_POST['submit'])) && (isset($_POST['radio'], "Currency Conversion"))){
        if((!empty($_POST['Country/City'], "Australia/Sydney")) && ) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Australia/Sydney is 2 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Brazil/Brasilia")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Brazil/Brasilia is 15 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Cabo Verde/Praia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Cabo Verde/Praia is 14 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Canada/Whitehorse")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Canada/Whitehorse is 21 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Chile/Easter Island")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Chile/Easter Island is 19 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Cook Islands/Rarotonga")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Cook Islands/Rarotonga is 23 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "India/Kolkata")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>India/Kolkata is 6 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Kiribati/Kiritimati")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Kiribati/Kiritimati is 2 hours in front of New Zealand";
        }
        if(!empty($_POST['Country/City'], "Maldives/Male")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Maldives/Male is 7 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Malta/Valletta")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Malta/Valletta is 11 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "NZ/Wellington")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>NZ/Wellington is in New Zealand";
        }
        if(!empty($_POST['Country/City'], "Oman/Muscat")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Oman/Muscat is 8 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Peru/Lima")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Peru/Lima is 17 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Samoa/Apia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Samoa/Apia is 1 hour in front of New Zealand";
        }
        if(!empty($_POST['Country/City'], "Sierra Leone/Freetown")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Sierra Leone/Freetown is 13 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Singapore/Singapore")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Singapore/Singapore is 5 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "South Africa/Johannesburg")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>South Africa/Johannesburg is 10 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "South Korea/Seoul")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>South Korea/Seoul is 3 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Taipei/Taiwan")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Taipei/Taiwan is 4 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Bermuda")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>United Kingdom/Bermuda is 16 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Isle Of Man")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>United Kingdom/Isle Of Man is 12 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "United States/Fairbanks")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>United States/Fairbanks is 22 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "United States/Houston")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>United States/Houston is 18 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "United States/Los Angeles")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>United States/Los Angeles is 20 hours behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Vanuatu/Port Vila")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Vanuatu/Port Vila is 1 hour behind New Zealand";
        }
        if(!empty($_POST['Country/City'], "Yemen/Sana")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>Yemen/Sana is 9 hours behind New Zealand";
        }
        else{
            echo "<span>Please Select Atleast One Country/City.</span><br/>";
        }
    }
    
    else{
            echo "<span>Please Select Atleast One Country/City and One Conversion Method.</span><br/>";}
        }
            
?>
