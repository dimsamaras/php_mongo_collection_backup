<?php

error_reporting(E_ALL);

use Project\Common\Mongo\MongoDumper;

$scenario = null;
if (isset($_GET["scenario"])) {
    $scenario = $_GET["scenario"];
}

$dumper = new MongoDumper("/tmp/db-backup/mongo/");

switch ($scenario) {
    case '1':
        $arr = ['col1', 'col1b'];
        break;
    case 'full':
        $arr = [
            'col1',
            'col1b',
            'col2',
            'col2b',
            'col2c',
            'col3',
            'col4'
        ];
        break;
    case 'test':
        $arr = ['migos'];
        break;
    default:
        throw new Exception("Hmm, you did not make a scenario selection! Abort!");
        echo 'No backup';
        break;
}


foreach ($arr as $r) {
    $dumper->run($r, true);
}
