<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<!-- bs 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

<div class="container-fluid py-4 ">
    <div class="ms-auto my-auto mt-lg-0 ">

        <table class="table">
            <tbody class="">
                <div class="P-4 mr-5">
                    <div class="row col-6 ms-3 mt-3">
                        <form action="/update/php" method=" POST" enctype="multipart/form-data">
                            <input type="hidden" name="gambarLama">
                            <tr>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="nama">Nomor Jastel Pelanggan</label>
                                        <fieldset disabled>
                                            <input type="text" id="disabledTextInput" class="form-control" value="ini disabled">
                                            <!-- <input style="margin-left: 100;" type="number" name="nomor_jastel" class="form-control" style="background-color: white;" id="nomor_jastel" value="  "> -->
                                        </fieldset>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama Pelanggan</label>
                                        <fieldset disabled>
                                            <input type="text" id="disabledTextInput" class="form-control" value="ini disabled">
                                            <!-- <input type="text" name="nama" class="form-control" style="background-color: white;" id="nama" value="php"> -->
                                        </fieldset>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="nohp">Kontak Telepon Pelanggan</label>
                                        <input type="tel" name="contact" class="form-control" style="background-color: white;" id="contact" value="format tel / num ya?">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="agen">Agen Pengelola</label>
                                        <fieldset disabled>
                                            <input type="text" id="disabledTextInput" class="form-control" value="nanti diwa">
                                        </fieldset>
                                        <!-- <input type="text" name="agen_pengelola" class="form-control" style="background-color: white;" id="agen_pengelola" value="php" ?> -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="produk">Produk Pelanggan</label>
                                        <fieldset disabled>
                                            <input type="text" id="disabledTextInput" class="form-control" value="ini disable produknya">
                                        </fieldset>
                                        <!-- <input type="text" name="produk" class="form-control" style="background-color: white;" id="produk" value="php"> -->
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="alamat">Alamat Lengkap Pelanggan</label>
                                        <!-- <input type="textarea" name="alamat" class="form-control" style="background-color: white;" id="alamat" value="php"> -->
                                        <div class="form-floating">
                                            <textarea style="height: 150px;" class="form-control" placeholder="Leave a comment here" id="floatingTextarea">inii alamat</textarea>
                                            <!-- <label for="floatingTextarea">Bagaimana dengan pengalaman pelanggan?</label> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="call">Status Call</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Status Call</option>
                                            <option value="1">Contacted</option>
                                            <option value="2">Not-Contacted</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="reason">Reason Call</label>
                                        <!-- <input type="text" name="reasoncall" class="form-control" style="background-color: white;" id="reasoncall" value="php"> -->
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Reason Call</option>
                                            <option value="1">Setuju</option>
                                            <option value="2">Kendala</option>
                                            <option value="3">Lunas</option>
                                            <option value="4">Janji bayar</option>
                                            <option value="5"></option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="penerima">Penerima Telepon</label>
                                        <input type="text" name="penerima_telpon" class="form-control" style="background-color: white;" id="penerima_telpon" value="defaultnya YBS" ?>

                                    </div>
                                </td>
                                <td>
                                    <div class="form-group mb-3">
                                        <label for="hub">Hubungan Dengan YBS</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Hubungan Dengan Yang Bersangkutan</option>
                                            <option value="1">Orangtua</option>
                                            <option value="2">Anak</option>
                                            <option value="3">Teman</option>
                                            <option value="4">Tetangga</option>
                                            <option value="5">Tidak Kenal</option>
                                            <option value="6"></option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group mb-3">
                                        <label for="kendala">Kendala Pelanggan</label>
                                        <!-- <input type="textarea" name="kendala_pelanggan" class="form-control" style="background-color: white;" id="kendala_pelanggan" value="php" ?> -->
                                        <div class="form-floating">
                                            <textarea style="height: 150px;" class="form-control" placeholder="Leave a comment here" id="floatingTextarea">disini isi database</textarea>
                                            <!-- <label for="floatingTextarea">Bagaimana dengan pengalaman pelanggan?</label> -->
                                        </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group mb-3">
                                        <label for="hasil">Hasil Caring</label>
                                        <!-- <input type="text" name="hasil_caring" class="form-control" style="background-color: white;" id="hasil_caring" value="php"> -->
                                        <div class="form-floating">
                                            <textarea style="height: 150px;" class="form-control" placeholder="Leave a comment here" id="floatingTextarea">disini isi database</textarea>
                                            <!-- <label for="floatingTextarea">Kenapa terlambat bayar?</label> -->
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2 ms-2">Simpan Data</button>
                                </td>
                            </tr>
                        </form>
                    </div>
                </div>
            </tbody>
        </table>
    </div>

    <?= $this->endSection() ?>