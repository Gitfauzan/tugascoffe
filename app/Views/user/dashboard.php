<?= $this->extend('user/layout/template'); ?>
<?= $this->section('content'); ?>

<style>
    .card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card-body {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .btn-container {
        margin-top: auto;
    }

    .btn-container .btn {
        width: 100%;
    }
</style>

<div class="container">
    <h2>Featured Products Coffee</h2>
    <div class="row">
        <?php foreach ($produk as $p) : ?>
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card mx-auto" style="height: 100%;">
                    <?php if (!empty($p['gambar'])) : ?>
                        <img src="<?= base_url('assets/images/produk/' . $p['id'] . '/' . $p['gambar']); ?>" class="card-img-top" alt="<?= $p['nama'] ?>" width="100%" height="250px">
                    <?php else : ?>
                        <div class="placeholder-image" style="height: 250px;"></div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h4 class="card-title"><?= $p['nama'] ?></h4>
                        <?php if (($p['promo']) == 0) : ?>
                            <h5 class="card-text" style="font-weight: bolder;">Rp. <?= $p['harga'] ?></h5>
                        <?php else : ?>
                            <h5 class="card-text" style="font-weight: bolder;">Rp.
                                <?= $p['harga'] - ($p['harga'] * ($p['promo'] / 100)) ?></h5>

                            <div class="row">
                                <div class="col-3">
                                    <p class="btn btn-sm btn-outline-danger"><?= $p['promo'] ?>%</p>
                                </div>
                                <div class="col-9">
                                    <small class="card-text" style="text-decoration: line-through">Rp.
                                        <?= $p['harga'] ?></small>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="btn-container">
                            <a href="/user/dashboard/<?= $p['slug'] ?>" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection(); ?>