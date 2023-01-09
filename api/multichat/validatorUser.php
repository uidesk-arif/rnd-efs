<?php
if(!empty(file_get_contents("php://input"))) {
    $_post = json_decode(file_get_contents("php://input"), true);

    if($_post['username'] == "admin" && $_post['userid'] == 1) {
        $result['status'] = true;
        $result['msg'] = "authentication success as admin";
    } else if($_post['username'] == "user" && $_post['userid'] == 2) {
        $result['status'] = true;
        $result['msg'] = "authentication success as user";
    } else {
        $result['status'] = false;
        $result['msg'] = "authentication failed";
    }
} else {
    $result['status'] = false;
    $result['msg'] = "authentication failed";
}

    