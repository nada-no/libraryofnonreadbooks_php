<?php

/**
 * Configuration for database connection
 *
 */

$host       = "mysql";
$username   = "root";
$password   = "secret";
$dbname     = "bookself";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );