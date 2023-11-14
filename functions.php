<?php

function dd($value): void {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs(string $value): bool {
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $statusCode  = Response::FORBIDDEN) {
    if (! $condition) {
        abort($statusCode);
    }
}