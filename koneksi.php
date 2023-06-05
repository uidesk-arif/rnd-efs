<?php

$koneksi = new mysqli("localhost", "root", "", "rnd_efs");
if($koneksi->connect_errno) die($koneksi -> connect_error);