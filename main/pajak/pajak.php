<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Kas</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Rekap pajak</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data rekap pajak</h4>
                    <table id="tabel-kas">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>tanggal</th>
                                <th>Uraian</th>
                                <th>Berkas</th>
                                <th>Nilai belanja</th>
                                <th>PPN</th>
                                <th>Nama toko</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="Modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="">
                <div class="modal-body">
                    <label for="nm_toko">Nama toko</label>
                    <input type="text" class="form-control" name="nm_toko">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
<script>
    var data = [
        [
            "2",
            "2019-01-08",
            "Uraian 2",
            "<i class='fa fa-file'></i>",
            "1000",
            "91",
            "-",
            "<button class='btn btn-outline-success' data-target='#Modal' data-toggle='modal'>Edit</button>"
        ]
    ]
    $(function() {
        $('#tabel-kas').DataTable({
            data: data
        });
    })
</script>