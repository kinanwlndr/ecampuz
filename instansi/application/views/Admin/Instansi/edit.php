<div class="container-fluid">
        <h3 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h3>

            <form action="<?php base_url("admin/C_instansi/edit") ?>" method="POST">
                <div class="form-group mt-3">
                    <input type="hidden" name="id_instansi" value="<?php echo $instansi['id_instansi'];?>" class="form-control" id="id_instansi" >
                </div> 
                <div class="form-group mt-3">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" name="nama_instansi" value="<?php echo $instansi['nama_instansi'];?>" class="form-control" id="nama_instansi" >
                </div>
                <div class="form-group mt-3">
                    <label for="des_instansi">Deskripsi Instansi</label>
                    <input type="text" name="des_instansi" value="<?php echo $instansi['des_instansi'];?>" class="form-control" id="des_instansi" >
                </div>                
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success mb-3">Simpan Perubahan</button>
                </div>
            </form>
 </div>
 </div>