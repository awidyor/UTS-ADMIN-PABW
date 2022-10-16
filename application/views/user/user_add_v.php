<?php
    $this->load->view("template/header2");
?>   
    <div class="container">              
        <h2>Registrasi</h2>
            <?php echo form_open_multipart('user/tambah_aksi'); ?>
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Masukan Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                </div>
               
                
                <button type="submit" class="btn btn btn-primary">Tambah</button>
                
           
            <br>
            <br>
    </div>


<?php
    $this->load->view("template/footer");
?>


