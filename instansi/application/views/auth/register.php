<title>Halaman Registrasi</title>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi User</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/register') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username'); ?>"> <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control form-control-user" id="nip" name="nip" placeholder="Masukan NIP" value="<?= set_value('nip'); ?>"> <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukan Nama Lengkap" value="<?= set_value('nama'); ?>"> <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <p>Jenis Kelamin</p>
                                <p><input type='radio' id='jk' name='jk' value='Laki-laki' />Laki-laki</p>
                                <p><input type='radio' id='jk' name='jk' value='Perempuan' />Perempuan</p>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Masukan Nomor Telepon">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukan Alamat">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukan Password"> <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                            </div>
                            <div class="form-group">
                                <p>Role</p>
                                <select name="role" id="role">
                                    <option value='Admin'>Admin</option>
                                    <option value='Pegawai Puskesmas'>Pegawai Puskesmas</option>
                                    <option value='Pegawai Instalasi Farmasi'>Pegawai Instalasi Farmasi</option>
                                    <option value='Kepala Puskesmas'>Kepala Puskesmas</option>
                                    <option value='Kepala Instalasi Farmasi'>Kepala Instalasi Farmasi</option>
                                    <option value='Kepala Dinas Kesehatan'>Kepala Dinas Kesehatan</option>
                                </select>
                                <!--<p><input type='radio' id='role' name='role' value='Admin' />Admin</p>
                                <p><input type='radio' id='role' name='role' value='Pegawai Puskesmas' />Pegawai Puskesmas</p>
                                <p><input type='radio' id='role' name='role' value='Pegawai Instalasi Farmasi' />Pegawai Instalasi Farmasi</p>
                                <p><input type='radio' id='role' name='role' value='Kepala Puskesmas' />Kepala Puskesmas</p>
                                <p><input type='radio' id='role' name='role' value='Kepala Instalasi Farmasi' />Kepala Instalasi Farmasi</p>
                                <p><input type='radio' id='role' name='role' value='Kepala Dinas Kesehatan' />Kepala Dinas Kesehatan</p>-->
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register
                            </button>
                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>