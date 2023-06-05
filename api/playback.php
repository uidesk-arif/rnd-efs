<?php

if (empty($_GET['form_uniqueid'])) die("Data is'nt found");

$get_datas = curl_get("https://demo-1.c-icare.cc/outbound/report/api/recording", ["form_uniqueid" => $_GET['form_uniqueid']], ["Authorization: Bearer 1b3231655cebb7a1f783eddf27d254ca.7826b958b79c70626801b880405eb5111557dadceb2fee2b1ed69a18eed0c6dc"], true);

$arr_datas = json_decode($get_datas['response'], true);
if (!$arr_datas['status']) die("Status: false");

?>

<audio crossorigin preload="none" controls id="audio-player">
    <source src="<?= $arr_datas['urlrecording'] ?>" type="audio/wav">
</audio>

<?php die(); ?>