<?php
    $token = "1dae31989e654902ba2df925ae92ea529f19f79b799448fb95";
    $instance = "1101816217";
    $url = 'https://api.green-api.com/waInstance'.$instance.'/'.$tipoEnvio.'/'.$token;
    $data = [
        "chatId" => "51".$telefono."@c.us",
        ...$data1
    ];
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'content' => json_encode($data),
            'header' =>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);
?> 
