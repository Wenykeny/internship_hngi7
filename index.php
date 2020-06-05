<?php
$json = $_SERVER["QUERY_STRING"] ?? '';

$files = scandir("scripts/");

unset($files[0]);
unset($files[1]);
unset($files[2]);

$output = [];
$outputJSON = [];
$passes = 0;
$fails = 0;

echo "<br>";
foreach ($files as $file) {
    $extension = explode('.', $file);
    print_r($extension);
    echo "<br>";
    switch (@$extension[1]) {
        case 'php':
            $startScript = "php";
            break;
        case 'js':
            $startScript = "node";
            break;
        case 'py':
            $startScript = "python";
            break;
        case 'dart':
            $startScript = "dart";
            break;
        case 'java':
            $startScript = "java";
            exec("javac scripts/" . $file);
            break;
        default:
            $startScript = "php";
            break;
    }

    // $f = exec($startScript . " scripts/" . $file);

    // $data[$extension[0]]->content = $f;
    // $data[$extension[0]]->status = testFileContent($f);
    // $data[$extension[0]]->name = $extension[0];
    // $output[] = [$f, testFileContent($f), $extension[0]];
}
//$outputJSON = $data;

echo "<br>";echo "<br>";
print_r($files);
?>