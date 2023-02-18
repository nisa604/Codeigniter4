<?php
/**
 * @Author: Your name
 * @Date:   2023-02-14 13:49:57
 * @Last Modified by:   Your name
 * @Last Modified time: 2023-02-14 14:35:53
 */
?>
<?= $this->extend('v_template') ?>
<?= $this->section('content')?>

</section>
<?php foreach($mahasiswa as $row): ?>
<!-- Main content -->
<section class="content">
<div class="row">
        <!-- right column -->
<div class="col-md-8">
<div class="box">

    <!-- /.box-header -->             
<div class="box-body no-padding">
<td>
<div class="box-header">    
<h3 class="box-title">Data Detail untuk Mahasiswa <?php echo $row->NIM; ?></h3>
    </div>    
<table class="table">
    <tr>
            
        <td>NIM</td>                             
        <td>:</td>                
        <td><?php echo $row->NIM; ?></td>
    </tr>
                        
    <tr>                         
        <td>Nama</td>                        
        <td>:</td>                            
        <td><?php echo $row->Nama; ?></td>
    </tr>
                            
    <tr>                             
        <td>Umur</td>                  
        <td>:</td>                      
        <td><?php echo $row->Umur; ?></td>
    </tr>
    
</table>
</td>
<?php endforeach; ?>

<?= $this->endSection()?>
<!-- /.content -->