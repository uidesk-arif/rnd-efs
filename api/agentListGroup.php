<?php
if(!isset($_GET['group_id'])) {
    $result['status'] = false;
    $result['msg'] = "agentListGroup: parameter group_id is required";
} else {
    $group_id = $_GET['group_id'];
    $agent_query = $koneksi->query("SELECT * FROM EFSDataAGentNew WHERE GroupID='$group_id'");
    if($agent_query->num_rows != 0) {
        $agents = [];
        while ($agent_fetch = $agent_query->fetch_assoc()) {
            $agents[] = $agent_fetch;
        }

        
    }
}