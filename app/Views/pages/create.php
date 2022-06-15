<?= $this->extend('layout/defaultheadfoot'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Tambah postingan baru</h2>

            <form action="/pages/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="title" class="col-4 col-form-label">Title</label>
                    <div class="col-8">
                        <input id="title" name="title" placeholder="Isikan title" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="textpos" class="col-4 col-form-label">Isi postingan</label>
                    <div class="col-8">
                        <textarea id="textpos" name="textpos" cols="40" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gambar" class="col-4 col-form-label">Gambar</label>
                    <div class="col-8">
                        <input id="gambar" name="gambar" placeholder="Isikan url gambar" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>