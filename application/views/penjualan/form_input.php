<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="row">
    <div class="col-sm-12 col-md-10">
        <h4 class="mb-0"><i class="fa fa-reply"></i> Tambah Data Pengambilan Barang</h4>
    </div>
</div>
<hr class="mt-0" />
<div id="message">
    <?php if ($this->session->flashdata('alert')) : ?>
        <div class="alert alert-danger" role="alert"><?= $this->session->flashdata('alert'); ?></div>
    <?php endif; ?>
</div>
<?= form_open(); ?>
<div class="col-md-12">
    <div class="form-group row">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Pengambilan</label>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-sm <?= (form_error('tanggal')) ? 'is-invalid' : ''; ?>" name="tanggal" id="date-picker" value="<?= (set_value('tanggal')) ? set_value('tanggal') : date('d/m/Y'); ?>">
            <div class="invalid-feedback">
                <?= form_error('tanggal', '<p class="error-message">', '</p>'); ?>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="pembeli" class="col-sm-2 col-form-label">Nama - Area</label>
        <div class="col-sm-6">
            <input type="text" name="pembeli" id="pembeli" class="form-control form-control-sm <?= (form_error('pembeli')) ? 'is-invalid' : ''; ?>" placeholder="Nama Operator - Area Anda" value="<?= (set_value('pembeli')) ? set_value('pembeli') : ''; ?>">
            <div class="invalid-feedback">
                <?= form_error('pembeli', '<p class="error-message">', '</p>'); ?>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="barang-penjualan" class="col-sm-2 col-form-label">Barang</label>
        <div class="col-sm-6">
            <select class="barang-select custom-select custom-select-sm pilih-barang" id="barang-penjualan">
                <option value="" disabled selected>Pilih Barang</option>
                <?php foreach ($data->result() as $d) : ?>
                    <option value="<?= $d->kode_barang; ?>">
                        <?= $d->nama_barang . ' ( ' . $d->brand . ' )'; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-sm-2 col-form-label">Stok</label>
        <div class="col-sm-2">
            <input type="text" class="form-control form-control-sm qty" id="sisa" placeholder="Stok Barang" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlahx" class="col-sm-2 col-form-label">Jumlah Ambil</label>
        <div class="col-sm-2">
            <input type="text" class="form-control form-control-sm qty" id="jumlahx" placeholder="Jumlah">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2 offset-sm-2">
            <div id="rowid-field"></div>
            <div id="btn-act">
                <button type="button" class="btn btn-success btn-sm tambah-penjualan" onclick="tambah_pembelian()">
                    Tambah Barang
                </button>
            </div>
        </div>
    </div>

    <table class="table table-striped table-hover table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Qty</th>
                <th scope="col">Harga</th>
                <th scope="col">Harga Total</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody id="daftar-jual">
            <?= $table; ?>
        </tbody>
    </table>
    <div class="col-sm-4 offset-sm-8">
        <button type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit">
            <i class="fa fa-save"></i> Simpan Data Penjualan
        </button>
        <button type="button" onclick="window.history.back()" class="btn btn-light btn-sm">
            Kembali
        </button>
    </div>
</div>
</br>
</br>
<center><h3>PASTIKAN KETIKA MEMESAN LABEL SESUAI DENGAN LIST!</h3></center>
<center><h5>1 RIM = 500 LEMBAR</h5></center>
<table class="table table-striped table-hover table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><center>LINE</center></th>
                <th scope="col"><center>Label Bersih Alat</center></th>
                <th scope="col"><center>Label Bersih Ruangan</center></th>
                <th scope="col"><center>Label Pembersihan</center></th>
                <th scope="col"><center>Label Sedang Proses</center></th>
                <th scope="col"><center>Label Dalam Proses</center></th>
            </tr>
        </thead>
                <th scope="col"><center>1 COMP</center></th>
                <th scope="col"><center>3900</center></th>
                <th scope="col"><center>1000</center></th>
                <th scope="col"><center>1000</center></th>
                <th scope="col"><center>1000</center></th>
                <th scope="col"><center>2460</center></th>
            </tr>
        </thead>
                <th scope="col"><center>2 COMP</center></th>
                <th scope="col"><center>1800</center></th>
                <th scope="col"><center>300</center></th>
                <th scope="col"><center>300</center></th>
                <th scope="col"><center>300</center></th>
                <th scope="col"><center>2000</center></th>
            </tr>
        </thead>
                <th scope="col"><center>3 COMP</center></th>
                <th scope="col"><center>1520</center></th>
                <th scope="col"><center>300</center></th>
                <th scope="col"><center>300</center></th>
                <th scope="col"><center>300</center></th>
                <th scope="col"><center>1900</center></th> 
            </tr>
        </thead>
                <th scope="col"><center>4 COMP</center></th>
                <th scope="col"><center>940</center></th>
                <th scope="col"><center>200</center></th>
                <th scope="col"><center>200</center></th>
                <th scope="col"><center>200</center></th>
                <th scope="col"><center>60</center></th>
            </tr>
        </thead>
                <th scope="col"><center>5 COMP</center></th>
                <th scope="col"><center>1840</center></th>
                <th scope="col"><center>240</center></th>
                <th scope="col"><center>240</center></th>
                <th scope="col"><center>240</center></th>
                <th scope="col"><center>1880</center></th>
            </tr>
        </thead>
                <th scope="col"><center>6 COMP</center></th>
                <th scope="col"><center>3480</center></th>
                <th scope="col"><center>380</center></th>
                <th scope="col"><center>380</center></th>
                <th scope="col"><center>380</center></th>
                <th scope="col"><center>5400</center></th>
             </tr>
        </thead>
                <th scope="col"><center>7 COMP</center></th>
                <th scope="col"><center>1200</center></th>
                <th scope="col"><center>400</center></th>
                <th scope="col"><center>400</center></th>
                <th scope="col"><center>400</center></th>
                <th scope="col"><center>1000</center></th>
             </tr>
        </thead>
                <th scope="col"><center>2 CETAK</center></th>
                <th scope="col"><center>800</center></th>
                <th scope="col"><center>120</center></th>
                <th scope="col"><center>120</center></th>
                <th scope="col"><center>120</center></th>
                <th scope="col"><center>1480</center></th>
            </tr>
        </thead>
                <th scope="col"><center>3 CETAK</center></th>
                <th scope="col"><center>1600</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>260</center></th>
                <th scope="col"><center>180</center></th>
                <th scope="col"><center>1800</center></th>
            </tr>
        </thead>
                <th scope="col"><center>4 CETAK</center></th>
                <th scope="col"><center>1400</center></th>
                <th scope="col"><center>240</center></th>
                <th scope="col"><center>240</center></th>
                <th scope="col"><center>240</center></th>
                <th scope="col"><center>3360</center></th>
            </tr>
        </thead>
                <th scope="col"><center>5 CETAK</center></th>
                <th scope="col"><center>1200</center></th>
                <th scope="col"><center>200</center></th>
                <th scope="col"><center>200</center></th>
                <th scope="col"><center>200</center></th>
                <th scope="col"><center>4800</center></th>
             </tr>
        </thead>
                <th scope="col"><center>6 CETAK</center></th>
                <th scope="col"><center>1400</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>600</center></th>
            </tr>
        </thead>
                <th scope="col"><center>7 CETAK</center></th>
                <th scope="col"><center>1400</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>120</center></th>
                <th scope="col"><center>4000</center></th>
            </tr>
        </thead>
                <th scope="col"><center>2 FILCO</center></th>
                <th scope="col"><center>3280</center></th>
                <th scope="col"><center>640</center></th>
                <th scope="col"><center>560</center></th>
                <th scope="col"><center>680</center></th>
                <th scope="col"><center>1680</center></th>
            </tr>
        </thead>
                <th scope="col"><center>3 FILCO</center></th>
                <th scope="col"><center>1000</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>200</center></th>
                <th scope="col"><center>200</center></th>
                <th scope="col"><center>1600</center></th>
            </tr>
        </thead>
                <th scope="col"><center>6 FILCO</center></th>
                <th scope="col"><center>120</center></th>
                <th scope="col"><center>24</center></th>
                <th scope="col"><center>24</center></th>
                <th scope="col"><center>24</center></th>
                <th scope="col"><center>108</center></th>
            </tr>
        </thead>
                <th scope="col"><center>1 STRIP</center></th>
                <th scope="col"><center>1000</center></th>
                <th scope="col"><center>400</center></th>
                <th scope="col"><center>400</center></th>
                <th scope="col"><center>200</center></th>
                <th scope="col"><center>NA</center></th>
            </tr>
        </thead>
                <th scope="col"><center>2 STRIP</center></th>
                <th scope="col"><center>1360</center></th>
                <th scope="col"><center>240</center></th>
                <th scope="col"><center>240</center></th>
                <th scope="col"><center>240</center></th>
                <th scope="col"><center>1200</center></th>
            </tr>
        </thead>
                <th scope="col"><center>3 STRIP</center></th>
                <th scope="col"><center>960</center></th>
                <th scope="col"><center>180</center></th>
                <th scope="col"><center>180</center></th>
                <th scope="col"><center>180</center></th>
                <th scope="col"><center>NA</center></th>
            </tr>
        </thead>
                <th scope="col"><center>4 STRIP</center></th>
                <th scope="col"><center>1140</center></th>
                <th scope="col"><center>300</center></th>
                <th scope="col"><center>300</center></th>
                <th scope="col"><center>300</center></th>
                <th scope="col"><center>NA</center></th>
            </tr>
        </thead>
                <th scope="col"><center>5 STRIP</center></th>
                <th scope="col"><center>660</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>160</center></th>
                <th scope="col"><center>680</center></th>
            </tr>
        </thead>
                <th scope="col"><center>6 STRIP</center></th>
                <th scope="col"><center>280</center></th>
                <th scope="col"><center>80</center></th>
                <th scope="col"><center>80</center></th>
                <th scope="col"><center>80</center></th>
                <th scope="col"><center>NA</center></th>
            </tr>
        </thead>
                <th scope="col"><center>7 STRIP</center></th>
                <th scope="col"><center>120</center></th>
                <th scope="col"><center>60</center></th>
                <th scope="col"><center>60</center></th>
                <th scope="col"><center>60</center></th>
                <th scope="col"><center>NA</center></th>
        </tbody>
    </table>
    <center><h5>*Jika ada perubahan silahkan Hubungi PS ext 1307</h5></center>
<?= form_close(); ?>