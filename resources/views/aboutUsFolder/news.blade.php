@extends('layouts.main')
@section('container')
    

    
<div class="container col-sm-9" style="position: static">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h3>GO Express</h3>
                <hr>
                <!--<div class="fakeimg">Fake Image</div>-->
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/event">Event</a>
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

                <div class="dropdown" style="position: static">
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
           <div class="col-sm-8">
            <h2>Newcomer GOpress Shipping App</h2>
    <!--<h5>Title description, Dec 7, 2020</h5>-->
    <img class="margin-left" src="/newComer.png" alt="">
    <p>Release time : 23 July 2022</p>
    <p>Newcomer GOpress shipping App is here to make you easier to send your package. Try and enjoy it
        now !!!</p>
           </div>
        </div>
    </div>
</div>
    
@endsection
