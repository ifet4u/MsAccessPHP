<?php

$conf = file_get_contents(__DIR__.'config.json');
$CFG = json_decode($conf,true);

define('APPNAME', "MS Access / PHP");

define('DRIVER', $CFG['DRIVER']);

define('PATH', $CFG['PATH']);

define('PASS', $CFG['PASS']);
