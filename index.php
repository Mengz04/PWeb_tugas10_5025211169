<html>
<head>
    <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

</head>

<body style="background-image: url('https://images.unsplash.com/photo-1552152974-19b9caf99137?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
  <div class="container rounded bg-white p-4 mt-4">
    <div class="text-center">
      <h1 class="text-dark mb-4">Data Siswa</h1>
      <p class="text-dark"><a href="form_simpan.php">Tambah Data</a></p> <p class="text-dark"><a href="printpdf.php">Ekspor PDF</a></p>
    </div>
    <table class="table table-bordered table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th class="text-center">Foto</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";

            $sql = $pdo->prepare("SELECT * FROM siswa");
            $sql->execute();
            while ($data = $sql->fetch()) {
                echo "<tr>";
                echo "<td class='text-center'><img src='images/" . $data['foto'] . "' width='100' height='100'></td>";
                echo "<td>" . $data['nis'] . "</td>";
                echo "<td>" . $data['nama'] . "</td>";
                echo "<td>" . $data['jenis_kelamin'] . "</td>";
                echo "<td>" . $data['telp'] . "</td>";
                echo "<td>" . $data['alamat'] . "</td>";
                echo "<td><a href='form_ubah.php?id=" . $data['id'] . "' class='btn btn-primary'>Ubah</a></td>";
                echo "<td><a href='proses_hapus.php?id=" . $data['id'] . "' class='btn btn-danger'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




