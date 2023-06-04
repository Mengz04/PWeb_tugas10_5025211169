<html>
<head>
    <title>Aplikasi CRUD dengan PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body style="background-image: url('https://images.unsplash.com/photo-1552152974-19b9caf99137?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
  <div class="container col-6 py-4">
    <div class="bg-white rounded p-4">
      <h1 class="text-center">Tambah Data Siswa</h1>
      <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="mb-3">
              <label for="nis" class="form-label">NIS</label>
              <input type="text" class="form-control" id="nis" name="nis">
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
              <label class="form-label">Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki">
                <label class="form-check-label" for="laki-laki">Laki-laki</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                <label class="form-check-label" for="perempuan">Perempuan</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="telp" class="form-label">Telepon</label>
              <input type="text" class="form-control" id="telp" name="telp">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <hr>
            <div class="text-center">
              <input type="submit" value="Simpan" class="btn btn-primary">
              <a href="index.php" class="btn btn-secondary">Batal</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>

