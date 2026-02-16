<?php
 
      include './config/config.php';
      // $query = $conn->query('SELECT judul_film, no_imdb, kategori, artis, link FROM tb_film ORDER BY id_film DESC LIMIT 5');

      if (isset($_GET['search'])) { 
            $judul_film = trim($_GET['search']);
            $filmquery= $conn->query("SELECT * FROM tb_film WHERE judul_film LIKE '%$judul_film%'");
      } else {
            $filmquery= $conn->query("SELECT * FROM tb_film ORDER BY id_film DESC");
      }

      $films = $filmquery->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Movie App</title>
      <link rel="stylesheet" href="./assets/index.css">
</head>
<body>
      
      <div class="card-movie">
            <nav>
                  <a href="index.php">Home</a>
                  <a href="login.php">Login</a>
                  <a href="dashboard.php">Dashboard</a>
                  <a href="genre.php">Genre</a>
                  <a href="top-category">Top Category</a>
            </nav>
            <h1>Movie App</h1>
            <p>Find your favorite movie</p>
            <div class="cari">
                  <form method="get" class="form-cari">
                        <input type="text" name="search" placeholder="Masukkan judul film...">              
                        <button type="submit" name="submit">Golek!</button>
                  </form>
            </div>
            <h3>List Of Movie</h3>
            <table>
                  <thead>
                        <tr>
                              <th>Title</th>
                              <th>IMDB</th>
                              <th>Genre</th>
                              <th>Artis</th>
                              <th>Tonton</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php foreach($films as $row) : ?>
                              <tr>
                                    <td><?= htmlspecialchars($row['judul_film']) ?></td>
                                    <td><?= htmlspecialchars($row['no_imdb']) ?></td>
                                    <td><?= htmlspecialchars($row['kategori']) ?></td>
                                    <td><?= htmlspecialchars($row['artis']) ?></td>
                                    <td>
                                          <a href="<?= htmlspecialchars($row['link']) ?>" target="_blank" class="link">
                                                Nonton
                                          </a>
                                    </td>
                              </tr>
                        <?php endforeach; ?>
                  </tbody>
            </table>
      </div>

      
</body>
</html>