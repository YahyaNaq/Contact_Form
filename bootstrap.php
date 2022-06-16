<?php
$config=require 'config.php';
require 'form_data.php';
require 'database\connection.php';
require 'database\querybuilder.php';

$pdo=connection::create($config['database']);
return new querybuilder($pdo);