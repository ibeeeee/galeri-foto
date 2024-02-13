		<div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-5 bg-white shadow box-area">
               <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #0000;">
                   <div class="featured-image mb-3">
				   <div class="col-5">
					<img class="card-img" src="<?= base_url('assets/foto/' . $foto->lokasi_file) ?>" alt=""
						style="border-radius: 23px;">
					</div>
                   </div>
               </div>
               <div class="col-md-6 right-box">               
                  <div class="row align-items-center">
				  <div class="col-4">
						<!-- Like button -->

						<!-- Comments section -->
						
						<div class="d-flex justify-content-end gap-2">
							<a href="<?= base_url('foto/'.$foto->foto_id.'/hapus') ?>" class="btn btn-sm"
								onclick="return confirm('Yakin hapus <?= $foto->foto_id ?> ?')">
								<i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
							</a>
						</div>
						<div div class="comments mt-3 mb-4">
						<?php 
							foreach ($komentar as $komentars): 
						?>
							<ul class="list-group">
							<!-- Komentar pertama -->
							<li class="list-group-item"><?= $komentars->isi_komentar ?></li>
							<!-- Dan seterusnya -->
							</ul>
						<?php 
							endforeach; 
						?>
						</div>
						<div class="d-flex justify-content-end gap-2">
							<div>
							
							<a class="btn btn-sm">
							<i class="fa-regular fa-heart-o fa-lg" aria-hidden="true"></i>
							</a>
							</div>
						</div>
						<!-- Form untuk menambahkan komentar baru -->
						<form method="post" action="<?= base_url("proses_tambah_komentar")?>" enctype="multipart/form-data" class="mt-3">
							<div class="form-group">
							<input type="hidden" name="id" class="form-control" value="<?= $foto->foto_id ?>" placeholder="Add a comment">
							<input type="text" name="isi_komentar" class="form-control" placeholder="Add a comment">
							</div>
							<div class="d-flex justify-content-end">
							<button type="submit" class="btn btn">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
							</button>
							</div>
						</form>
					</div>
                  </div>
               </div> 
            </div>
        </div>