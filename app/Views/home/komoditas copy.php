<body>
    <div class="container">
        <p><br /></p>
        <form name="cart">
            <table id="example" name="cart" class="table display nowrap table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>
                            <select class="form-control">
                                <option>Pilih Jenis Tanaman</option>
                                <option>Cabe</option>
                                <option>Padi</option>
                                <option>Timun</option>
                                <option>Jagung</option>
                                <option>Kedelai</option>
                                <option>Terong</option>
                                <option>Timun</option>
                                <option>Tomat</option>
                                <option>Kentang</option>
                                <option>Sawi</option>
                                <option>Bawang</option>
                                <option>Tomat</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>Masukkan Luas Lahan</th>
                        <th><input type="text" class="form-control form-control-sm" /></th>
                    </tr>
                    <tr class="table-success">
                        <th></th>
                        <th>NAMA</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>

                    <tr name="line_items">
                        <td><button name="remove" class="btn btn-danger btn-sm">X</button></td>
                        <td><input type="text" name="name" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="qty" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="price" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty} * {price}" class="form-control form-control-sm" /></td>
                    </tr>
                    <tr name="line_items">
                        <td></td>
                        <td><input type="text" name="name" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="qty" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="price" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty} * {price}" class="form-control form-control-sm" /></td>
                    </tr>
                    <tr name="line_items">
                        <td><button name="remove" class="btn btn-danger btn-sm">X</button></td>
                        <td><select name="tax" class="form-control">
                                <option>KCL</option>
                                <option>UREA</option>
                                <option>TSP</option>
                                <option>ZA</option>
                                <option>NPK</option>
                                <option>DAP</option>
                            </select></td>
                        </select></td>
                        <td><input type="text" name="qty01" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="price01" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty01} * {price01}" class="form-control form-control-sm" /></td>
                    </tr>
                    <tr name="line_items">
                        <td><button name="remove" class="btn btn-danger btn-sm">X</button></td>
                        <td><select name="tax" class="form-control">
                                <option>KCL</option>
                                <option>UREA</option>
                                <option>TSP</option>
                                <option>ZA</option>
                                <option>NPK</option>
                                <option>DAP</option>
                            </select></td>
                        </select></td>
                        <td><input type="text" name="qty02" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="price02" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty02} * {price02}" class="form-control form-control-sm" /></td>
                    </tr>
                    <tr name="line_items">
                        <td><button name="remove" class="btn btn-danger btn-sm">X</button></td>
                        <td><select name="tax" class="form-control">
                                <option>KCL</option>
                                <option>UREA</option>
                                <option>TSP</option>
                                <option>ZA</option>
                                <option>NPK</option>
                                <option>DAP</option>
                            </select></td>
                        <td><input type="text" name="qty03" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="price03" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty03} * {price03}" class="form-control form-control-sm" /></td>
                    </tr>
                    <tr name="line_items">
                        <td></td>
                        <td><select name="tax" class="form-control">
                                <option>KCL</option>
                                <option>UREA</option>
                                <option>TSP</option>
                                <option>ZA</option>
                                <option>NPK</option>
                                <option>DAP</option>
                            </select></td>
                        </select></td>
                        <td><input type="text" name="qty04" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="price04" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="item_total" jAutoCalc="{qty04} * {price04}" class="form-control form-control-sm" /></td>
                    </tr>

                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Subtotal</td>
                        <td>&nbsp;</td>
                        <td><input type="text" name="sub_total" jAutoCalc="SUM({item_total})" class="form-control form-control-sm" /></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td align="center"><strong>OUTPUT</strong></td>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Hasil Panen</td>
                        <td><input type="text" name="qty1" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="price1" class="form-control form-control-sm" /></td>
                        <td><input type="text" name="item_total2" jAutoCalc="{qty1} * {price1}" class="form-control form-control-sm" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Laba Bersih</td>
                        <td colspan="2">&nbsp;</td>
                        <td><input type="text" name="item_total3" jAutoCalc="{item_total2} - {sub_total}" class="form-control form-control-sm" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Retun Cost Ratio</td>
                        <td colspan="2">&nbsp;</td>
                        <td><input type="text" name="item_total4" jAutoCalc="{item_total3} / {sub_total}" class="form-control form-control-sm" /></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <button name="add" class="btn btn-primary">Tambah</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
<script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/jautocalc.js"></script>
<script src="<?php echo base_url() ?>/assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq');
    });
</script>

</html>