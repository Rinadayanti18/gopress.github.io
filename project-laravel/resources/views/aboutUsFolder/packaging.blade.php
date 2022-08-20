@extends('layouts.main')
@section('container')
      <div class="container col-sm-9 mt-4" style="position: static">
        
              <h2 id="guidance">Guidance</h2>
              <div class="accordion p-3" id="accordionExample">
                
                <div class="accordion-item" > <!--Guidance1-->
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      How to attach shipping label
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  
                  <div class="accordion-body">
                   <p>If the sender attaches a shipping label from e-commerce platfrorm, Make sure is attached to a flat surface, not folded and not bubbling</p></div>
                 </div>
                </div>

                <div class="accordion-item"> <!--Guidance2-->
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How to attach the duck tape
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>The box needs to be sealed by duct tape. Make a "#" form with the tape and make sure the duct tape is sealed tightly and not bubling. </p> 
                    </div>
                  </div>
                </div>

                <div class="accordion-item"> <!--Guidance3-->
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How to pack large and long goods
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>Every goods must have an outer packaging or commercial packaging.</p>
                    <p>First, cover goods by using bubble wrap, use at least three to five layers of bubble wrap depends on the fragility of the package, then sealed the box by using duct tape tightly to avoid shocks that can cause damages. </p>
                  </div>
                  </div>
                </div>

                <div class="accordion-item"> <!--Guidance4-->
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      How to pack liquids and fragile goods
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>Make sure the goods are packed by using cardboard box, Cover the goods by using bubble wrap,use at least three to five layers of bubble wrap depends on the fragility of the package.</p> 
                  <p>Use PE foam on each side of the box for a shock absorber, and make sure the size of the goods is appropriate with the box. </p>  
                  </div>
                  </div>
                </div>

                <div class="accordion-item"> <!--Guidance5-->
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      How to pack electronic goods
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <p>Every goods must have an outer packaging or commercial packaging.</p>
                    <p>First, cover goods by using bubble wrap, then use PE foam on each side of the box for a shoc absorber. Also make sure the size of the goods is appropriate with the box. </p>  
                    </div>
                  </div>
                </div>
               
                
              </div> <br><br><br><br>
              

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