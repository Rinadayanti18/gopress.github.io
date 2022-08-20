@extends('layouts.main')
@section('container')

    <div class="container mt-5 col-sm-9">
        <div class="row">
            <div class="col-sm-6">
                <img class="p-2" src="/service1.png " alt="">
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-6">
                <h2>EZ GOpress</h2>
                <p>With this service, your package will be sent with estimated time of arrival 2-3 Days. </p>
                <p>You can send your package to all over Indonesia. </p>
                <button style=color:#10002b ;>Send It Here</button>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Same Day</h2>
                    <p>Application-based delivery service that makes it easy to send your package. Enjoy the Sameday
                        GOpress service with the following advantages. </p>
                    <p>
                    <ul>
                        <li>Same day delivey in and out of town</li>
                        <li>Flat rate up to 5kg</li>
                        <li>Flexible pick-up and delivery times</li>
                        <li>Reaching Java, Bali, Sulawesi and Sumatera</li>
                        <li>Postage back if delivery is late</li>
                        <li>Free shipping insurance up to IDR 1.000.000,-</li>
                    </ul>
                    </p>
                    <button>Send It Here</button>
                </div>
                <div class="col-sm-6">
                    <img class="p-2" src="/same day.png" alt="">
                    <hr class="d-sm-none">
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <img class="p-2" src="/instant shipping.png" alt="">
                    <hr class="d-sm-none">
                </div>
                <div class="col-sm-6">
                    <h2>Instant Shipping</h2>
                    <p>Instant GOpress Delivery Service is here to help your delivery process reach your destination
                        more quickly, especially in the city with affordable postage rates.
                    </p>
                    <p>With the Instant GOpress delivery service, you can send packages to all cities in the Paxel
                        coverage area with a faster estimated delivery time of only 2 Hours (T&C Applicable).

                    </p>
                    <button>Send It Here</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection
