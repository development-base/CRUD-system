<?php
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'CRUD';

  $conn = new mysqli($hostname, $username, $password, $database);

  if ($conn->connect_error) {
    error_log('Connection error: ' . $conn->connect_error);
  }