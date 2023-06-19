<?php
    $url = "https://dummyjson.com/products";
    $curl = curl_init();
    curl_setopt_array($curl,[
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => ['Accept:json/application','Content-Type: json/application']
    ]);

    $result = curl_exec($curl);
    $response = json_decode($result,1);

   echo "<table border='1' style='border: solid 1px black; border-collapse: collapse;'><tr><th>Product name</th><th>Price</th><th>Brand</th></tr>";

    foreach($response['products'] as $res){
        echo "<tr><td>".$res['title']."</td><td>$ ".$res['price']."</td><td>".$res['brand']."</td></tr>";
    }
?>