<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Tambah Film</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="POST">
        <div class="mb-3 w-25">
          <label for="kode" class="form-label">Kode Film</label>
          <input type="text" class="form-control" name="kode" id="kode" maxlength="9" autofocus required>
        </div>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul Film</label>
          <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="mb-3">
          <label for="jenis" class="form-label">Jenis Film</label>
          <input type="text" class="form-control" name="jenis" id="jenis">
        </div>
        <div class="mb-3">
          <label for="tahun" class="form-label">Tahun Rilis</label>
          <input type="text" class="form-control" name="tahun" id="tahun">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="text" class="form-control" name="gambar" id="gambar">
        </div>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Film</button>
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>