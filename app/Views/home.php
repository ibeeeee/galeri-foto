<?= $this->extend("template") ?>

<?= $this->section("title")?>

<?= $this->endSection() ?>

<?= $this->section("content")?>
<main role="main">    
        <section class="mt-4 mb-5">
        <div class="container mb-4">
          <h1 class="font-weight-bold title">Explore</h1>
          <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-white pl-2 pr-2">
            <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExplore" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExplore">
              <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#">Lifestyle</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Food</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Travel</a>
                </li>
              </ul>
            </div>
            </nav>
          </div>
        </div>

        <div class="container-fluid">
            <div class="row">
              <div class="card-columns">
                <?php
                foreach($rows as $row):
                ?>
                <div class="card card-pin">
                <a href="<?= base_url('foto/'.$row->foto_id.'/preview') ?>">
                  <img class="card-img" src="<?= base_url("assets/foto/".$row->lokasi_file)?>" alt="Card image">
                  <div class="overlay">
                    <h2 class="card-title title"><?= $row->judul_foto ?></h2>
                  </div>
                </a>
                </div>
                <?php
                endforeach
                ?>
              </div>
            </div>
          </div>
    </section>
</main>
<?= $this->endSection() ?>