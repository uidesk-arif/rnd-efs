<?php 
file_exists("koneksi-lokal.php")? require_once "koneksi-lokal.php" : require_once "koneksi.php";


$statuses = [
        "Done Approved",
        "No Answer",
        "Busy",
        "Unregistered",
        "Wrong Number",
        "Answer Follow Up",
        "Done Not Approved"
    ];
    
    $koneksi->query("DELETE FROM EFSDataAGentNew WHERE AgentName='Generate'");
    
    for($i=0;$i<100;$i++) {
        $statusData = $statuses[rand(0,6)];
        $query = $koneksi->query("INSERT INTO EFSDataAGentNew (AgentName, StatusData) VALUES ('Generate', '$statusData')");
    }
    
    echo "ok";