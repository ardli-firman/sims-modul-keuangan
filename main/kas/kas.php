<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Kas</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Kas</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kas</h4>
                    <h5 for="">Cetak data kas</h5>
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-daterange input-group" id="date-range">
                                        <select name="start" id="start" class="form-control">
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                        </select>
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-info b-0 text-white">TO</span>
                                        </div>
                                        <select name="end" id="end" class="form-control">
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button class="btn btn-primary">Cetak</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data kas</h4>
                    <table id="tabel-kas">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>tanggal</th>
                                <th>Uraian</th>
                                <th>Berkas</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                                <th>Saldo</th>
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
<script>
    var data = [
        [
            "1",
            "2019-31-07",
            "Uraian",
            "<i class='fa fa-file'></i>",
            "2000",
            "",
            "2000"
        ],
        [
            "2",
            "2019-01-08",
            "Uraian 2",
            "<i class='fa fa-file'></i>",
            "",
            "1000",
            "1000"
        ]
    ]
    $(function() {
        $('#tabel-kas').DataTable({
            data: data
        });
    })
</script>