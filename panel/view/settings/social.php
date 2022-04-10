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
                            <h3 class="card-title">Sosyal Medya Ayarları</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="facebook">Facebook Adresi</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                           value="<?= $getData->facebook ?? null ?>">
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter Adresi</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter"
                                           value="<?= $getData->twitter ?? null ?>">
                                </div>
                                <div class="form-group">
                                    <label for="instagram">İnstagram Adresi</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram"
                                           value="<?= $getData->instagram ?? null ?>">
                                </div>
                                <div class="form-group">
                                    <label for="youtube">Youtube Adresi</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube"
                                           value="<?= $getData->youtube ?? null ?>">
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
