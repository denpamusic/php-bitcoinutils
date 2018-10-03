<?php

$directories = glob(__DIR__ . DIRECTORY_SEPARATOR .'*', GLOB_ONLYDIR);

foreach ($directories as $dir) {
    require $dir . DIRECTORY_SEPARATOR . 'functions.php';
}
