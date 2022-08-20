@extends('layouts.main')

@section('container')
   
                <div class="gzcx_box" class="gzcx_info_form pos_r">
                    <div class="bill_inp">
                        <input type="text" id="billcode_list"
                            oninput="if (!window.__cfRLUnblockHandlers) return false; inputbill(value)"
                            placeholder=" Please enter your waybill number. Available up to 10 waybills.">
                    </div>
                </div>
            
            <!--/#portfolio-item-->
            <!-- CONTENT FORM TRACK -->

            <div class="title-content3">
                <div class="theTittle">Search</div>
            </div>
            <!-- CONTENT 3 -->
            <div class="content3">
                <div class="wrapper-content3">
                    <img class="image-content3" src="img/aesthetic-purple.gif">
                    <!-- <div class="content3-order">Order</div>
                             <div class="content3-track"></div>
                             <div class="content3-service"></div>
                             <div class="content3-about"></div> -->
                </div>
            </div>

        </main>
    </div>
@endsection
