<?php
$query = $koneksi->query("SELECT (SELECT COUNT(EFSDataAGentNew.id)  FROM EFSDataAGentNew EFSDataAGentNew WHERE EFSDataAGentNew.StatusData='Done Approved') as interest, (SELECT COUNT(EFSDataAGentNew_2.id) FROM EFSDataAGentNew EFSDataAGentNew_2)  as total");
$datas = $query->fetch_assoc();

$result['status'] = true;
$result['msg'] = "Result btpnDemoWidgetInterestIndicator";
$result['datas'] = $datas;
