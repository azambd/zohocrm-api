<?php 
/**	**************************************************************************************************
This is very simple PHP script for ZOHOCRM API
Lead Data Insertion and Update is possible by using this script. 
I am making ApeWare's [ https://github.com/ApeWare ] ZOHOCRM API Class to simple Non OOP PHP

Author: Faruque Azam
Company: www.wscraper.com 
Contact: azam@wscraper.com 

******************************************************************************************************/

require_once 'lib/zohocrm-api-post-fn.php';

#Use your AUTHTOKEN

$authtoken = 'PUT YOUR OWN TOKEN';

/*
After Login to ZOHOCRM make and click this URL to generate AUTHTOKEN
https://accounts.zoho.com/apiauthtoken/create?SCOPE=ZohoCRM/crmapi&DISPLAY_NAME=ProjectName
*/


#Lead Data 

$leadData = array(
"fName"=>"John",
"lName"=>"Test",
"email"=>"jdoe1@testing.com",
"company"=>"Some Company",
"phone"=>"407-555-1212",
"leadOwner"=>"Brian May",
);



echo postData($authtoken, $leadData);

?>