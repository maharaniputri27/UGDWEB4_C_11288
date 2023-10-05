<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        .rounded-circle:hover{
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .rounded-button a {
            font-weight: bold;
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 40px; 
            height: 40px; 
            border-radius: 60%; 
            background-color: grey; 
            border: none; 
            color: #fff;
            font-size: 24px; 
            line-height: 40px; 
            text-align: center;
            cursor: pointer;
            text-decoration:none;
        }
    </style>
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

<center>
<div class="card mb-3" style="max-width: 700px; margin-top: 130px; border: 2px solid #808080;">
  <div class="row g-0">
    <div class="col-md-4 d-flex align-items-center justify-content-center">
    <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; border: 2px solid #808080; ">
        <img src="{{ asset('images/Jamal5.jpeg') }}" class="img-fluid" alt="...">
    </div> 
    </div>
    <div class="col-md-8">
    <div class="card-body text-start" style="border-left: 1px solid #ccc">
            <h5 class="card-title">{{$nama}}</h5>
            <p class="card-text">anak FTI UAJY</p>
            <p class="card-text" style="margin: 0;"><strong>Alamat  : </strong>{{$alamat}}</p>
            <p class="card-text" style="margin: 0;"><strong>Email   : </strong>{{$email}}</p>
            <p class="card-text" style="margin: 0;"><strong>Telepon : </strong>{{$telepon}}</p>
            <p class="card-text"><strong>Hobi                       : </strong>{{$hobi}}</p>
        <div>
        <a href="{{'form'}}" class="btn btn-secondary">Data Mahasiswa</a>
         </div>
    </div>
    </div>
  </div>
</div>
</center>
    <div class="rounded-button">
        <a href="{{'profil1'}}">&rarr;</a>
    </div>
</body>
</html>