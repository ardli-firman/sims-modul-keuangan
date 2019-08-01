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
                    require_once 'bos/bos.php';
                    break;
                default:
                    break;
            }
            ?>
        </div>
    </div>

    <?php require_once '_partials/script.php' ?>
</body>

</html>