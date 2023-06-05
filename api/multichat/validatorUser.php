<?php
if(!empty(file_get_contents("php://input"))) {
    file_put_contents("hook.txt", file_get_contents("php://input"));
    $_post = json_decode(file_get_contents("php://input"), true);

    if($_post['message']['text'] == "admin" && $_post['user']['account_id'] == "6282285768836") {
        $result['status'] = true;
        $result['msg'] = "authentication success as admin";
    } else if($_post['message']['text'] == "user" && $_post['user']['account_id'] == "6281277409714") {
        $result['status'] = true;
        $result['msg'] = "authentication success as user";
    } else {
        $result['status'] = false;
        // $result['msg'] = "authentication failed (2);".json_encode($_post);
        $result['msg'] = "authentication failed (2);";
    }
} else {
    $result['status'] = false;
    $result['msg'] = "authentication failed";
}

    