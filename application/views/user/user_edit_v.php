<?php
    $this->load->view("template/header");
?>   
    <div class="container">              
        <h2>Update User</h2>
        <?php foreach ($user as $baris) { ?>
        <?php echo form_open_multipart('user/update');?>    

            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo $baris->id; ?>">
            </div>        
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $baris->nama; ?>">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp" value="<?php echo $baris->username; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $baris->password; ?>">
            </div>
           
            
            <button type="submit" class="btn btn-primary">Perbaharui</button>
            <a href="<?= base_url();?>user" class="btn btn-success">Kembali</a>

       <?php  echo form_close(); ?>

    <?php } ?>
        <br>
        <br>
    </div>

<?php
    $this->load->view("template/footer");
?>

