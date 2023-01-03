<?php

if (!function_exists("curl_post")) {
    function curl_post($url, $postData=[], $postHeader=[], $asJson=false)
    {
        $headers = $postHeader ?? [];
        if($asJson) {
            $headers[] = "Content-Type: application/json";
        }

        $cURLConnection = curl_init($url);
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $apiResponse = curl_exec($cURLConnection);
        curl_close($cURLConnection);

        return $apiResponse;
    }
}
