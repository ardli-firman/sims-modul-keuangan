<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Penerimaan</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Penerimaan</li>
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
                                Halaman Penerimaan
                            </h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal<code>*</code></label>
                                        <input type="date" class="form-control" name="tanggal" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_kode">No Kode<code>*</code></label>
                                        <input type="number" class="form-control" name="no_kode" placeholder="Masukkan no kode">
                                    </div>
                                    <div class="form-group">
                                        <label for="uraian">Uraian<code>*</code></label>
                                        <textarea class="form-control" id="uraian" name="uraian" placeholder="Masukkan uraian" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="berkas">Berkas <code>*</code></label>
                                        <div class="custom-file mb-3">
                                            <div class="fileinput input-group fileinput-new" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <i class="fa fa-file fileinput-exists"></i>
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <span class="input-group-addon btn btn-secondary btn-file">
                                                    <span class="fileinput-new">Select file</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="hidden" value="" name="..."><input type="file" name="">
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                            <small>Ukuran maksimal 500kb dengan ketentuan format .jpg, .png, .pdf</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nominal">Nominal <code>*</code></label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Rp.</span>
                                            </div>
                                            <input type="number" class="form-control" name="nominal" id="nominal" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <small><code>Note : Yang bertanda * wajib diisi</code></small>
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