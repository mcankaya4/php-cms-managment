<?php require_once panelView("static/header") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Ayarlar</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <?= $alert ?? null; ?>
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Site Genel Ayarları</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="site_title">Title</label>
                                    <input type="text" class="form-control" id="site_title" name="title"
                                           value="<?= $getData->title ?? null ?>">
                                </div>
                                <div class="form-group">
                                    <label for="site_keywords">Keywords</label>
                                    <input type="text" class="form-control" id="site_keywords" name="keywords"
                                           value="<?= $getData->keywords ?? null ?>">
                                </div>
                                <div class="form-group">
                                    <label for="site_description">Description</label>
                                    <textarea type="text" class="form-control" id="site_description" name="description"
                                              rows="4"><?= $getData->description ?? null ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="site_bakim">Site bakımda mı?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radio-evet" type="radio" name="maintenance"
                                               value="1" <?= $getData->maintenance == 1 ? "checked" : null ?>>
                                        <label for="radio-evet" class="form-check-label">Evet</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radio-hayir" type="radio" name="maintenance"
                                               value="0" <?= $getData->maintenance == 0 ? "checked" : null ?>>
                                        <label for="radio-hayir" class="form-check-label">Hayır</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Güncelle</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require_once panelView("static/footer") ?>
