

     @extends('layouts.main')
     @section('container')
    
     <div class="container col-sm-12" style="position: static">
         {{-- <div class="container mt-5">
             <div class="row"> --}}
                 {{-- <div class="col-sm-4">
                     <h3>Packaging Information</h3>
                     <hr>
                     <!--<div class="fakeimg">Fake Image</div>-->
                     <ul class="nav nav-pills flex-column">
                         <li class="nav-item">
                             <a class="nav-link " href="/packaging">Guidance</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" href="/dangerous">Dangerous Goods</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="/prohibited">Prohibited</a>
                         </li>
                     </ul>
                 </div> --}}

                 {{-- <div class="col-sm-8"> --}}
                     <h2 id="dangerous">Dangerous Goods</h2>
                     <img class="p-3" src="dangerousGoods/class1.gif" alt="">
                     <h5>Dangerous Goods Class 1</h5>
                    
                     <ul class="pagination mt-5">
                         <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                         <li class="page-item active"><a class="page-link" href="#">1</a></li>
                         <li class="page-item "><a class="page-link" href="#">2</a></li>
                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                         <li class="page-item"><a class="page-link" href="#">Next</a></li>
                     </ul>
{{-- 
                 </div>
             </div>
         </div> --}}
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
