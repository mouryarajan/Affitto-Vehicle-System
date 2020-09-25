<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="ThemeStarz" />

    <link href="<?php echo base_url(); ?>Client_Assets/fonts/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>Client_Assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/style.css" type="text/css" />

    <title>Wallet</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<style>
    table.greyGridTable {
                                                                        border: 2px solid #FFFFFF;
                                                                        background-color: #FFFFFF;
                                                                        width: 100%;
                                                                        text-align: center;
                                                                        border-collapse: collapse;
                                                                        }
                                                                        table.greyGridTable td, table.greyGridTable th {
                                                                        border: 1px solid #FFFFFF;
                                                                        padding: 3px 4px;
                                                                        }
                                                                        table.greyGridTable tbody td {
                                                                        font-size: 13px;
                                                                        }
                                                                        table.greyGridTable td:nth-child(even) {
                                                                        background: #EBEBEB;
                                                                        }
                                                                        table.greyGridTable thead {
                                                                        background: #FFFFFF;
                                                                        border-bottom: 4px solid #333333;
                                                                        }
                                                                        table.greyGridTable thead th {
                                                                        font-size: 15px;
                                                                        font-weight: bold;
                                                                        color: #333333;
                                                                        text-align: center;
                                                                        border-left: 2px solid #333333;
                                                                        }
                                                                        table.greyGridTable thead th:first-child {
                                                                        border-left: none;
                                                                        }

                                                                        table.greyGridTable tfoot {
                                                                        font-size: 14px;
                                                                        font-weight: bold;
                                                                        color: #333333;
                                                                        border-top: 4px solid #333333;
                                                                        }
                                                                        table.greyGridTable tfoot td {
                                                                        font-size: 14px;
                                                                        }
</style>
<body>
<div class="page-wrapper">
    <?php include 'Header.php'; ?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title center">
            <?php
            $a1=$Amount1[0]->Credit;
            $a2=$Amount2[0]->Debit;
            $balance=$a1-$a2;
            ?>
                <h1>Your Balance: Rs.<?php echo $balance; ?></h1>
            </section>
            <section class="page-title center error">
            <table class="greyGridTable" style="">
            <thead>
            <tr>
                <th>User Name</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Remark</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
            <td></td><td></td><td></td><td></td><td></td>
            </tr>
            </tfoot>
            <tbody>
            <tr>
            <?php
                    foreach($WalletData as $item)
                    {
                ?>
            <tr>
                <td><?php echo $item->UserId; ?></td>
                <td><?php echo $item->Type; ?></td>
                <td><?php echo $item->Amount; ?></td>
                <td><?php echo $item->DateTime; ?></td>
                <td><?php echo $item->Remark; ?></td>
            </tr>
                    <?php } ?>
            </tr>
            </tbody>
            </tr>
            </table>
            </section>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

    <?php include 'Footer.php'; ?>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>


</body>

</html>