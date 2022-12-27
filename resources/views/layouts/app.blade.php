<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor PPATQ RAUDLATUL FALAH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        .header{
            padding:20px;
        }
        .header > .detail{
            padding-top:30px;
        }
        nav{
            background:#2dcc70;
        }
        body{
            background:url("{{ URL::to('/') }}/images/background.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment:fixed;
        }
    </style>
</head>
<body>
    <div class="container bg-white">
        <div class="row header">
            <div class="col-md-2">
                <img src="{{ URL::to('/') }}/logo.png" width="100%"/>
            </div>
            <div class="col-md-10 detail">
                <h1>PPATQ RAUDLATUL FALAH </h1>
                <p>PONDOK PESANTREN ANAK-ANAK TAHFIDZUL QUR'AN RAUDLATUL FALAH – PATI</p>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" >
            <div class="container-fluid" style="background:#2dcc70;color:#fff">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white  active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white  active" aria-current="page" href="{{url('/sambung')}}">Sambung Rasa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white  active" aria-current="page" href="{{url('/pembayaran')}}">Layanan Pembayaran</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('login')}}">Login</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <br />
        <div class="card col-md-12">
            @yield('content')
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
