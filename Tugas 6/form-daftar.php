<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran Siswa Baru | SMAN 61 Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark"">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SMAN 61 Jakarta</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-end">
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul
              class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
              style="--bs-scroll-height: 100px"
            >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://id.wikipedia.org/wiki/SMA_Negeri_61_Jakarta">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://maps.app.goo.gl/AqHU6HgzafRfT15c7">Lokasi</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </div>
    </nav>

<section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-10 m-auto">
                    <div class="card border-0 shadow">
                        <div for="validation" class="card-body">

                            <h4 class="text-center">Halo Calon NASA!</h4>
                            <h5 class="text-center">Silahkan Isi Formulir Di Bawah Ini</h5>
                            
                            <br>

                            <form for="validation" action="proses-pendaftaran.php" method="POST">
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                                    <input type="text" name = "nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Nama Lengkap" required>
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
                                    <input type="text" name = "alamat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Alamat" required>
                                </div>

                                <div class="input-group">
                                <div class="input-group-text">
                                    <input type="radio" value="laki-laki" name="jenis_kelamin" aria-label="Radio button for following text input" >
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Laki-Laki">
                                </div>

                                <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <input type="radio" value="perempuan" name="jenis_kelamin" aria-label="Radio button for following text input" >
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Perempuan">
                                </div>

                                <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Agama</label>
                                <select class="form-select" id="inputGroupSelect01" name="agama">
                                    <option selected>Pilih...</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                                </div>

                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Sekolah Asal</span>
                                    <input type="text" name = "sekolah_asal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Asal SMP" required>
                                  </div>

                                  <div class="text-center">
                                    <button class="btn btn-success" name="daftar">Daftar</button>
                                    <a href="index.php" class="btn btn-primary">Beranda</a>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    </body>
</html>
