@extends('layouts.main')

@section('container')
    <div class="box_inputdata mt-4">
        <div class="coba">

            <div class="d-flex mb-3 input_data" style="table-layout: fixed">
                <div class="p-2 flex-fill ">
                    <input type="text" id="from_id" name="from_id" placeholder="From"><br>
                </div>
                <div class="p-2 flex-fill ">
                    <input type="text" id="to_id" name="to_id" placeholder="To"><br>
                </div>
                <div class="p-2 flex-fill ">
                    <input type="text" id="weight_id" name="weight_id" placeholder="Weight"><br>
                </div>
                <div class="p-2 flex-fill">
                    <img src="img/plus.png" alt="plus_button" width="25" height="25" onClick="tambah()">
                    <img src="img/minus.png" alt="minus_button" width="25" height="25" onClick="mines()"><br><br>
                </div>
              </div>

            <div class=" bj_cont_box" >
                <table class="bj_table" cellpadding="0" cellspacing="0" style="visibility: initial;">
                    <thead >
                        <tr >
                            <th style="position: static">Service Type</th>
                            <th style="position: static">Weight</th>
                            <th style="position: static">Shipping Rates</th>
                            <th style="position: static">Insurance</th>
                            <th style="position: static">Total Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" nama="bb" disabled id="form_service">
                            </td>
                            <td>
                                <input type="text" nama="bb" disabled id="form_weight">
                            </td>
                            <td>
                                <input type="text" nama="bb" disabled id="form_hasil">
                            <td>
                                IDR
                            </td>
                            <td class="col_them">
                                <input type="text" nama="bb" disabled id="form_fee">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" nama="bb" disabled id="form_service1">
                            </td>
                            <td>
                                <input type="text" nama="bb" disabled id="form_weight1">
                            </td>
                            <td>
                                <input type="text" nama="bb" disabled id="form_hasil1">
                            </td>
                            <td>
                                IDR
                            </td>
                            <td class="col_them">
                                <input type="text" nama="bb" disabled id="form_fee1">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <button class="btn" onClick="dicek()">Cari!</button>

            </div>
        </div>
    </div>
        <script src="js/bergerak.js"></script>
        <script src="js/biayaScript.js"></script>
        <script src="js/buttonss.js"></script>
    @endsection
