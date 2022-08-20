@extends('layouts.main')
@section('container')
      <div class=" col-sm-12 mt-4" >
              <h2 id="prohibited">Prohibited</h2>

              <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" style="position: static">

  <!-- Indicators/dots -->
  <div class="carousel-indicators" >
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="prohibitedGoods/firearms.png" alt="Firearms" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="prohibitedGoods/explosives.png" alt="Explosive Materials" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="prohibitedGoods/flammable.png" alt="Flammable Materials" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="prohibitedGoods/drugs.png" alt="Drugs" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="prohibitedGoods/chemical.png" alt="Chemical " class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="prohibitedGoods/radioactive.png" alt="Radioactive Materials" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="prohibitedGoods/organs.png" alt="Organs" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="prohibitedGoods/lawProhibit.png" alt="Prohibited Law Materials" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="prohibitedGoods/innapropriate.png" alt="Innapropriate Packing Materials" class="d-block w-100">
    </div>
    
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
      </div>

      @endsection
      
      
    
<!--
  <div>
    <div class="row">
                  <div class="col-sm-6">
                    <div class="fakeimg">Fakeimage</div>
                    <p>some text....</p>
                  </div>
                  <div class="col-sm-6">
                    <div class="fakeimg">Fakeimage</div>
                    <p>some text....</p>
                </div>
                </div>
  </div>
-->