<?php

function url(string $path = null): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
        if ($path) {
            return TEST_URL . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return TEST_URL;
    }

    if ($path) {
        return BASE_URL . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return BASE_URL;
}