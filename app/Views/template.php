<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galery</title>
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>	
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/bootstrap/upload.css') ?> " rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/template/css/app.css') ?> " rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/template/css/theme.css') ?> " rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href="<?= base_url() ?>"> <img src="<?= base_url("assets/foto/kamera.png") ?>" width="50px"> </a>
      <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
      <ul class="navbar-nav mr-auto align-items-center">
      <form action="<?= base_url()?>" method="get">
					<div class="input-group">
							<input type="text" class="p-2" name="judul_foto" style="border: 1px solid #eeeeee;" placeholder="Search...." name="keyword">
							<button class="btn btn-primary" type="submit">
								<i class="fa fa-search"></i>
							</button>
					</div>
			</form>
      </ul>
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item">
          <a href="<?= base_url()?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('tambah_foto')?>" class="nav-link">Upload</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('data_foto')?>" class="nav-link">Your Photos</a>
        </li>
        <li class="text-end">
          <a href="<?= base_url('logout')?>" class="nav-link">LogOut</a>
        </li>
      </ul>
    </div>
  </nav>
 
	<?= $this->renderSection("content") ?>

	<script type="text/javascript" src="<?= base_url('assets/template/js/app.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/template/js/theme.js') ?>"></script>
    
  <footer class="footer pt-5 pb-5 text-center">     
        <p>©  
          <span class="credits font-weight-bold">        
            <a target="_blank" class="text-dark"><u>By : Ilham Badar</u></a>
          </span>
        </p> 
    </div>
  </footer>    
</body>
</html>
