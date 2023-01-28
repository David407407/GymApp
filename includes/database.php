<?php

$db = mysqli_connect('localhost', 'root', 'Root', 'gymapp');

$db->set_charset("utf8");
mysqli_set_charset($db, 'utf8mb4');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
