<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1></h1>

  <h2>List Film</h2>

  <a href="tambah.php" class="btn btn-primary">Tambah Film</a>
  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
        <div class="input-group my-3">
          <input id="keyword" name="keyword" autofocus autocomplete="off" type="search" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
          <button name="button-search" class="btn btn-primary" type="submit" id="button-addon2">Search</button>
        </div>
      </form>
    </div>
  </div>

  <div id="search-container">
    <?php if ($films) :  ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Kode Film</th>
            <th scope="col">Judul Film</th>
            <th scope="col">Jenis Film</th>
            <th scope="col">Tahun Rilis</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($films as $film) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td>
                <img src="img/<?= $film['gambar']; ?>" width="50">
              </td>
              <td><?= $film['kode']; ?></td>
              <td><?= $film['judul']; ?></td>
              <td><?= $film['jenis']; ?></td>
              <td><?= $film['tahun']; ?></td>
              <td>
                <a href="ubah.php?id=<?= $film["id"]; ?>"class="badge text-bg-warning">ubah</a> |
                <a href="hapus.php?id=<?= $film["id"]; ?>" class="badge text-bg-warning" onclick="return confirm('yakin?');">hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else : ?>
      <div class="row">
        <div class="col-md-6">
          <div class="alert alert-danger" role="alert">
            Film(s) not found!
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>


<?php require('partials/footer.php'); ?>