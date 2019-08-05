<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Rekap Pajak</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Rekap Pajak</li>
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
                                Halaman Rekap Pajak
                            </h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal<code>*</code></label>
                                        <input type="date" class="form-control" name="tanggal" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nominal">Nominal Belanja <code>*</code></label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Rp.</span>
                                            </div>
                                            <input type="number" class="form-control" name="nominal" id="nominal" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="uraian">PPN<code>*</code></label>
                                        <input class="form-control" id="uraian" name="uraian" placeholder="Otomatis terisi" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="uraian">Nama toko<code>*</code></label>
                                        <input class="form-control" id="uraian" name="uraian" placeholder="Nama toko" required>
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