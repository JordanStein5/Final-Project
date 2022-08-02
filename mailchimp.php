<?php

session_start();
if(isset($_POST['submit'])){

    $email = $_POST['email'];
}
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){

    // Mailchimp API keys
    $email = 'jordan.stein@hgs.hiddengeniusproject.org';
    $list_id = 'cbaed2dbeb';
    $api_key = 'ea0234f7b2feda1d2f82cc89b806eb96-us13';
    
    // MailChimp API URL
    $memberID = md5(strtolower($email));
    $dataCenter = substr($api_key,strpos($api_key, '-')+1);
    $url = 'https://' .$dataCenter . 'api.mailchimp.com/3.0/list/' . $audienceId . 'members/' . $memberID; 
    // $data_center = substr($api_key,strpos($api_key,'-')+1);
     
    // $url = 'https://'. $data_center .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members';
    

    $postData = array(
        "status" => "subscribed",
        "merge_fields" => array(
            "EMAIL"=> $email)
    );
    
    // Setup cURL
    $ch = curl_init('https://us20.api.mailchimp.com/3.0/lists/'.$list_id.'members/');
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Authorization:'.$api_key,
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));
    // Send the request
    $response = curl_exec($ch);
}

header('location:index.php');

?>