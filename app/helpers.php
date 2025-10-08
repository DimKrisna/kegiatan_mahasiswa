<?php

if (!function_exists('assets')) {
    function assets($file_name)
    {
        return asset($file_name) . "?v=" . filemtime($_SERVER['DOCUMENT_ROOT'] . '/' . $file_name);
    }
}
