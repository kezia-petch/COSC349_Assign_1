//
<?php
    if((isset($_POST['submit'])) && (isset($_POST['radio'], "Timezone Conversion"))){
        if(!empty($_POST['Country/City'], "Australia/Sydney")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.92 Australian Dollar"
        }
        if(!empty($_POST['Country/City'], "Brazil/Brasilia")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get "
        }
        if(!empty($_POST['Country/City'], "Cabo Verde/Praia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 62.39 Cape Verdean Escudo"
        }
        if(!empty($_POST['Country/City'], "Canada/Whitehorse")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get $0.88 Canadian Dollar"
        }
        if(!empty($_POST['Country/City'], "Chile/Easter Island")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 524.53 Chilean Peso"
        }
        if(!empty($_POST['Country/City'], "Cook Islands/Rarotonga")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get $1 New Zealand Dollar"
        }
        if(!empty($_POST['Country/City'], "India/Kolkata")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 49.29 Indian Rupee"
        }
        if(!empty($_POST['Country/City'], "Kiribati/Kiritimati")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get $0.92 Australian Dollar"
        }
        if(!empty($_POST['Country/City'], "Maldives/Male")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 10.41 Maldivian Rufiyaa"
        }
        if(!empty($_POST['Country/City'], "Malta/Valletta")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 0.56 Euro"
        }
        if(!empty($_POST['Country/City'], "NZ/Wellington")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get $1 New Zealand Dollar"
        }
        if(!empty($_POST['Country/City'], "Oman/Muscat")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 0.26 Omani Rial"
        }
        if(!empty($_POST['Country/City'], "Peru/Lima")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 2.38 Sol"
        }
        if(!empty($_POST['Country/City'], "Samoa/Apia")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
            echo "<span>For every 1 New Zealand Dollar you get 1.72 Samoan Tala"
        }
        if(!empty($_POST['Country/City'], "Sierra Leone/Freetown")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 6,597.30 Sierra Leonean Leone"
        }
        if(!empty($_POST['Country/City'], "Singapore/Singapore")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get $0.92 Singapore Dollar"
        }
        if(!empty($_POST['Country/City'], "South Africa/Johannesburg")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 11.29 South African Rand"
        }
        if(!empty($_POST['Country/City'], "South Korea/Seoul")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 800.54 South Korean won"
        }
        if(!empty($_POST['Country/City'], "Taipei/Taiwan")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 19.84 NT$"
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Bermuda")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get $0.68 Bermudan Dollar"
        }
        if(!empty($_POST['Country/City'], "United Kingdom/Isle Of Man")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 0.5 Manx Pound"
        }
        if(!empty($_POST['Country/City'], "United States/Fairbanks")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get $0.68 United States Dollar"
        }
        if(!empty($_POST['Country/City'], "United States/Houston")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get $0.68 United States Dollar"
        }
        if(!empty($_POST['Country/City'], "United States/Los Angeles")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get $0.68 United States Dollar"
        }
        if(!empty($_POST['Country/City'], "Vanuatu/Port Vila")) {
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 74.1 Ni-Vanuatu Vatu"
        }
        if(!empty($_POST['Country/City'], "Yemen/Sana")){
            echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
                        echo "<span>For every 1 New Zealand Dollar you get 169.17 Yemeni Rial"
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
