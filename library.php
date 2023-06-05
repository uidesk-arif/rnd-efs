<?php

if (!function_exists("curl_post")) {
    function curl_post($url, $postData=[], $postHeader=[], $asJson=false)
    {
        $headers = $postHeader ?? [];
        if($asJson) {
            $headers[] = "Content-Type: application/json";
        }

        $cURLConnection = curl_init($url);
        curl_setopt($cURLConnection, CURLOPT_POST, 1);
        curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($cURLConnection, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36");
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYPEER, false);

        $apiResponse = curl_exec($cURLConnection);
        curl_close($cURLConnection);

        return ["body" => $postData, "headers" => $headers, "response" => $apiResponse];
    }
}



if (!function_exists("curl_get")) {
    function curl_get($url, $getParams = [], $getHeaders = [], $asJson = false)
    {
        $headers = $getHeaders ?? [];
        if ($asJson) {
            $headers[] = "Content-Type: application/json";
        }

        $params = [];
        foreach ($getParams as $key => $param) {
            $params[] = implode("=", [$key, $param]);
        }
        $url = $url . "?" . (!empty($params) ? implode("&", $params) : "");

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $apiResponse = curl_exec($curl);
        curl_close($curl);
        /*
        $cURLConnection = curl_init($url);
        curl_setopt($cURLConnection, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $headers);

        $apiResponse = curl_exec($cURLConnection);
        curl_close($cURLConnection);
        */
        return ["body" => $getParams, "headers" => $headers, "response" => $apiResponse];
    }
}
