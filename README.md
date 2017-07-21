# zohocrm-api
This is very simple PHP script for ZOHOCRM API Lead Data Insertion and Update is possible by using this script.  I am making ApeWare's [ https://github.com/ApeWare ] ZOHOCRM API Class to simple Non OOP PHP

Generate Your Token: 
Edit this URL ```html https://accounts.zoho.com/apiauthtoken/create?SCOPE=ZohoCRM/crmapi&DISPLAY_NAME=ProjectName ```

and SET your project name DISPLAY_NAME=ProjectXYZ 

Then the URL will be like this ```html https://accounts.zoho.com/apiauthtoken/create?SCOPE=ZohoCRM/crmapi&DISPLAY_NAME=ProjectXYZ ```

Login to ZOHOCRM and click above URL to generate AUTHTOKEN

Example of How to use this script: 

Copy your AUTHTOKEN, open "zoho-crm-api-simple-script.php" script and paste it at line 
$authtoken = 'PUT YOUR OWN TOKEN'; and Save the file.

Execute this script at your browser and check https://crm.zoho.com/crm/ShowTab.do?module=Leads 

You will see follow lead data has been pushed: 
```php
"fName"=>"John",
"lName"=>"Test",
"email"=>"jdoe1@testing.com",
"company"=>"Some Company",
"phone"=>"407-555-1212",
"leadOwner"=>"Mr.Brian May",
```

Here primary key is 'email' so if you push any updated information for the same email , script will update the lead info in ZohoCRM Lead. 

Example Updated Phone Number: 
```php
# Lead Data 

$leadData = array(
"fName"=>"John",
"lName"=>"Test",
"email"=>"jdoe1@testing.com",
"company"=>"Some Company",
"phone"=>"666-444-1112",
"leadOwner"=>"Mr.Brian May",
);
```
You will see this lead phone number has been updated at ZohoCRM Lead https://crm.zoho.com/crm/ShowTab.do?module=Leads 

You can push lead data dynamically by using this script , just push dynamic data into $leadData array. 
