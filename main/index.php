<!DOCTYPE html>

<html lang="en">

<head>
    <?php require_once '_partials/head.php' ?>
</head>

<body class="fix-header card-no-border">
    <div id="main-wrapper">
        <?php require_once '_partials/nav.php' ?>
        <div class="page-wrapper" style='min-height: 232px;'>
            <?php
            $menu = @$_GET['menu'];
            switch (@$_GET['hal']) {
                case 'penerimaan':
                    require_once 'kas/penerimaan.php';
                    break;
                case 'pengeluaran':
                    require_once 'kas/pengeluaran.php';
                    break;
                case 'kas':
                    require_once 'kas/kas.php';
                    break;
                case 'pajak':
                    require_once 'pajak/pajak.php';
                    break;
                case 'bos':
                    switch($menu) {
                        case 'std_isi';
                            require_once 'bos/standar_isi.php';
                            break;
                        case 'std_process';
                            require_once 'bos/standar_proses.php';
                            break;
                        case 'sys_nilai';
                            require_once 'bos/sistem_penilaian.php';
                            break;
                        case 'sarpra_sekolah';
                            require_once 'bos/sarana_prasarana.php';
                            break;
                        case 'std_pengelola';
                            require_once 'bos/standar_pengelolaan.php';
                            break;
                        case 'std_biaya';
                            require_once 'bos/standar_biaya.php';
                            break;
                        case 'pen_tk';
                            require_once 'bos/pen_tk.php';
                            break;
                        case 'laporan';
                            require_once 'bos/laporan.php';
                            break;
                        case 'kom_lulusan':
                            require_once 'bos/kompetensi_lulusan.php';
                            break;
                        default :
                            require_once 'bos/bos.php';
                            break;
                    }
                default:
                    break;
            }
            ?>
        </div>
    </div>

    <?php require_once '_partials/script.php' ?>
</body>

</html>