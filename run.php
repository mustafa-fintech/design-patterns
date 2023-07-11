<?php 
$port  = @$argv[1] ?? "8000";
$cmd = 'php -S 127.0.0.1:' . $port . ' -t public/';
system($cmd);