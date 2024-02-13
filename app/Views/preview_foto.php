<?= $this->extend("template") ?>

<?= $this->section("title") ?>

<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="container text-center mt-6">
  <div class="row justify-content-center">
    <div class="col-5">
      <img class="card-img" src="<?= base_url('assets/foto/' . $foto->lokasi_file) ?>" alt="" style="border-radius: 23px;">
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <!-- Like button -->

          <!-- Comments section -->

          <div class="d-flex justify-content-start">
            <?= $foto->username ?> /  
            <?= date("d-M-Y", strtotime($foto->tanggal_unggah)) ?>
          </div>
          <div class="d-flex justify-content-end gap-2">
            <a href="<?= base_url('foto/'.$foto->foto_id.'/hapus') ?>" class="btn btn-sm"
                onclick="return confirm('Yakin hapus <?= $foto->foto_id ?> ?')">
                <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
              </a>
          </div>
          <div class="container text-start">
            <div class="d-flex justify-content-start">
              <div div class="comments mt-3 mb-4">
                <?php 
                  foreach ($komentar as $komentars): 
                ?>
                <div class="mb-2">
                  <img src="<?= base_url('assets/template/img/av.png') ?>" alt="Avatar" class="rounded-circle me-2"
                  style="width: 30px; height: 30px;">
                  <span class="fw-bold">
                    <?= $foto->username ?>
                  </span>
                  <?= $komentars->isi_komentar ?>
                </div>
                <?php 
                  endforeach; 
                ?>
              </div>
            </div>
          </div>
          
          
          <div class="d-flex justify-content-end gap-2">
            <div>
              <form action="<?= base_url('like/' . $foto->foto_id) ?>" method="post">
                <?php
                if ($like) {
                ?>
                  <?= $like ?>
                <?php
                }
                ?>
                <button style="border: none; background: white;" type="submit">
                  <?php
                  if ($isLiked) {
                  ?>
                    <i class="fa-solid fa-heart-o fa-lg text-danger" aria-hidden="true"></i>
                  <?php
                  } else {
                  ?>
                    <i class="fa-regular fa-heart-o fa-lg" aria-hidden="true"></i>
                  <?php
                  }
                  ?>
                </button>
              </form>
            </div>
          </div>

          <!-- Form untuk menambahkan komentar baru -->
          <form method="post" action="<?= base_url("proses_tambah_komentar") ?>" enctype="multipart/form-data" class="mt-3">
            <div class="input-group mb-3">
              <input type="hidden" name="id" class="form-control" value="<?= $foto->foto_id ?>" placeholder="Add a comment">
              <input type="text" name="isi_komentar" class="form-control" placeholder="Add a comment">
              <button type="submit" class="btn btn-dark" id="button-addon2">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?= $this->endSection() ?>