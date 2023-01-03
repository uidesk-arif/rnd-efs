<?php
$query = $koneksi->query("SELECT StatusCall, COUNT(JidON) as count FROM OutboundListEFS GROUP BY StatusCall");
$datas = [];
while ($data = $query->fetch_assoc()) {
    $datas[$data['StatusCall']] = $data['count'];
}

$result['status'] = true;
$result['msg'] = "Result btpnDemoWidgetSmall";
$result['datas'] = $datas;
