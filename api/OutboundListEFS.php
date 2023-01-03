<?php

$query = $koneksi->query("SELECT * FROM OutboundListEFS");
$datas = [];
while ($data = $query->fetch_assoc()) {
    $datas[] = $data;
}

$result['status'] = true;
$result['msg'] = "Result OutboundListEFS";
$result['datas'] = $datas;
