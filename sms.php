<?php


//Change pass Key to your own ..Duuh!
    $passKey='7a37226929ef965705e1f812e1fe3d3323db34456bf501715e0fb1c3b1b131d9';


//Sandbox URL   
    $url = 'https://api.sandbox.africastalking.com/version1/messaging';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);

//Head
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json','Content-Type:application/x-www-form-urlencoded','apiKey: 7a37226929ef965705e1f812e1fe3d3323db34456bf501715e0fb1c3b1b131d9')); //setting custom header



    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);

//Other Content
    curl_setopt($curl, CURLOPT_POSTFIELDS, "username=sandbox&to=%2B254743105448,%2B254701586780&message=Hello%20World!&from=40370");


    $curl_response = curl_exec($curl);
    curl_close($curl);

//Response
    print_r($curl_response);


?>