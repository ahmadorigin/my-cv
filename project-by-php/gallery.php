<?php

      include 'header.php'; 
      $conn = mysqli_connect("localhost", "root", "", "db_peserta");
      $result = mysqli_query($conn, "SELECT * FROM tb_peserta LIMIT 21");
      
      $rows = [];
      while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
      }

?>



<h1 class="h1--gallery">Peserta</h1>

<div class="container--gallery">
    <table class="table--gallery">
        <thead class="thead--gallery">
            <tr class="tr--gallery">
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
                <td class="td--gallery"><?= $i++; ?></td>
                <td class="td--gallery"><?= $peserta["first_name"] . " " . $peserta["last_name"]; ?></td>
                <td class="td--gallery"><?= $peserta["email"]; ?></td>
                <td class="td--gallery"><?= $peserta["blood_type"]; ?></td>
                <td class="td--gallery"><?= $peserta["city"]; ?></td>
                <td class="td--gallery"><?= $peserta["kode_pos"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>