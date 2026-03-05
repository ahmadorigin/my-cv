<?php

      include 'header.php'; 
      $conn = mysqli_connect("localhost", "root", "", "db_peserta");

      if (isset($_GET["termuda"])) {
          $result = mysqli_query($conn, "SELECT * FROM tb_peserta ORDER BY birth_date DESC LIMIT 1");
      } else

      if(isset($_GET["tertua"])) {
          $result = mysqli_query($conn, "SELECT * FROM tb_peserta ORDER BY birth_date ASC LIMIT 1");
      } else

      if (isset($_POST["blood-type"])) {
          $tipeDarah = $_POST["blood-type"];

          $result = mysqli_query($conn, "SELECT * FROM tb_peserta WHERE blood_type = '$tipeDarah' LIMIT 50");
      } else {
          $result = mysqli_query($conn, "SELECT * FROM tb_peserta LIMIT 21");
      }
      
      $rows = [];
      while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
      }
?>



<h1 class="h1--gallery"><?= count($rows); ?> Peserta</h1>
<form action="" method="get">
    <button class="btn--refresh" type="submit" name="termuda">Termuda</button>
    <button class="btn--refresh" type="submit" name="refresh">Refresh</button>
    <button class="btn--refresh" type="submit" name="tertua">Tertua</button>
</form>


<div class="container--gallery">
    <table class="table--gallery">
        <thead class="thead--gallery">
            <tr class="tr--gallery">
                <th class="th--gallery">Wa</th>
                <th class="th--gallery">No</th>
                <th class="th--gallery">Name</th>
                <th class="th--gallery">Email</th>
                <th class="th--gallery">Blood Type</th>
                <th class="th--gallery">City</th>
                <th class="th--gallery">Code Post</th>
            </tr>
        </thead>
        <tbody class="tbody--gallery">
            <?php $i = 1; ?>
            <?php foreach($rows as $peserta) : ?>
            <tr class="tr--gallery">
                <td class="td--gallery"><?= $peserta["mobile_phone"]; ?></td>
                <td class="td--gallery"><?= $i++; ?></td>
                <td class="td--gallery"><?= $peserta["first_name"] . " " . $peserta["last_name"]; ?></td>
                <td class="td--gallery"><?= $peserta["email"]; ?></td>
                <td class="td--gallery">
                    <form action="" method="post">
                        <button class="btn--gallery" type="submit" name="blood-type"
                            value="<?= $peserta["blood_type"]; ?>">
                            <?= $peserta["blood_type"]; ?>
                        </button>
                    </form>
                </td>
                <td class="td--gallery"><?= $peserta["city"]; ?></td>
                <td class="td--gallery"><?= $peserta["kode_pos"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>