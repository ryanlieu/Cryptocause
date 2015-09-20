<?php

#   $url = "localhost";
#   $port = "8332";
#   $username = "bitcoind";
#   $password = "password";

    $response = json_decode(file_get_contents("http://nodes.p2pool.co/pools.dat"),true);
    $url = $response[0]['stratum+tcp://mint.bitminter.com:3333'];
    $port = $response[0]['443'];
    $username = "ryanjlieu_1";
    $password = "xxx";
?>
