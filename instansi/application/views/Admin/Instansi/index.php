<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h3 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h3>
        </div>
        
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <a href="<?php echo site_url('Admin/C_Instansi/tambah/') ?>" class="btn btn-primary my-2"> <i class="fas fa-user-plus"></i> Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    
                    <thead>
                        <tr align="center">
                            <th>Nomor</th>
                            <th>Nama Instansi</th>
                            <th>Deskripsi Instansi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no=1; foreach ($instansi as $row) : ?>
                            <tr>
                                <td width="50" align="center">
                                   <?= $no++ ?>
                                </td>
                                <td width="300" align="center">
                                    <?= $row['nama_instansi']; ?>                                
                                </td>
                                <td>
                                    <?= $row['des_instansi']; ?>                                
                                </td>
                                <td width="100" align="center">
                                    <a href=" <?php echo site_url('Admin/C_Instansi/edit/' . $row['id_instansi']) ?>" 
                                    class="btn btn-circle btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut?');" 
                                    href="<?php echo site_url('Admin/C_Instansi/hapus/' .$row['id_instansi']) ?>" 
                                    class="btn btn-circle btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>