<?php 

function postData($authtoken, $data, $create='Leads')
	    {
	    	
	    	$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
			    <$create>
			        <row no=\"1\">
				        <FL val=\"First Name\">".$data['fName']."</FL>
				        <FL val=\"Last Name\">".$data['lName']."</FL>
				        <FL val=\"Email\">".$data['email']."</FL>
				        <FL val=\"Phone\">".$data['phone']."</FL>
				        <FL val=\"Company\">".$data['company']."</FL>
				        <FL val=\"Lead Owner\">".$data['leadOwner']."</FL>
			        </row>
			     </$create>";
			        
			       
#POST QUERY
$query = "authtoken=$authtoken&scope=crmapi&duplicateCheck=2&newFormat=1&xmlData=$xml";
#POST URL 
$url = "https://crm.zoho.com/crm/private/xml/$create/insertRecords";
	    	
		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url); 			// URL for post request
		    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // allow redirects
		    curl_setopt($ch, CURLOPT_POST, true);			// set method to POST
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return response as a string ($response)
		    curl_setopt($ch, CURLOPT_TIMEOUT, 30); 			// set timeout to 30s
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);	// set POST field parameters
		    $response = curl_exec($ch);						// execute curl
		    curl_close($ch);
		   // echo'<pre style=\'text-align:left;\'>';print($response);echo'</pre>'; // DEV: Output for dev
		   return $response;
		}    


?>