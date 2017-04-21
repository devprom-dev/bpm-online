<?php


use agoalofalife\bpm\KernelBpm;
use agoalofalife\bpm\SourcesConfigurations\File;

require_once './vendor/autoload.php';

$test = new KernelBpm();
$file = new File();

// 1.Option
// set file with configuration | pre settings
//$file->setSource(__DIR__ . '/config/apiBpm.php');
//$test->loadConfiguration($file);


// 2.Option
// set configuration manually
$test->setConfigManually('apiBpm', [
        'UrlLogin' => '',
        'Login'    => '',
        'Password' => '',
        'UrlHome'  => ''
] );
// 3, Setting collection
$test->setCollection('SomeCollection');


$test->action('select', function ($select){
    return $select->filterConstructor()->guid();
})->get();