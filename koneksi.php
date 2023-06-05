<?php

// $koneksi = new mysqli("localhost", "root", "", "rnd_efs");
$koneksi = new mysqli("localhost", "u1495171_rnd", "s8O*qJpw0EvF", "u1495171_pds");
if($koneksi->connect_errno) die($koneksi -> connect_error);