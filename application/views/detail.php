<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet" type="text/css">
  <title>Toko Online</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Toko Online</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Baru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bekas</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="judul my-4" style="display: flex;justify-content: center;">
    <h1>Silahkan Membeli Barang</h1>
  </div>

  <div class="container">
    <div class="row" style="justify-content: center;">
      <?php foreach ($barang as $brg) : ?>
        <div class="card mr-3 mb-3" style="width: 18rem;">
          <img src="<?= base_url() . 'uploads/' . $brg->gambar ?>" class="card-img-top" alt="..." style="height: 16rem  ;">
          <div class="card-body">
            <h5 class="card-title mb-1"><?= $brg->nama_brg ?></h5>
            <small><?= $brg->keterangan ?> </small><br>
            <span class="badge badge-success mb-2">Rp.<?= $brg->harga ?></span>
            <br>
            <a href="<?= 'https://wa.me/', $brg->telepon ?>">
              <div class="btn btn-primary btn-sm">Hubungi Penjual</div>
            </a>
            <a href="getDataID/<?= $brg->id_brg ?>" class="btn btn-success btn-sm btn-detail" data-toggle="modal" data-target="#exampleModal">Detail</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body detail">
            <div class="nama-barang">
              <p class="font-weight-bold">Nama Barang : </p>
              <p class="nama"> </p>
            </div>
            <div class="deskripsi-barang">
              <p class="font-weight-bold">Deskripsi Barang</p>
              <p class="deskripsi"></p>
            </div>
            <div class="harga-barang">
              <p class="font-weight-bold">Harga Barang</p>
              <p class="harga"></p>
            </div>
            <div class="gambar-barang">
              <img src="" alt="" srcset="" style="width: 100%;">
            </div>
          </div>
          <div class="modal-footer">
            <a href="<?= 'https://wa.me/', $brg->telepon ?>">
              <div class="btn btn-primary btn-sm">Hubungi Penjual</div>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    $('.btn-detail').click(function(e) {
      e.preventDefault();

      let url = '<?php echo base_url() ?>Dashboard/' + $(this).attr("href")
      fetch(url)
        .then(res => res.json())
        .then(rs => {
          console.log(rs)
          $('.nama-barang .nama').text(rs.nama_brg);
          $('.deskripsi-barang .deskripsi').text(rs.keterangan);
          $('.harga-barang .harga').text(rs.harga);
          $(".gambar-barang img").attr("src", '<?= base_url() ?>uploads/' + rs.gambar);
        })


    })
  </script>
</body>

</html>