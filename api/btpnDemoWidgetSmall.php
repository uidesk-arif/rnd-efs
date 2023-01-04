<?php
$query = $koneksi->query("SELECT StatusData, COUNT(id) as count FROM EFSDataAGentNew GROUP BY StatusData");
$datas = [];
while ($data = $query->fetch_assoc()) {
    $datas[$data['StatusData']] = $data['count'];
}

$result['status'] = true;
$result['msg'] = "Result btpnDemoWidgetSmall";
$result['datas'] = $datas;
