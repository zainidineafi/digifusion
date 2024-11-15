<?= $this->extend('admin/template/template'); ?>
<?= $this->Section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit Meta</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">
                        <form action="<?= base_url('admin/meta/proses_edit/' . $meta_data->id_seo) ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Halaman</label>
                                        <input type="text" class="form-control" id="nama_halaman" name="nama_halaman" value="<?= $meta_data->nama_halaman; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title ID</label>
                                        <input type="text" class="form-control" id="meta_title_id" name="meta_title_id" value="<?= $meta_data->meta_title_id; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description ID</label>
                                        <input type="text" class="form-control" id="meta_description_id" name="meta_description_id" value="<?= $meta_data->meta_description_id; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title EN</label>
                                        <input type="text" class="form-control" id="meta_title_en" name="meta_title_en" value="<?= $meta_data->meta_title_en; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description EN</label>
                                        <input type="text" class="form-control" id="meta_description_en" name="meta_description_en" value="<?= $meta_data->meta_description_en; ?>">
                                    </div>
                                   
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <div class="col">
                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= session()->getFlashdata('success') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content'); ?>