<?php
/**
 * @Author: Your name
 * @Date:   2023-02-07 13:42:50
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-15 13:56:33
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        table td{
            border: 1px solid #000000;
        }

        table{
            width: 75%;
        }

        .body{
            height: 530px;
        }

        .centering{
            height: 80px;
            width: 160px;
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="centering">Header</td>
        </tr>
        <tr>
            <td>
                <a href="/v_home1">HOME</a>
                <a href="/v_info">INFO</a>
                <a href="/v_display_Mahasiswa">Data Mahasiswa</a>
            </td>
        </tr>
        <tr class="body">
            <?= $this->renderSection('content') ?>
            
        </tr>
        <tr>
            <td> 
                <a class="btn btn-danger" href="<?= base_url('login') ?>" role="button">Logout</a>
            </td>
        </tr>
    </table>
</body>
</html>