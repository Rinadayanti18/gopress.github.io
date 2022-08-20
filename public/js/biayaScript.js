function dicek() {

    let from_id_func = document.getElementById("from_id").value;
    let to_id_func = document.getElementById("to_id").value;
    let weight_id_func = document.getElementById("weight_id").value;
    let document_value = document.getElementById("form_hasil").value;

    if (from_id_func == "" && to_id_func == "" && weight_id_func == "") {
        alert("Data Masih Kosong")
    }

    if ((from_id_func == "" && to_id_func == "" && weight_id_func !== "")) {
        alert("Data Alamat Masih Kosong")
    }

    if (from_id_func == "" && to_id_func == !"") {
        alert("Alamat Asal Pengiriman Tidak Ditemukan")
    }

    if ((from_id_func !== "") && (to_id_func == "")) {
        alert("Alamat Tujuan Pengiriman Tidak Ditemukan")
    }

    if ((from_id_func !== "" && to_id_func !== "") && weight_id_func == "") {
        alert("Masukkan Berat")
    }

    if (((weight_id_func !== "") && ((weight_id_func <= 0) || (weight_id_func >= 51))) && (from_id_func !== "" && to_id_func !== "")) {
        alert("Minimal 1 Kg dan Maksimal 50 Kg")
    }

    if (from_id_func !== "" && to_id_func !== "" && weight_id_func !== "") {
        lower_from = from_id_func.toLowerCase();
        lower_to = to_id_func.toLowerCase();
        switch (lower_from) {
            //Pulau sumatra 1-10
            case "aceh":
            case "nad":
            case "nanggroe aceh darussalam":
            case "banda aceh":
                from_id_func = 1;
                break;

            case "medan":
            case "sumatera utara":
            case "sumatra utara":
                from_id_func = 2;
                break;

            case "pekanbaru":
            case "pekan baru":
            case "riau":
                from_id_func = 3;
                break;

            case "batam":
            case "tanjung pinang":
            case "kepulauan riau":
                from_id_func = 4;
                break;

            case "padang":
            case "sumatera barat":
            case "sumatra barat":
                from_id_func = 5;
                break;

            case "jambi":
                from_id_func = 6;
                break;

            case "bengkulu":
                from_id_func = 7;
                break;

            case "palembang":
            case "sumatera selatan":
            case "sumatra selatan":
                from_id_func = 8;
                break;

            case "bangka belitung":
            case "pangkal pinang":
            case "bangka":
                from_id_func = 9;
                break;

            case "lampung":
            case "bandar lampung":
                from_id_func = 10;
                break;

            //Pulau jawa 11-16
            case "banten":
            case "serang":
                from_id_func = 11;
                break;

            case "jakarta":
            case "dki jakarta":
                from_id_func = 12;
                break;

            case "jawa barat":
            case "bandung":
                from_id_func = 13;
                break;

            case "jawa tengah":
            case "semarang":
            case "solo":
                from_id_func = 14;
                break;

            case "yogyakarta":
            case "diy":
            case "di yogyakarta":
                from_id_func = 15;
                break;

            case "jawa timur":
            case "surabaya":
                from_id_func = 16;
                break;
            //Pulau kalimantan 17-21
            case "kalimantan timur":
            case "samarinda":
                from_id_func = 17;
                break;

            case "kalimantan barat":
            case "pontianak":
                from_id_func = 18;
                break;

            case "kalimantan tengah":
            case "palangkaraya":
                from_id_func = 19;
                break;

            case "kalimantan selatan":
            case "banjar baru":
                from_id_func = 20;
                break;

            case "kalimantan utara":
            case "tanjung selor":
                from_id_func = 21;
                break;


            default:
                from_id_func = 999;
        }

        switch (lower_to) {
            //Pulau sumatra 1-10
            case "aceh":
            case "nad":
            case "nanggroe aceh darussalam":
            case "banda aceh":
                to_id_func = 1;
                break;

            case "medan":
            case "sumatera utara":
            case "sumatra utara":
                to_id_func = 2;
                break;

            case "pekanbaru":
            case "pekan baru":
            case "riau":
                to_id_func = 3;
                break;

            case "batam":
            case "tanjung pinang":
            case "kepulauan riau":
                to_id_func = 4;
                break;

            case "padang":
            case "sumatera barat":
            case "sumatra barat":
                to_id_func = 5;
                break;

            case "jambi":
                to_id_func = 6;
                break;

            case "bengkulu":
                to_id_func = 7;
                break;

            case "palembang":
            case "sumatera selatan":
            case "sumatra selatan":
                to_id_func = 8;
                break;

            case "bangka belitung":
            case "pangkal pinang":
            case "bangka":
                to_id_func = 9;
                break;

            case "lampung":
            case "bandar lampung":
                to_id_func = 10;
                break;

            //Pulau jawa 11-16
            case "banten":
            case "serang":
                to_id_func = 11;
                break;

            case "jakarta":
            case "dki jakarta":
                to_id_func = 12;
                break;

            case "jawa barat":
            case "bandung":
                to_id_func = 13;
                break;

            case "jawa tengah":
            case "semarang":
            case "solo":
                to_id_func = 14;
                break;

            case "yogyakarta":
            case "diy":
            case "di yogyakarta":
            case "jogja":
                to_id_func = 15;
                break;

            case "jawa timur":
            case "surabaya":
                to_id_func = 16;
                break;
            //Pulau kalimantan 17-21    
            case "kalimantan timur":
            case "samarinda":
                to_id_func = 17;
                break;

            case "kalimantan barat":
            case "pontianak":
                to_id_func = 18;
                break;

            case "kalimantan tengah":
            case "palangkaraya":
                to_id_func = 19;
                break;

            case "kalimantan selatan":
            case "banjar baru":
                to_id_func = 20;
                break;

            case "kalimantan utara":
            case "tanjung selor":
                to_id_func = 21;
                break;


            default:
                to_id_func = 999;
        }

        if (((to_id_func >= 51) || (from_id_func >= 51)) || ((to_id_func >= 51) && (from_id_func >= 51))) {
            if (((to_id_func >= 51) && (from_id_func >= 51))) {
                alert("Input the correct province!");
                document.getElementById("from_id").value = "";
                document.getElementById("to_id").value = "";
            }

            else if (((to_id_func >= 51) || (from_id_func >= 51))) {
                if (to_id_func >= 51) {
                    alert("Input the correct province!");
                    document.getElementById("to_id").value = "";
                    document.getElementById("form_hasil").value = hasil_jarak;
                }
                else if (from_id_func >= 51) {
                    alert("Input the correct province!");
                    document.getElementById("from_id").value = "";
                    document.getElementById("form_hasil").value = hasil_jarak;
                }
            }

        }

        if (weight_id_func <= 50) {
            if (to_id_func <= 50 && from_id_func <= 50) {
                let hasil_jarak = Math.abs(to_id_func - from_id_func);
                if (to_id_func <= 10 && from_id_func <= 10) { //pengiriman barang antar sumatra	
                    if (hasil_jarak <= 1 && hasil_jarak >= 0) {
                        hasil_total = (((hasil_jarak * 18000) + (((hasil_jarak) / 10) * 150000)) * weight_id_func);
                        hasil_total1 = (((hasil_jarak * 20000) + (((hasil_jarak) / 10) * 205000)) * weight_id_func);
                    } else if (hasil_jarak >= 2 && hasil_jarak <= 4) {
                        hasil_total = (((hasil_jarak * 3000) + (((hasil_jarak) / 10) * 150000)) * weight_id_func);
                        hasil_total1 = (((hasil_jarak * 5000) + (((hasil_jarak) / 10) * 205000)) * weight_id_func);
                    } else if (hasil_jarak >= 5) {
                        hasil_total = (((hasil_jarak * 2000) + (((hasil_jarak) / 10) * 50000)) * weight_id_func);
                        hasil_total1 = (((hasil_jarak * 4000) + (((hasil_jarak) / 10) * 60000)) * weight_id_func);
                    }
                }
                else if ((to_id_func >= 11 && to_id_func <= 16) && from_id_func <= 10) { //pengiriman barang dari sumatra ke jawa
                    hasil_total = (((hasil_jarak * 1000) + (((hasil_jarak) / 5) * 10000)) * weight_id_func);
                    hasil_total1 = (((hasil_jarak * 1500) + (((hasil_jarak) / 5) * 15000)) * weight_id_func);
                }
                else if ((to_id_func >= 11 && to_id_func <= 16) && (from_id_func >= 11 && from_id_func <= 16)) {
                    hasil_total = ((hasil_jarak * 3000) + ((((hasil_jarak) / 5) * 30000) * weight_id_func));//pengiriman barang dari jawa ke jawa
                    hasil_total1 = ((hasil_jarak * 3500) + ((((hasil_jarak) / 5) * 35000) * weight_id_func));//pengiriman barang dari jawa ke jawa
                }
                else if (to_id_func <= 11 && (from_id_func >= 11 && from_id_func <= 16)) {
                    hasil_total = ((hasil_jarak * 1000) + ((((hasil_jarak) / 5) * 10000) * weight_id_func));// dari jawa ke sumatra
                    hasil_total1 = ((hasil_jarak * 1500) + ((((hasil_jarak) / 5) * 14000) * weight_id_func));// dari jawa ke sumatra
                }
                else if ((from_id_func <= 10) && (to_id_func >= 17 && to_id_func <= 21)) {
                    hasil_total = ((hasil_jarak * 1500) + ((((hasil_jarak) / 5) * 9500) * weight_id_func));// dari sumatra ke kalimantan
                    hasil_total1 = ((hasil_jarak * 2000) + ((((hasil_jarak) / 5) * 9900) * weight_id_func));// dari sumatra ke kalimantan
                }
                else if ((from_id_func >= 17 && from_id_func <= 21) && (to_id_func <= 10)) {
                    hasil_total = ((hasil_jarak * 1500) + ((((hasil_jarak) / 5) * 9500) * weight_id_func));// dari kalimantan ke sumatra
                    hasil_total1 = ((hasil_jarak * 2000) + ((((hasil_jarak) / 5) * 9900) * weight_id_func));// dari kalimantan ke sumatra
                }
                else if ((to_id_func >= 11 && to_id_func <= 16) && (from_id_func >= 17 && from_id_func <= 21)) {
                    hasil_total = ((hasil_jarak * 4000) + ((((hasil_jarak) / 5) * 21000) * weight_id_func));// dari kalimantan ke jawa
                    hasil_total1 = ((hasil_jarak * 4500) + ((((hasil_jarak) / 5) * 21400) * weight_id_func));// dari kalimantan ke jawa
                }
                else if ((to_id_func >= 17 && to_id_func <= 21) && (from_id_func >= 11 && from_id_func <= 16)) {
                    hasil_total = ((hasil_jarak * 4000) + ((((hasil_jarak) / 5) * 21000) * weight_id_func));// dari jawa ke kalimantan
                    hasil_total1 = ((hasil_jarak * 4500) + ((((hasil_jarak) / 5) * 21400) * weight_id_func));// dari jawa ke kalimantan
                }
            }

            document.getElementById("form_hasil").value = "Rp." + hasil_total;
            document.getElementById("form_hasil1").value = "Rp." + hasil_total1;
            document.getElementById("form_service").value = "EZ Gopress";
            document.getElementById("form_service1").value = "Same Day";
            document.getElementById("form_weight").value = weight_id_func;
            document.getElementById("form_weight1").value = weight_id_func;
            document.getElementById("form_fee").value = "Rp." + hasil_total;
            document.getElementById("form_fee1").value = "Rp." + hasil_total1;

        }
        if ((from_id_func && to_id_func && weight_id_func) !== "") {
            hasil_total = "";
        }


    }
}