<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Pengaju</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link href="asset/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        /* Show it is fixed to the top */
        body {
        min-height: 75rem;
        padding-top: 4.5rem;
        }

        html,
        body {
        overflow-x: hidden; /* Prevent scroll on narrow devices */
        }

        body {
        padding-top: 56px;
        }

        @media (max-width: 767.98px) {
        .offcanvas-collapse {
            position: fixed;
            top: 56px; /* Height of navbar */
            bottom: 0;
            width: 100%;
            padding-right: 1rem;
            padding-left: 1rem;
            overflow-y: auto;
            background-color: var(--gray-dark);
            transition: -webkit-transform .3s ease-in-out;
            transition: transform .3s ease-in-out;
            transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }
        .offcanvas-collapse.open {
            -webkit-transform: translateX(-1rem);
            transform: translateX(-1rem); /* Account for horizontal padding on navbar */
        }
        }

        .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
        }

        .nav-scroller .nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        color: rgba(255, 255, 255, .75);
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
        }

        .nav-underline .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: .875rem;
        color: var(--secondary);
        }

        .nav-underline .nav-link:hover {
        color: var(--blue);
        }

        .nav-underline .active {
        font-weight: 500;
        color: var(--gray-dark);
        }

        .text-white-50 { color: rgba(255, 255, 255, .5); }

        .bg-purple { background-color: var(--purple); }

        .border-bottom { border-bottom: 1px solid #e5e5e5; }

        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

        .lh-100 { line-height: 1; }
        .lh-125 { line-height: 1.25; }
        .lh-150 { line-height: 1.5; }

    </style>
  </head>

  <body>
    <!-- Menu Navigasi -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Modulku Fintech</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Ajukan Peminjaman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show.php">Daftar Pengaju</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cek-blacklist.php">Cek Daftar Hitam</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
      <img class="mr-3" src="https://image.flaticon.com/icons/svg/1632/1632692.svg" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Cek Apakah Anda Termasuk ke Daftar Hitam</h6>
          <small>Data Terupdate : <?php echo date("l j F Y h:i:s A") ?></small>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Unggah Foto Anda disini</h6>
        <form action="phpQS.php" method="post" enctype="multipart/form-data">
            <div class="form-group mt-2">
              <input type="file" class="form-control-file" name="photo" placeholder="JPEG, JPG, PNG" aria-describedby="fileHelpId">
              <small id="fileHelpId" class="form-text text-muted">Ukuran Max : 2MB</small>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
      
    </main>

  </body>
</html>