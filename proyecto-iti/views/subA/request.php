<?php require(__DIR__ . '/../../init.php'); ?>
<?php
    if (isset($_SESSION)) {
        if (!($_SESSION['subA'])) {
            header('Location: ../../');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/Siscoin_Icon_3.svg">
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="../css/styles_request_sub.css">
    <title>Requests</title>
</head>
<body>
    <?php include('../extras/header_subA.html'); ?>
    <div class="container1">
        <div class="tableEquip">
            <div class="table">
                <table class="firstTable">
                    <tr id="headertr">
                        <th title="Estado" class="st_col"><i class="fas fa-file-alt"></i></th>
                        <th class="id_col"><i class="fas fa-hashtag"></i> ID</th>
                        <th class="tit_col"><i class="fas fa-quote-right"></i> Title</th>
                        <th class="desc_col"><i class="fas fa-align-left"></i> Description</th>
                        <th class="lugar_col"><i class="fas fa-building"></i> Office</th>
                        <th class="tipo_col"><i class="fas fa-desktop"></i> Equipment Type</th>
                        <th class="fecha_col"><i class="far fa-calendar"></i> Initial Date</th>
                        <th class="fecha_col_2"><i class="far fa-calendar-alt"></i> Final Date</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/clamp.min.js"></script>
    <script type="module" src="../js/request_sub.js"></script>
</body>
</html>