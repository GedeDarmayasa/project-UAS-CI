<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <div id="content-wrapper">
            <div class="container-fluid">
                <?php $this->load->view("admin/_partials/breadcrumb.php")
                ?>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?></div>
                <?php endif; ?>
                <!-- Card -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/student/')
                                    ?>"><i class="fas fa-arrow-left"></i>
                            Back</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <!-- Note: atribut action dikosongkan, artinya
action-nya akan diproses
oleh controller tempat vuew ini
digunakan. Yakni index.php/admin/products/edit/ID --->
                            <input type="hidden" name="id" value="<?php echo $mahasiswa->id ?>" />
                            <div class="form-group">
                                <label for="nama_mahasiswa">nama_mahasiswa*</label>
                                <input class="form-control <?php echo form_error('nama_mahasiswa') ? 'is-invalid' : '' ?>" type="text" name="nama_mahasiswa" placeholder="nama_mahasiswa" value="<?php echo $mahasiswa->nama_mahasiswa ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_mahasiswa') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="NIM">NIM*</label>
                                <input class="form-control <?php echo form_error('NIM') ? 'is-invalid' : '' ?>" type="number" name="NIM" min="0" placeholder="NIM" value="<?php echo $mahasiswa->NIM ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('NIM') ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="tanggal_lahir">tanggal_lahir*</label>
                                <input class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid' : '' ?>" type="date" name="tanggal_lahir" placeholder="tanggal_lahir" value="<?php echo $mahasiswa->tanggal_lahir ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal_lahir') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jurusan">jurusan*</label>
                                <input class="form-control <?php echo form_error('jurusan') ? 'is-invalid' : '' ?>" type="text" name="jurusan" placeholder="jurusan" value="<?php echo $mahasiswa->jurusan ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jurusan') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">alamat*</label>
                                <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="alamat" value="<?php echo $mahasiswa->alamat ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">email*</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="email" name="email" placeholder="email" value="<?php echo $mahasiswa->email ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_telepon">no_telepon*</label>
                                <input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid' : '' ?>" type="text" name="no_telepon" placeholder="no_telepon" value="<?php echo $mahasiswa->no_telepon ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telepon') ?>
                                </div>
                            </div>
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>
                    </div>
                    <div class="card-footer small text-muted">
                        * required fields
                    </div>
                </div>
                <!-- /.container-fluid -->
                <!-- Sticky Footer -->
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <?php $this->load->view("admin/_partials/scrolltop.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>