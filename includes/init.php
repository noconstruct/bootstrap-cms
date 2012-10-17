<?php

// Setting up error reporting and display errors for the startup process
error_reporting(-1);
ini_set('display_errors', 1);

// Set default timezone to avoid timezone warnings
date_default_timezone_set('UTC');

// Resource requirements
ini_set("memory_limit", "128M");
ini_set("max_execution_time", 60);
ini_set("post_max_size", "16M");
ini_set("upload_max_filesize", "16M");

// Locale and charset
ini_set("default_charset", "UTF-8");
mb_internal_encoding("UTF-8");
ini_set("default_mimetype", "text/html");
setlocale(LC_ALL, "en_US.UTF8");

// Session
ini_set("session.use_only_cookies", true); # do not use PHPSESSID in urls
ini_set("session.use_trans_sid", false); # do not use PHPSESSID in urls
ini_set("session.hash_function", 1); # use sha1 algorithm (160 bits)


$data = array(
    "projectName" => "Backend",
    "htmlClasses" => "sf-layout ",
    "assetsVersion" => 0
);