<?php
$query = $koneksi->query("SELECT (SELECT COUNT(OutboundListEFS.JidON)  FROM OutboundListEFS OutboundListEFS WHERE OutboundListEFS.StatusCall='new') as interest, (SELECT COUNT(OutboundListEFS_2.JidON) FROM OutboundListEFS OutboundListEFS_2)  as total");
$datas = $query->fetch_assoc();

$result['status'] = true;
$result['msg'] = "Result btpnDemoWidgetInterestIndicator";
$result['datas'] = $datas;
