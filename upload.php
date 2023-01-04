<?php
    require_once "koneksi.php";

    $efs_file = file_get_contents("efs.json");
    $efs_array = json_decode($efs_file, true);

    $envelope = $efs_array['Envelope'];
    $body = $envelope['Body'];
    $getUpdatesResponse = $body['getUpdatesResponse'];
    $getUpdatesResult = $getUpdatesResponse['getUpdatesResult'];

    $activePhones = $getUpdatesResult['activePhones']['p'];
    $activeUsers = $getUpdatesResult['activeUsers'];
    $activeUserGroups = $getUpdatesResult['activeUserGroups']['ug'];
    $activePhoneTypes = $getUpdatesResult['activePhoneTypes']['pt'];

    $results = "";

    foreach ($activePhoneTypes as $key => $activePhoneType) {
        $check_query = $koneksi->query("SELECT * FROM EFSPhoneType WHERE ID='$activePhoneType[_id]'");
        $check_fetch = $check_query->fetch_assoc();

        $activePhoneTypeName[$activePhoneType['_id']] = $activePhoneType['_description'];

        if($check_query->num_rows == 0) {
            $insert_query = $koneksi->query("INSERT INTO EFSPhoneType (ID, Description) VALUES('$activePhoneType[_id]', '$activePhoneType[_description]')");
            if($insert_query) {
                $results .= '<span style="color: green;">Success!!</span> insert EFSPhoneType.'.$activePhoneType['_id'];
                $results .= "<br>";
            } else {
                $results .= '<span style="color: red;">Error!!</span> insert EFSPhoneType.'.$activePhoneType['_id'];
                $results .= "<br>";
            }
        } else {
            $update_query = $koneksi->query("UPDATE EFSPhoneType SET Description='$activePhoneType[_description]' WHERE ID='$activePhoneType[_id]'");
            if($update_query) {
                $results .= '<span style="color: green;">Success!!</span> update EFSPhoneType.'.$activePhoneType['_id'];
                $results .= "<br>";
            } else {
                $results .= '<span style="color: red;">Error!!</span> update EFSPhoneType.'.$activePhoneType['_id'];
                $results .= "<br>";
            }
        }
    }

    foreach ($activeUserGroups as $key => $activeUserGroup) {
        $check_query = $koneksi->query("SELECT * FROM EFSUserGroups WHERE ID='$activeUserGroup[_id]'");
        $check_fetch = $check_query->fetch_assoc();

        $activeUserGroupName[$activeUserGroup['_id']] = $activeUserGroup['_description'];

        if($check_query->num_rows == 0) {
            $insert_query = $koneksi->query("INSERT INTO EFSUserGroups (ID, Description) VALUES('$activeUserGroup[_id]', '$activeUserGroup[_description]')");
            if($insert_query) {
                $results .= '<span style="color: green;">Success!!</span> insert EFSUserGroups.'.$activeUserGroup['_id'];
                $results .= "<br>";
            } else {
                $results .= '<span style="color: red;">Error!!</span> insert EFSUserGroups.'.$activeUserGroup['_id'];
                $results .= "<br>";
            }
        } else {
            $update_query = $koneksi->query("UPDATE EFSUserGroups SET Description='$activeUserGroup[_description]' WHERE ID='$activeUserGroup[_id]'");
            if($update_query) {
                $results .= '<span style="color: green;">Success!!</span> update EFSUserGroups.'.$activeUserGroup['_id'];
                $results .= "<br>";
            } else {
                $results .= '<span style="color: red;">Error!!</span> update EFSUserGroups.'.$activeUserGroup['_id'];
                $results .= "<br>";
            }
        }
    }
    
    $koneksi->query("TRUNCATE TABLE OutboundListEFS");

    foreach ($activePhones as $key => $activePhone) {
        $custName = "";
        if(preg_match("/[(,)]/i", $activePhone['_Info'])) {
            list(,$custName) = explode('(', $activePhone['_Info']);
            list($custName,) = explode(')', $custName);
        }
        $groupName = $activeUserGroupName[$activePhone['_groupID']];
        $phoneType = $activePhoneTypeName[$activePhone['_phoneTypeID']];
        $insert_query = $koneksi->query("INSERT INTO OutboundListEFS (JidON, CustName, PhoneNumber, GroupName, GroupID, PhoneType, TypeID, StatusCall, Informasi) VALUES ('$activePhone[_jidOn]', '$custName', '$activePhone[_number]', '$groupName', '$activePhone[_groupID]', '$phoneType', '$activePhone[_phoneTypeID]', 'new', '$activePhone[_Info]')");

        if($insert_query) {
            $results .= '<span style="color: green;">Success!!</span> insert OutboundListEFS.'.$activeUserGroup['_id'];
            $results .= "<br>";
        } else {
            $results .= '<span style="color: red;">Error!!</span> insert OutboundListEFS.'.$activeUserGroup['_id'];
            $results .= "<br>";
        }
    }

    $colums_outbound = $koneksi->query("SHOW COLUMNS FROM OutboundListEFS");
    $query_outbound = $koneksi->query("SELECT * FROM OutboundListEFS");
    $datas = [];
    while ($data = $query_outbound->fetch_assoc()) {
        $datas[] = $data;
    }

?>