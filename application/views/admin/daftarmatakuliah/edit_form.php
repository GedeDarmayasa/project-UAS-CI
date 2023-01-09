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
                        <a href="<?php echo site_url('admin/matakuliah/')
                                    ?>"><i class="fas fa-arrow-left"></i>
                            Back</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <!-- Note: atribut action dikosongkan, artinya
action-nya akan diproses
oleh controller tempat vuew ini
digunakan. Yakni index.php/admin/products/edit/ID --->
                            <input type="hidden" name="id" value="<?php echo $daftarmatakuliah->id ?>" />
                            <div class="form-group">
                                <label for="nama_mk">nama_mk*</label>
                                <input class="form-control <?php echo form_error('nama_mk') ? 'is-invalid' : '' ?>" type="text" name="nama_mk" placeholder="nama_mk" value="<?php echo $daftarmatakuliah->nama_mk ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_mk') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sks">sks*</label>
                                <input class="form-control <?php echo form_error('sks') ? 'is-invalid' : '' ?>" type="number" name="sks" min="0" placeholder="sks" value="<?php echo $daftarmatakuliah->sks ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('sks') ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="semester">semester*</label>
                                <input class="form-control <?php echo form_error('semester') ? 'is-invalid' : '' ?>" type="number" name="semester" placeholder="semester" value="<?php echo $daftarmatakuliah->semester ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('semester') ?>
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