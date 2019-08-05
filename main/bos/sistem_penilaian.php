<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Sistem Penilaian</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?hal=bos">Home</a></li>
            <li class="breadcrumb-item">Sistem Penilaian</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form>
                        <div class="form-body">
                            <h3 class="card-title">
                                Sistem Penilaian
                            </h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal<code>*</code></label>
                                        <input type="date" class="form-control" name="tanggal" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="uraian">Uraian kegiatan<code>*</code></label>
                                        <textarea class="form-control" id="uraian" name="uraian" placeholder="Masukkan uraian" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label style="font-size: 20px;">Penggunaan dana per sumber dana</label>
                                    </div>
                                    <h4>Sumber Dana BOS</h4>
                                    <hr>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="rutin">Rutin<code>*</code></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="number" class="form-control" name="rutin" id="rutin" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pusat">Pusat<code>*</code></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="number" class="form-control" name="pusat" id="pust" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="provinsi">Provinsi<code>*</code></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="number" class="form-control" name="provinsi" id="provinsi" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pusat">Kota.Kab.<code>*</code></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="number" class="form-control" name="pusat" id="pust" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="bantuan-lain">Bantuan Lain<code>*</code></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="number" class="form-control" name="bantuan-lain" id="bantuan-lain" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="sumber-pendapatan">Sumber Pendapatan<code>*</code></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="number" class="form-control" name="sumber-pendapatan" id="sumber-pendapatan" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <small><label>Bertanda <code>*</code> wajib di isi</label></small>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>