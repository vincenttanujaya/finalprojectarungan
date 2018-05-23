<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Arungan | Login</title>
  </head>
  <body>
    <div class="text-center">
  		<img src="img/logoarungan.png" class="rounded" alt="logo" width="27%">
	</div>
	<div class="text-center">
		<a href=""></a>
	</div><!--
	<div class="text-center">
		<div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
  			<a href="#" class="btn btn-outline-primary"> Mahasiswa</a>
  			<a href="#" class="btn btn-outline-primary"> Penyedia</a>
		</div>
	</div> -->
	<form>
		<div class="container" id="loginstuff">
      <div class="row">
          <select class="form-control mx-auto">
            <option>Mahasiswa</option>
            <option>Penyedia</option>
          </select>
        </div>
      <div class="row my-3">
        <input type="username" class="form-control mx-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
      </div>
      <div class="row my-3">
        <input type="password" class="form-control mx-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
      </div>
    </div>
  	</form>

    <div class="text-center my-3">
    <button type="submit" class="btn btn-primary btn-lg" data-toggle="button" aria-pressed="false" autocomplete="off">
      Login
    </button>
  </div>

  <div class="text-center">
    <button type="button" id="btdaftar" class="btn btn-dark" data-toggle="modal" data-target="#formdaftar">
    Buat akun sekarang!
    </button>
  </div>

  <div class="modal fade" id="formdaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Ayo Daftar</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul class="nav nav-tabs " role="tablist">
              <li class="nav-item mx-1">
                <a class="btn btn-primary" href="#mahasiswa" role="tab" data-toggle="tab">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-primary" href="#buzz" role="tab" data-toggle="tab">Penyedia</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane" id="mahasiswa">
                <form method="POST" action="registrasi">
                  {{ csrf_field() }}
                  <div class="form-group" id="apa">
                    <input type="text" class="form-control" name="namadepanmhs" placeholder="Nama Depan">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="namabelakangmhs" placeholder="Nama Belakang">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="emailmahasiswa" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="hpmahasiswa" placeholder="No. HP">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="usernamemahasiswa" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="passwordmahasiswa" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="date" class="form-control" name="tanggallahirmahasiswa" placeholder="Tanggal Lahir">
                    <small>Tanggal Lahir</small>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="iduniv">
                      <option value="">Pilih univ kamu ...</option>
                      @foreach($univ as $univ)
                        <option value="{{$univ->id_universitas}}">{{$univ->nama_universitas}}</option>
                      @endforeach
                    </select>
                  </div>
                  <button type="submit" name="kirim" class="btn btn-primary">Register</button>
                </form>

              </div>
              <div role="tabpanel" class="tab-pane fade" id="buzz">
                <form method="POST" action="registrasipenyedia">
                  {{ csrf_field() }}
                  <div class="form-group" id="apa">
                    <input type="text" class="form-control" name="namadepanp" placeholder="Nama Depan">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="namabelakangp" placeholder="Nama Belakang">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="emailp" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="hpp" placeholder="No. HP">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="usernamep" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="passwordp" placeholder="Password">
                  </div>
                  <button type="submit" name="kirimpenyedia" class="btn btn-primary">Register</button>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
