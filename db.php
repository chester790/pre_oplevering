<?php
$env_file = file_get_contents('.env');

$env_vars = [];

$lines = explode("\n", $env_file);

foreach ($lines as $line) {
    if (empty($line) || strpos($line, '=') === false || strpos($line, '#') === 0) {
        continue;
    }

    list($key, $value) = explode('=', $line, 2);

    $env_vars[trim($key)] = trim($value);
}

$host = $env_vars['db_host'] ?? null;
$db = $env_vars['db_name'] ?? null;
$user = $env_vars['db_user'] ?? null;
$pass = $env_vars['db_pass'] ?? null;

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>