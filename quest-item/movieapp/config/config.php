<?php

      $servername = "localhost";
      $username   = "root";
      $password   = "";
      $dbname     = "db_movies";

      try {
      // Membuat koneksi PDO
      $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
      $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
      ];

      $conn = new PDO($dsn, $username, $password, $options);

      echo ""; 
      } catch (PDOException $e) {
      // Menangkap error jika koneksi gagal
      die("KONEKSI GAGAL: " . $e->getMessage());
      }

?>