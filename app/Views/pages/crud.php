    <!-- Custom fonts for this page -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this  -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <?= $this->extend('layout/defaultheadfoot'); ?>
    <?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-2">Kebudayaan indonesia</h1>
                <a href="/pages/create" class="btn btn-primary mt-3">Tambah data baru</a>
                <?php if (session()->getFlashdata('Message')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('Message') ?>
                    </div>

                <?php endif ?>
                <div class="card shadow mt-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> Konten baru </h6>
                    </div>
                    <div class="card-body align-content-md-center">

                        <?php foreach ($post as $p) : ?>
                            <div class="row">
                                <div class="col">
                                    <div class="card mb-3" style="max-width: 700px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src=<?= $p['gambar']; ?> class="card-img">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?= $p['title']; ?></h5>
                                                    <p class="card-text"><?= $p['textpos']; ?></p>
                                                    <p class="card-text"><small class="text-muted"><?= $p['created_at']; ?></small></p>
                                                </div>
                                                <div class="sidebar-divider"></div>
                                                <div class="card-footer">
                                                    <a href="/pages/edit/<?= $p['id']; ?>" class="btn btn-primary">Edit</a>
                                                    <form action="/pages/<?= $p['id']; ?>" method="POST" class="d-inline">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?')">Delete</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>

    <?= $this->endSection(); ?>