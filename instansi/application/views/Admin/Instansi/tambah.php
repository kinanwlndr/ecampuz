<div class="container-fluid">
        <div class="card shadow mb-4">
           <div class="card-header py-3 -flex flex-row align-items-center justify-content-between">
                <h3 align="center" class="m-0 font-weight-bold text-primary"><?= $judul; ?></h>
            </div>
            
        <form action="" method="POST">
            <div class="form-group col">
                <div class="form-group mt-3">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" name="nama_instansi" class="form-control" id="nama_instansi" >
                </div>
                <div class="form-group mt-3">
                    <label for="des_instansi">Deskripsi Instansi</label>
                    <input type="text" name="des_instansi" class="form-control" id="des_instansi" >
                </div>
                <button type="submit" class="btn btn-success mb-3">Simpan Data</button>
            </div>
        </form>
</div>
