<?php

    header("Access-Control-Allow-Origin: *");
    require_once "koneksi.php";
    require_once "library.php";

    $result = ['status' => false, 'msg' => 'Access denied'];
    
    if(isset($_GET['cmd'])) {
        if($_GET['cmd'] == "OutboundListEFS") include "api/OutboundListEFS.php";
        if($_GET['cmd'] == "postOutboundPredictive") include "api/postOutboundPredictive.php";
        

        if($_GET['cmd'] == "btpnDemoWidgetSmall") include "api/btpnDemoWidgetSmall.php";
        if($_GET['cmd'] == "btpnDemoWidgetInterestIndicator") include "api/btpnDemoWidgetInterestIndicator.php";
        if($_GET['cmd'] == "listAgents") include "api/listAgents.php";
        if($_GET['cmd'] == "agentListGroup") include "api/agentListGroup.php";
        if($_GET['cmd'] == "multichat-validatorUser") include "api/multichat/validatorUser.php";
    }

    echo json_encode($result);
    die;

?>