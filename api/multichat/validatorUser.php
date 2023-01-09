<?php
if(!empty(file_get_contents("php://input"))) {
    $_post = json_decode(file_get_contents("php://input"), true);

    if($_post['user']['account_id'] == "admin" && $_post['userid'] == "6282285768836") {
        $result['status'] = true;
        $result['msg'] = "authentication success as admin";
    } else if($_post['user']['account_id'] == "user" && $_post['userid'] == 2) {
        $result['status'] = true;
        $result['msg'] = "authentication success as user";
    } else {
        $result['status'] = false;
        $result['msg'] = "authentication failed (2)";
    }
} else {
    $result['status'] = false;
    $result['msg'] = "authentication failed";
}

    