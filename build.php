<?php

use Jawira\CaseConverter\Convert;

require_once('vendor/autoload.php');

$target = $argv[1];

print("Building $target client\n");

$success = exec("TARGET=$target php vendor/bin/jane-openapi generate", $out, $result);
$out = trim(implode("\n", $out));
if (!empty($out)) {
    print("$out\n");
    exit($result);
}

if (!file_exists('src/')) {
    mkdir('src');
}

$className = (new Convert($target))->toPascal() . 'Client';

file_put_contents(
    "src/$className.php",
    str_replace(
        'class Client',
        "class $className",
        file_get_contents('build/Client.php')
    )
);

if (!file_exists("src/Runtime")) {
    rename("build/Runtime", "src/Runtime");
}

foreach (['Authentication', 'Endpoint', 'Exception', 'Model', 'Normalizer'] as $dir) {
    if (!file_exists("src/$dir/")) {
        mkdir("src/$dir");
    }

    foreach (glob("build/$dir/*.php") as $src) {
        rename($src, "src/$dir/" . basename($src));
    }
}
