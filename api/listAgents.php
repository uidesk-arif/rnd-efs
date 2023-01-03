<?php
$query_efsusergroups = $koneksi->query("SELECT * FROM efsusergroups");
$datas = [];
while ($efsusergroups = $query_efsusergroups->fetch_assoc()) {
    $datas['groups'][] = $efsusergroups;

    $query_OutboundListEFS = $koneksi->query("SELECT * FROM efsdataagent WHERE GroupID='$efsusergroups[ID]'");

    while ($fetch_OutboundListEFS = $query_OutboundListEFS->fetch_assoc()) {
        $datas['agents'][$efsusergroups['ID']][] = $fetch_OutboundListEFS;
    }
}

$result['status'] = true;
$result['msg'] = "Result listAgents";
$result['datas'] = $datas;
