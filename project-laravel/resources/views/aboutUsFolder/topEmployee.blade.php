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
                        <a class="nav-link " href="/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/topEmployee">Top Employee</a>
                    </li>
                </ul>
                <h3 class="mt-4">Some Links</h3>
                <hr>
                <div class="dropdown">
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

                <div class="dropdown">
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

                <div class="dropdown">
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
            <h2>Kevin Apul is the employee, have been working for 1 hour and he try his best. </h2>
    <img class="p-3" src="avul.jpeg" alt="">
    <p style="text-indent: 2em ; text-align: justify ; line-height: 1.5 em;">
        <span style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">
            The first time Kevin Apul joined GOpress Yogyakarta, he started his task of delivering and picking up
            packages. at that time even till now, nobody else then Rina, Nia and Kevin Apul know about GOpress delivery
            services
            so he needed to promote to potential customers by distributing flyers of taking the initiative to introduce
            GOpress services. Through social media to support their work. His persistance in pursuing the best result in
            his duties made his work
            performance always meet the target until he was gradually trusted to become the superman.
        </span>
    </p>
    <p style="text-indent: 2em ; text-align: justify ; line-height: 1.5 em;">
        <span style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">
            Kevin Apul tried his best because of his family that always waiting for his coming at home. Bring some food
            and even money, and leave happily with the family.
            He always wish that he could be a better husband for his wife and a better father for his children. and till
            this moment, he never give up on his job.
        </span>
    </p>
    <p style="font-size:11px;">Release time : 2022-07-24</p>
    <br>
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="/aboutUsFolder/topEmployee.html">1</a></li>
        <li class="page-item "><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
           </div>
        </div>
    </div>
</div>
    
@endsection
