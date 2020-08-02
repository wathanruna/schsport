<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
     <title>Jadwan Olahraga</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>     
    <body>
<!-- nav -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SchSport</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- jumbotron -->
<div class="container">
  <div class="jumbotron"  style="margin-top:70px; color:white; background-image:url('https://football-tribe.com/indonesia/wp-content/uploads/sites/10/2018/02/11-mcmanaman-1200.jpg')">
    <h1>Jadwal Turnamen</h1>
    <p>Temukan semua jadwal Olahraga yang kamu inginkan
        dengan mudah dan lengkap dari semua pertandingan dunia.</p>
  </div>
</div>



    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="container">
                    @foreach ($keview as $keview )
                        <h1>{{$keview->name}}</h1>
                        
                        <img src="{{$keview->gambar}}" width="60%">
                        <p>{{$keview->deskripsi}}</p>
                        <h4>{{$keview->tempat}}</h4>
                        <h3>Waktu: {{$keview->jadwal}}</h3>
                        <br>
                        <hr>
                        @endforeach
                    
                </div>
            </div>
            <div class="col-md-3">
                    <div class="card border-black mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-black"><h2 class="text-black">Kategori</h2></div>
                            <hr>
                        <div class="card-body text-black">
                             <p>Bola besar</p>
                             <p>Bola kecil</p>
                             <p>Atletik</p>
                            </div>
						</div>
                        <div class="card-header bg-transparent border-black"><h2 class="text-black">Artikel</h2></div>
                            <hr>
                        <div class="card-body text-black">
                                <h4 class="card-title"><a href="https://www.bola.com/tag/bolacom?type=text&page=2">Bola.com</a></h4>
                                <h4 class="card-title"><a href="https://www.kompasiana.com/tag/sepakbola">Kompasiana</a></h4>
                                
                            </div>
						</div>
					</div>
            </div>
        </div>

    </div>
        <!-- Conten -->
        

</body>
</html>
