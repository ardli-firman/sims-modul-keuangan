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