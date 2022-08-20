 @extends('layouts.main')
@section('container')
    

    
<div class="container col-sm-9" >
    <div class="container mt-5" style="position: static">
        <div class="row">
            <div class="col-sm-4">
                <h3>GO Express</h3>
                <hr>
                <!--<div class="fakeimg">Fake Image</div>-->
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/topEmployee">Top Employee</a>
                    </li>
                </ul>
                <h3 class="mt-4">Some Links</h3>
                <hr>
                <div class="dropdown" style="position: static">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        2022
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Januari</a></li>
                        <li><a class="dropdown-item" href="#">Februari</a></li>
                        <li><a class="dropdown-item" href="#">Maret</a></li>
                        <li><a class="dropdown-item" href="#">April</a></li>
                        <li><a class="dropdown-item" href="#">Mei</a></li>
                        <li><a class="dropdown-item" href="#">Juni</a></li>
                        <li><a class="dropdown-item" href="/aboutUsFolder/news2022/july2022.html">Juli</a></li>
                        <li><a class="dropdown-item" href="#">Agustus</a></li>
                        <li><a class="dropdown-item" href="#">September</a></li>
                        <li><a class="dropdown-item" href="#">Oktober</a></li>
                        <li><a class="dropdown-item" href="#">November</a></li>
                        <li><a class="dropdown-item" href="#">Desember</a></li>

                    </ul>
                </div> <br>

                <div class="dropdown" style="position: static">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        2021
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Januari</a></li>
                        <li><a class="dropdown-item" href="#">Februari</a></li>
                        <li><a class="dropdown-item" href="#">Maret</a></li>
                        <li><a class="dropdown-item" href="#">April</a></li>
                        <li><a class="dropdown-item" href="#">Mei</a></li>
                        <li><a class="dropdown-item" href="#">Juni</a></li>
                        <li><a class="dropdown-item" href="#">Juli</a></li>
                        <li><a class="dropdown-item" href="#">Agustus</a></li>
                        <li><a class="dropdown-item" href="#">September</a></li>
                        <li><a class="dropdown-item" href="#">Oktober</a></li>
                        <li><a class="dropdown-item" href="#">November</a></li>
                        <li><a class="dropdown-item" href="#">Desember</a></li>

                    </ul>
                </div> <br>

                <div class="dropdown" >
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        2020
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Januari</a></li>
                        <li><a class="dropdown-item" href="#">Februari</a></li>
                        <li><a class="dropdown-item" href="#">Maret</a></li>
                        <li><a class="dropdown-item" href="#">April</a></li>
                        <li><a class="dropdown-item" href="#">Mei</a></li>
                        <li><a class="dropdown-item" href="#">Juni</a></li>
                        <li><a class="dropdown-item" href="#">Juli</a></li>
                        <li><a class="dropdown-item" href="#">Agustus</a></li>
                        <li><a class="dropdown-item" href="#">September</a></li>
                        <li><a class="dropdown-item" href="#">Oktober</a></li>
                        <li><a class="dropdown-item" href="#">November</a></li>
                        <li><a class="dropdown-item" href="#">Desember</a></li>

                    </ul>
                </div>

            </div>
           <div class="col-sm-8" style="position: static">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
              <div class="carousel-inner">
                <div class="carousel-item active" href="0">
                  <img src="discount.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
           </div>
        </div>
    </div>
</div>
    
@endsection
