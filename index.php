<?php
    use GuzzleHttp\Promise\Promise;
    require_once "vendor/autoload.php";
    $promise = new Promise();
    $promise->then(
        function($value) {
            return "The promise was fulfilled, $value";
        },
        function($value) {
            return "The promise was rejected";
        }
    )->then(
        function($value) {
            var_dump("$value");
        }
    );
$promise->resolve(" world.");
?>
