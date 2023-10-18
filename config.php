<?php

/**
 * Configuration for database connection
 *
 */

$host       = "database2.c0sxrtnoksqz.us-west-2.rds.amazonaws.com";
$username   = "admin";
$password   = "admin123";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );