@extends('layouts.main')
@section('container')
<h1 style="text-align: center;font-weight:500;letter-spacing: 7px;text-shadow: 2px -2px">Form Order</h1><br><br>
<div class="row g-5">
        <div class="col-md" style="background-color: #EEEEEE;"><br>
                <h3 style="text-align:center;">Sender Information</h3><hr>
                <form class="row g-3">
                        <div class="col-md-12">
                                <label for="inputNameSender" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputNameSender" >
                        </div>
                        <div class="col-md-12">
                                <label for="inputEmailSender" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmailSender">
                        </div>
                        <div class="col-md-3">
                                <label for="inputStateSender" class="form-label">No.</label>
                                <select id="inputStateSender" class="form-select">
                                        <option selected>+62</option>
                                        <option>+12</option>
                                        <option>+34</option>
                                        <option>+51</option>
                                        <option>+26</option>
                                </select>
                        </div>
                        <div class="col-md-6">
                                <label for="inputPhoneSender" class="form-label">Handphone</label>
                                <input type="number" class="form-control" id="inputPhoneSender" placeholder="812 - 3243 - 2342">
                        </div>
                                <div class="col-12">
                                <label for="inputAlamatSender" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="inputAlamatSender">
                        </div>
                                <div class="col-md-6">
                                <label for="inputKotaSender" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="inputKotaSender">
                        </div>            
                                <div class="col-md-3">
                                <label for="inputKodeposSender" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" id="inputKodeposSender">
                        </div>
                </form><br>
        </div>

        <div class="col-md" style="background-color: #CFD2CF;"><br>
                <h3 style="text-align:center;">Recipient Information</h3><hr>
                <form class="row g-3">
                        <div class="col-md-12">
                                <label for="inputNameRecipient" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputNameRecipient">
                        </div>
                                <div class="col-md-12">
                                <label for="inputEmailRecipient" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmailRecipient">
                        </div>
                        <div class="col-md-3">
                                <label for="inputStateRecipient" class="form-label">No.</label>
                                <select id="inputStateRecipient" class="form-select">
                                        <option selected>+62</option>
                                        <option>+12</option>
                                        <option>+34</option>
                                        <option>+51</option>
                                        <option>+26</option>
                                </select>
                        </div>
                        <div class="col-md-6">
                                <label for="inputPhoneRecipient" class="form-label">Handphone</label>
                                <input type="number" class="form-control" id="inputPhoneRecipient" placeholder="812 - 3243 - 2342">
                        </div>
                        <div class="col-12">
                                <label for="inputAlamatRecipient" class="form-label">Alamat</label>
                                <input type="textarea" class="form-control" id="inputAlamatRecipient" >
                        </div>
                        <div class="col-md-6">
                                <label for="inputKotaRecipient" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="inputKotaRecipient">
                        </div>            
                        <div class="col-md-3">
                                <label for="inputKodeposRecipient" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" id="inputKodeposRecipient">
                        </div>
                </form><br>
        </div>

        <div class="col-md" style="background-color: #EEEEEE;"><br>
                <h3 style="text-align:center;">Package Information</h3><hr>
                <form class="row g-3">
                        <div class="col-md-12">
                                <label for="inputItem" class="form-label">Nama Item</label>
                                <input type="text" class="form-control" id="inputItem">
                        </div>
                        <div class="col-md-12">
                                <label for="inputNopaket" class="form-label">Nomor Paket</label>
                                <input type="number" class="form-control" id="inputNopaket">
                        </div>
                        <div class="col-12">
                                <label for="inputNilaiBarang" class="form-label">Nilai Barang</label>
                                <input type="text" class="form-control" id="inputNilaiBarang">
                        </div>
                        <div class="col-md-4">
                                <label for="inputTinggi" class="form-label">Tinggi</label>
                                <input type="number" class="form-control" id="inputTinggi">
                        </div>            
                        <div class="col-md-4">
                                <label for="inputBerat" class="form-label">Berat</label>
                                <input type="number" class="form-control" id="inputBerat">
                        </div>
                        <div class="col-12">
                                <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                                <a href="/FAQ" style="text-decoration:none;color:black;color:hover:red;">Ikuti Aturan Kami?</a>
                                        </label>
                                </div>
                        </div>
                        <div class="col-12">
                                <button onclick="myalert()" type="submit" class="btn btn-warning">Deliver Now</button>
                                <script>
                                        function myalert(){
                                                alert("Apakah anda yakin data yang dimasukan sudah benar !!")
                                        }
                                </script>
                        </div>
                </form><br>
        </div>
</div>

@endsection
