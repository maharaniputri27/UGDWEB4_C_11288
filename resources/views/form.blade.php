<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">UGDWEB_C_11288</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>

<div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
    <div class="bg-dark p-4">
        <h5 class="text-body-emphasis h4">Collapsed content</h5>
            <a href="{{ url('home') }}" class="text-body-secondary link-style">Home</a>
        <br>
        <br>
            <a href="{{ url('profil1') }}" class="text-body-secondary link-style">Profil</a>
        <br>
        <br>
            <a href="{{ url('form') }}" class="text-body-secondary link-style">Form</a>
  </div>
</div>
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card" style="width: 800px;">
    <h5 class="card-header" style="background-color: black; color: white;">Form Data Mahasiswa</h5>
      <div class="card-body">

        <div class="mb-3 row">
          <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNama" value="{{ $nama }}">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="inputNPM" class="col-sm-2 col-form-label">NPM</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNPM" value="{{ $npm }}">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail" value="{{ $email }}">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="inputFakultas" class="col-sm-2 col-form-label">Fakultas</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputFakultas" value="{{ $fakultas }}">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="inputJurusan" class="col-sm-2 col-form-label">Jurusan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputProdi" value="{{ $programStudi }}">
          </div>
        </div>
<div class="reset" style="margin-left: 700px;">
    <button class="btn btn-danger" onclick="hapus()">Reset</button>

</div>
      </div>
    </div>
  </div>

  <script>
    function hapus(){
      document.getElementById('inputNama').value = '';
      document.getElementById('inputNPM').value = '';
      document.getElementById('inputEmail').value = '';
      document.getElementById('inputFakultas').value = '';
      document.getElementById('inputProdi').value='';
    }
  </script>
</body>
</html>