<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container my-5">
    <div class="row">
        <form action="/save" method="post">
            <div class="col-12">
                <table class="table table-bordered">
                    <tbody>
                        <?= csrf_field(); ?>
                        <tr>
                            <td scope="row"></td>
                            <td>
                                <select class="form-select" name="jenis_tanaman" id="jenis_tanaman">
                                    <?php foreach ($jenisTanaman as $item) : ?>
                                        <option value="<?= $item ?>" <?= (old('jenis_tanaman') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                    <?php endforeach ?>
                                </select>
                            </td>
                            <td colspan="1"></td>
                            <td>Nama__Petani</td>
                            <td></td>
                            <td>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="name_user" name="name_user" value="<?= old('name_user') ?>" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td>Jenis__Bibit</td>
                            <td>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="jenis_bibit" name="jenis_bibit" value="<?= old('jenis_bibit') ?>" required>
                                </div>
                            </td>
                            <td>Luas__Lahan</td>
                            <td></td>
                            <td>
                                <div class="mb-3">
                                    <input type="number" class="form-control" name="luas_lahan" value="<?= old('luas_lahan') ?>" required>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <select class="form-select" name="satuan_luas" id="satuan_luas">
                                    <?php foreach ($satuan_luas as $item) : ?>
                                        <option value="<?= $item ?>" <?= (old('satuan_luas') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                    <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr class="table-success">
                            <td scope="row"></td>
                            <td>Nama</td>
                            <td>Jumlah</td>
                            <td>Satuan</td>
                            <td></td>
                            <td>Harga</td>
                            <td></td>
                            <td>Total Harga</td>
                        </tr>
                        <!-- Bibit -->
                        <tr>
                            <td scope="row" class="table-light"><strong>BIBIT</strong></td>
                            <td colspan="4"></td>
                        </tr>
                        <?php if (old('bibit_nama')) : $count = 0; ?>
                            <?php foreach (old('bibit_nama') as $item) : ?>
                                <tr class="bibit" id="bibit-<?= $count + 1 ?>">
                                    <td scope="row"> </td>
                                    <td><input name="bibit_nama[]" type="text" class="form-control" value="<?= $item; ?>" required></td>
                                    <td><input name="bibit_jumlah[]" type="number" class="form-control" value="<?= old('bibit_jumlah')[$count] ?>" required></td>
                                    <td>
                                        <select class="form-select" name="satuan_bibit" id="satuan_bibit">
                                            <?php foreach ($satuan_bibit as $item) : ?>
                                                <option value="<?= $item ?>" <?= (old('satuan_bibit') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </td>
                                    <td>Rp.</td>
                                    <td><input name="bibit_harga[]" type="number" class="form-control" value="<?= old('bibit_harga')[$count] ?>" required></td>
                                    <td>Rp.</td>
                                    <td><input name="bibit_total[]" type="text" class="form-control" disabled value="<?php echo " " . number_format(session()->getFlashdata('data')['total_harga_bibit'][$count], 2, ".", ","); ?>" ></td>
                                </tr>
                            <?php $count++;
                            endforeach; ?>
                        <?php else : ?>
                            <tr class="bibit" id="bibit-1">
                                <td scope="row"> </td>
                                <td><input name="bibit_nama[]" placeholder="varietas" type="text" class="form-control" required></td>
                                <td><input name="bibit_jumlah[]" type="number" class="form-control" required></td>
                                <td>
                                    <select class="form-select" name="satuan_bibit" id="satuan_bibit">
                                        <?php foreach ($satuan_bibit as $item) : ?>
                                            <option value="<?= $item ?>" <?= (old('satuan_bibit') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </td>
                                <td>Rp.</td>
                                <td><input name="bibit_harga[]" type="number" class="form-control" required></td>
                                <td>Rp.</td>
                                <td><input name="bibit_total[]" type="text" class="form-control" disabled></td>
                            </tr>
                        <?php endif; ?>
                        <!-- Tenaga -->
                        <tr>
                            <td scope="row" class="table-light"><strong>TENAGA</strong></td>
                            <td colspan="4"></td>
                        </tr>

                        <?php if (old('tenaga_nama')) : $count = 0; ?>
                            <?php foreach (old('tenaga_nama') as $item) : ?>
                                <tr class="tenaga" id="tenaga-<?= $count + 1 ?>">
                                    <td scope="row">
                                        <button type="button" class="btn btn-danger">X</button>
                                        <button type="button" class="btn btn-primary">+</button>
                                    </td>
                                    <td><input name="tenaga_nama[]" type="text" class="form-control" value="<?= $item; ?>" required></td>
                                    <td><input name="tenaga_jumlah[]" type="number" class="form-control" value="<?= old('tenaga_jumlah')[$count] ?>" required></td>
                                    <td>
                                        <select class="form-select" name="satuan_tenaga" id="satuan_tenaga">
                                            <?php foreach ($satuan_tenaga as $item) : ?>
                                                <option value="<?= $item ?>" <?= (old('satuan_tenaga') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </td>
                                    <td>Rp.</td>
                                    <td><input name="tenaga_harga[]" type="number" class="form-control" value="<?= old('tenaga_harga')[$count] ?>" required></td>
                                    <td>Rp.</td>
                                    <td><input name="tenaga_total[]" type="text" class="form-control" disabled value="<?php echo " " . number_format(session()->getFlashdata('data')['total_harga_tenaga'][$count], 2, ".", ","); ?>" ></td>
                                </tr>
                            <?php $count++;
                            endforeach; ?>
                        <?php else : ?>
                            <tr class="tenaga" id="tenaga-1">
                                <td scope="row">
                                    <button type="button" class="btn btn-danger">X</button>
                                    <button type="button" class="btn btn-primary">+</button>
                                </td>
                                <td><input name="tenaga_nama[]" placeholder="Cos Tenaga" type="text" class="form-control" required></td>
                                <td><input name="tenaga_jumlah[]" type="number" class="form-control" required></td>
                                <td>
                                    <select class="form-select" name="satuan_tenaga" id="satuan_tenaga">
                                        <?php foreach ($satuan_tenaga as $item) : ?>
                                            <option value="<?= $item ?>" <?= (old('satuan_tenaga') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </td>
                                <td>Rp.</td>
                                <td><input name="tenaga_harga[]" type="number" class="form-control" required></td>
                                <td>Rp.</td>
                                <td><input name="tenaga_total[]" type="text" class="form-control" disabled></td>
                            </tr>
                        <?php endif; ?>

                        <!-- Anorganik -->
                        <tr>
                            <td scope="row" class="table-light"><strong>PUPUK ANORGANIK</strong></td>
                            <td colspan="4"></td>
                        </tr>

                        <?php if (old('anorganik_nama')) : $count = 0; ?>
                            <?php foreach (old('anorganik_nama') as $item) : ?>
                                <tr class="anorganik" id="anorganik-<?= $count + 1 ?>">
                                    <td scope="row">
                                        <button type="button" class="btn btn-danger">X</button>
                                        <button type="button" class="btn btn-primary">+</button>
                                    </td>
                                    <td>
                                        <select class="form-select" name="anorganik_nama[]">
                                            <option>KCL</option>
                                            <option>ZA</option>
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                    </td>
                                    <td><input name="anorganik_jumlah[]" type="number" class="form-control" value="<?= old('anorganik_jumlah')[$count] ?>" required></td>
                                    <td>
                                        <select class="form-select" name="satuan_anorganik" id="satuan_anorganik">
                                            <?php foreach ($satuan_anorganik as $item) : ?>
                                                <option value="<?= $item ?>" <?= (old('satuan_anorganik') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </td>
                                    <td>Rp.</td>
                                    <td><input name="anorganik_harga[]" type="number" class="form-control" value="<?= old('anorganik_harga')[$count] ?>" required></td>
                                    <td>Rp.</td>
                                    <td><input name="anorganik_total[]" type="text" class="form-control" disabled value="<?php echo " " . number_format(session()->getFlashdata('data')['total_harga_anorganik'][$count], 2, ".", ","); ?>"></td>
                                </tr>
                            <?php $count++;
                            endforeach; ?>
                        <?php else : ?>
                            <tr class="anorganik" id="anorganik-1">
                                <td scope="row">
                                    <button type="button" class="btn btn-danger">X</button>
                                    <button type="button" class="btn btn-primary">+</button>
                                </td>
                                <td>
                                    <select class="form-select" name="anorganik_nama[]">
                                        <option>KCL</option>
                                        <option>ZA</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </td>
                                <td><input name="anorganik_jumlah[]" type="number" class="form-control" required></td>
                                <td>
                                    <select class="form-select" name="satuan_anorganik" id="satuan_anorganik">
                                        <?php foreach ($satuan_anorganik as $item) : ?>
                                            <option value="<?= $item ?>" <?= (old('satuan_anorganik') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </td>
                                <td>Rp.</td>
                                <td><input name="anorganik_harga[]" type="number" class="form-control" required></td>
                                <td>Rp.</td>
                                <td><input name="anorganik_total[]" type="text" class="form-control" disabled></td>
                            </tr>
                        <?php endif; ?>

                        <!-- Organik -->
                        <tr>
                            <td scope="row" class="table-light"><strong>PUPUK ORGANIK</strong></td>
                            <td colspan="4"></td>
                        </tr>
                        <?php if (old('organik_nama')) : $count = 0; ?>
                            <?php foreach (old('organik_nama') as $item) : ?>
                                <tr class="organik" id="organik-<?= $count + 1 ?>">
                                    <td scope="row">
                                        <button type="button" class="btn btn-danger">X</button>
                                        <button type="button" class="btn btn-primary">+</button>
                                    </td>
                                    <td><input name="organik_nama[]" placeholder="organik nama" type="text" class="form-control" value="<?= $item; ?>" required></td>
                                    <td><input name="organik_jumlah[]" placeholder="volume" type="number" class="form-control" value="<?= old('organik_jumlah')[$count] ?>" required></td>
                                    <td>
                                        <select class="form-select" name="satuan_organik" id="satuan_organik">
                                            <?php foreach ($satuan_organik as $item) : ?>
                                                <option value="<?= $item ?>" <?= (old('satuan_organik') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </td>
                                    <td>Rp.</td>
                                    <td><input name="organik_harga[]" placeholder="harga" type="number" class="form-control" value="<?= old('organik_harga')[$count] ?>" required></td>
                                    <td>Rp.</td>
                                    <td><input name="organik_total[]" placeholder="total harga" type="text" class="form-control" disabled value="<?php echo " " . number_format(session()->getFlashdata('data')['total_harga_organik'][$count], 2, ".", ","); ?>"></td>
                                </tr>
                            <?php $count++;
                            endforeach; ?>
                        <?php else : ?>
                            <tr class="organik" id="organik-1">
                                <td scope="row">
                                    <button type="button" class="btn btn-danger">X</button>
                                    <button type="button" class="btn btn-primary">+</button>
                                </td>
                                <td><input name="organik_nama[]" placeholder="organik nama" type="text" class="form-control" required></td>
                                <td><input name="organik_jumlah[]" placeholder="volume" type="number" class="form-control" required></td>
                                <td>
                                    <select class="form-select" name="satuan_organik" id="satuan_organik">
                                        <?php foreach ($satuan_organik as $item) : ?>
                                            <option value="<?= $item ?>" <?= (old('satuan_organik') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </td>
                                <td>Rp.</td>
                                <td><input name="organik_harga[]" placeholder="harga" type="number" class="form-control" required></td>
                                <td>Rp.</td>
                                <td><input name="organik_total[]" placeholder="total harga" type="text" class="form-control" disabled></td>
                            </tr>
                        <?php endif; ?>
                        <!-- Pestisida -->
                        <tr>
                            <td scope="row" class="table-light"><strong>PUPUK PESTISIDA</strong></td>
                            <td colspan="4"></td>
                        </tr>
                        <?php if (old('pestisida_nama')) : $count = 0; ?>
                            <?php foreach (old('pestisida_nama') as $item) : ?>
                                <tr class="pestisida" id="pestisida-<?= $count + 1 ?>">
                                    <td scope="row">
                                        <button type="button" class="btn btn-danger">X</button>
                                        <button type="button" class="btn btn-primary">+</button>
                                    </td>
                                    <td><input name="pestisida_nama[]" type="number" placeholder="pestisida nama" class="form-control" value="<?= $item; ?>" required></td>
                                    <td><input name="pestisida_jumlah[]" type="number" placeholder="volume" class="form-control" value="<?= old('pestisida_jumlah')[$count] ?>" required></td>
                                    <td>
                                        <select class="form-select" name="satuan_pestisida" id="satuan_pestisida">
                                            <?php foreach ($satuan_pestisida as $item) : ?>
                                                <option value="<?= $item ?>" <?= (old('satuan_pestisida') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </td>
                                    <td>Rp.</td>
                                    <td><input name="pestisida_harga[]" type="text" placeholder="harga" class="form-control" value="<?= old('pestisida_harga')[$count] ?>" required></td>
                                    <td>Rp.</td>
                                    <td><input name="pestisida_total[]" type="text" placeholder="total harga" class="form-control" disabled value="<?php echo " " . number_format(session()->getFlashdata('data')['total_harga_pestisida'][$count], 2, ".", ","); ?>"></td>
                                </tr>
                            <?php $count++;
                            endforeach; ?>
                        <?php else : ?>
                            <tr class="pestisida" id="pestisida-1">
                                <td scope="row">
                                    <button type="button" class="btn btn-danger">X</button>
                                    <button type="button" class="btn btn-primary">+</button>
                                </td>
                                <td><input name="pestisida_nama[]" placeholder="pestisida nama" type="text" class="form-control" required></td>
                                <td><input name="pestisida_jumlah[]" placeholder="volume" type="number" class="form-control" required></td>
                                <td>
                                    <select class="form-select" name="satuan_pestisida" id="satuan_pestisida">
                                        <?php foreach ($satuan_pestisida as $item) : ?>
                                            <option value="<?= $item ?>" <?= (old('satuan_pestisida') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </td>
                                <td>Rp.</td>
                                <td><input name="pestisida_harga[]" placeholder="harga" type="number" class="form-control" required></td>
                                <td>Rp.</td>
                                <td><input name="pestisida_total[]" placeholder="total harga" type="text" class="form-control" disabled></td>
                            </tr>
                        <?php endif; ?>

                        <!-- Subtotal -->
                        <tr class="table-light">
                            <td scope="row" colspan="2"></td>
                            <td>Subtotal</td>
                            <td colspan="3"></td>
                            <td>Rp.</td>
                            <td><input name="subtotal" type="text" class="form-control" disabled value="<?= session()->getFlashdata('data') !== NULL ? session()->getFlashdata('data')['subtotal'] : '' ?>"></td>
                        </tr>
                        <!-- Output -->
                        <tr>
                            <td scope="row" colspan="5"><strong>OUTPUT</strong></td>
                        </tr>
                        <!-- Hasil Panen -->
                        <tr class="table-light">
                            <td scope="row"></td>
                            <td>Hasil Panen</td>
                            <td><input name="hasil_panen_jumlah" type="number" class="form-control" value="<?= old('hasil_panen_jumlah'); ?>" required></td>
                            <td>
                                <select class="form-select" name="satuan" id="satuan">
                                    <?php foreach ($satuan as $item) : ?>
                                        <option value="<?= $item ?>" <?= (old('satuan') == $item) ? 'selected' : ''; ?>><?= $item ?></option>
                                    <?php endforeach ?>
                                </select>
                            </td>
                            <td>Rp.</td>
                            <td><input name="hasil_panen_harga" type="number" class="form-control" value="<?= old('hasil_panen_harga'); ?>"></td>
                            <td>Rp.</td>
                            <td><input type="text" class="form-control" disabled value="<?= session()->getFlashdata('data') !== NULL ? session()->getFlashdata('data')['hasil_panen'] : '' ?>" required></td>
                        </tr>
                        <!-- Laba Bersih -->
                        <tr class="table-light">
                            <td scope="row"></td>
                            <td>Laba Bersih</td>
                            <td colspan="4"></td>
                            <td>Rp.</td>
                            <td><input type="text" class="form-control" disabled value="<?= session()->getFlashdata('data') !== NULL ? session()->getFlashdata('data')['laba_bersih'] : '' ?>"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success" name="action" value="download">Download Hasil</button>
                <a href="<?php echo base_url() ?>/login/user" class="btn btn-primary">Login</a>
                <button type="submit" class="btn btn-success" name="action" value="save">Hitung</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>