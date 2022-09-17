@extends('layouts.main')
@section('container')
<h1 style="text-align: center;font-weight:500;letter-spacing: 7px;text-shadow: 2px -2px">Form Order</h1><br><br>
<div class="row g-5">
        <div class="col-md"><br>
                <h3 style="text-align:center;">Sender Information</h3><hr style="border: 2px solid ;">
                <form class="row g-3">
                        <div class="col-md-12">
                                <label for="inputNameSender" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputNameSender" >
                                <hr>
                        </div>
                        <div class="col-md-12">
                                <label for="inputEmailSender" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmailSender">
                                <hr>
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
                                <hr>
                        </div>
                        <div class="col-md-6">
                                <label for="inputPhoneSender" class="form-label">Handphone</label>
                                <input type="number" class="form-control" id="inputPhoneSender" placeholder="812 - 3243 - 2342">
                                <hr>
                        </div>
                        <div class="col-12">
                                <label for="inputAlamatSender" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="inputAlamatSender">
                                <hr>
                        </div>
                        <!-- tag form Memakai autocomplete, scriptnya js ada di bawah -->
                        <form autocomplete="off" action="/action_page.php">
                                <div class="col-md-12">
                                        <label for="myInput1" class="form-label">Provinsi, Kota</label>
                                        <input class="form-control" id="myInput" type="text" name="kota1">
                                        <hr>
                                </div>
                        </form>            
                                <div class="col-md-3">
                                        <hr>
                                        <label for="inputKodeposSender" class="form-label">Kode Pos</label>
                                        <input type="number" class="form-control" id="inputKodeposSender">
                        </div>
                </form><br>
        </div>

        <div class="col-md"><br>
                <h3 style="text-align:center;">Recipient Information</h3><hr style="border: 2px solid ;">
                <form class="row g-3">
                        <div class="col-md-12">
                                <label for="inputNameRecipient" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="inputNameRecipient">
                                <hr>
                        </div>
                                <div class="col-md-12">
                                <label for="inputEmailRecipient" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmailRecipient">
                                <hr>
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
                                <hr>
                        </div>
                        <div class="col-md-6">
                                <label for="inputPhoneRecipient" class="form-label">Handphone</label>
                                <input type="number" class="form-control" id="inputPhoneRecipient" placeholder="812 - 3243 - 2342">
                                <hr>
                        </div>
                        <div class="col-12">
                                <label for="inputAlamatRecipient" class="form-label">Alamat</label>
                                <input type="textarea" class="form-control" id="inputAlamatRecipient" >
                                <hr>
                        </div>
                        <!-- tag form Memakai autocomplete, scriptnya js ada di bawah -->
                        <form autocomplete="off" action="/action_page.php">
                                <div class="col-md-12">
                                        <label for="myInput2" class="form-label">Provinsi, Kota</label>
                                        <input class="form-control" id="myInput2" type="text" name="kota2">
                                        <hr>
                                </div>
                        </form>            
                        <div class="col-md-3">
                                <hr>
                                <label for="inputKodeposRecipient" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" id="inputKodeposRecipient">
                        </div>
                </form><br>
        </div>

        <div class="col-md"><br>
                <h3 style="text-align:center;">Package Information</h3><hr style="border: 2px solid ;">
                <form class="row g-3">
                        <div class="col-md-12">
                                <label for="inputItem" class="form-label">Nama Item</label>
                                <input type="text" class="form-control" id="inputItem">
                                <hr>
                        </div>
                        <div class="col-md-12">
                                <label for="inputNopaket" class="form-label">Nomor Paket</label>
                                <input type="number" class="form-control" id="inputNopaket">
                                <hr>
                        </div>
                        <div class="col-12">
                                <label for="inputNilaiBarang" class="form-label">Nilai Barang</label>
                                <input type="text" class="form-control" id="inputNilaiBarang">
                                <hr>
                        </div>
                        <div class="col-md-4">
                                <label for="inputTinggi" class="form-label">Tinggi</label>
                                <input type="number" class="form-control" id="inputTinggi">
                                <hr>
                        </div>            
                        <div class="col-md-4">
                                <label for="inputBerat" class="form-label">Berat</label>
                                <input type="number" class="form-control" id="inputBerat">
                                <hr>
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
                                <button onclick="myalert()" type="submit" class="btn">Deliver Now</button>
                                <script>
                                        function myalert(){
                                                alert("Apakah anda yakin data yang dimasukan sudah benar !!")
                                        }
                                </script>
<!-- Script untuk autocomplete -->
<!--Make sure the form has the autocomplete function switched off:-->
<!-- <form autocomplete="off" action="/action_page.php">
        <div class="col-md-12">
                <input class="form-control" id="myInput" type="text" name="myCountry" placeholder="Country">
        </div>
</form> -->

<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Aceh, Banda Aceh","Aceh, Langsa","Aceh, Lhokseumawe","Aceh, Sabang","Aceh, Subulussalam","Bali, Denpasar","Bangka Belitung, Pangkalpinang","Banten, Cilegon","Banten, Serang","Banten, Tangerang Selatan","Banten, Tangerang","Bengkulu, Bengkulu","DIY, Yogyakarta","Gorontalo, Gorontalo","Jakarta, Jakarta Barat","Jakarta, Jakarta Pusat","Jakarta, Jakarta Selatan","Jakarta, Jakarta Timur","Jakarta, Jakarta Utara","Jambi, Sungai Penuh","Jambi, Jambi","Jawa Barat, Bandung","Jawa Barat, Bekasi","Jawa Barat, Bogor","Jawa Barat, Cimahi","Jawa Barat, Cirebon","Jawa Barat, Depok","Jawa Barat, Sukabumi","Jawa Barat, Tasikmalaya","Jawa Barat, Banjar","Jawa Tengah, Magelang","Jawa Tengah, Pekalongan","Jawa Tengah, Salatiga","Jawa Tengah, Semarang","Jawa Tengah, Surakarta","Jawa Tengah, Tegal","Jawa Timur, Batu","Jawa Timur, Blitar","Jawa Timur, Kediri","Jawa Timur, Madiun","Jawa Timur, Malang","Jawa Timur, Mojokerto","Jawa Timur, Pasuruan","Jawa Timur, Probolinggo","Jawa Timur, Surabaya","Kalimantan Barat, Pontianak","Kalimantan Barat, Singkawang","Kalimantan Selatan, Banjarbaru","Kalimantan Selatan, Banjarmasin","Kalimantan Tengah, Palangka Raya","Kalimantan Timur, Balikpapan","Kalimantan Timur, Bontang","Kalimantan Timur, Samarinda","Kalimantan Utara, Tarakan","Kepulauan Riau, Batam","Kepulauan Riau, Tanjungpinang","Lampung, Bandar Lampung","Lampung, Metro","Maluku Utara, Ternate","Maluku Utara, Tidore Kepulauan","Maluku, Ambon","Maluku, Tual","Nusa Tenggara Barat, Bima","Nusa Tenggara Barat, Mataram","Nusa Tenggara Barat, Kupang","Papua Barat,Sorong","Papua, Jayapura","Riau, Dumai","Riau, Pekanbaru","Sulawesi Selatan, Makassar", 
"Sulawesi Selatan, Palopo","Sulawesi Selatan, Parepare","Sulawesi Tengah, Palu","Sulawesi Tenggara, Baubau","	Sulawesi Tenggara, Kendari","Sulawesi Utara, Bitung","Sulawesi Utara, Kotamobagu","Sulawesi Utara, Manado","Sulawesi Utara, Tomohon","Sumatra Barat, Bukittinggi","Sumatra Barat, Padang","Sumatra Barat, Padang Panjang","Sumatra Barat, Pariaman","Sumatra Barat, Payakumbuh","Sumatra Barat, Sawahlunto","Sumatra Barat, Solok","Sumatra Selatan, Lubuklinggau","Sumatra Selatan, Pagar Alam","Sumatra Selatan, Palembang","Sumatra Selatan, Prabumulih","Sumatra Utara, Binjai","Sumatra Utara, Gunungsitoli","Sumatra Utara, Medan","Sumatra Utara, Padangsidimpuan","Sumatra Utara, Pematangsiantar","Sumatra Utara, Sibolga","Sumatra Utara, Tanjungbalai","Sumatra Utara, Tebing Tinggi"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
autocomplete(document.getElementById("myInput2"), countries);
</script>

                        </div>
                </form><br>
        </div>
</div>

@endsection
