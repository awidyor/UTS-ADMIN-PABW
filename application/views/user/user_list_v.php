<?php
    $this->load->view("template/header");
?>   
    <div class="container">
        <div class="row mt-3">
            <div>
            <h2>Daftar Admin</h2>    
            </div>
            
          
            <div class="table-responsive">
                   <div class="table-responsive">
                 
                        <div class="mt-3">    
            <a href="<?= base_url("User/tambah/") ?>" class="btn btn-primary">Tambah</a>

  </div>
</div>
</div>
<br>
                <table class="table table-striped table-sm mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>E-Mail</th>
                  
                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $baris) {
                            ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $baris->nama ?></td>
                                <td><?php echo $baris->username ?></td>
                            
       
                                <td>
                                    <a href="<?= base_url('user/edit/') . $baris->id ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('user/hapus/') . $baris->id ?>" class="btn btn-danger">Hapus</a>
                                    
                                </td>


                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
               
            </div>
        </div>
    </div>


<?php
    $this->load->view("template/footer");
?>
<script type="text/javascript">

    $(document).ready( function () {
        $('.table').DataTable();
    } );

</script>
