<?= $this->extend('user/layout/templateDaftarBarang'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <img src="<?= base_url('assets/images/produk/' . $produk['id'] . '/' . $produk['gambar']); ?>" class="img-top"
        alt="<?= $produk['nama'] ?>" width="500">
    <h1 class="h1"><?= $produk['nama'] ?></h1>

    <h3>RP.
        <?php if (($produk['promo']) == 0)
            echo $produk['harga'] ?>
        <?php if (($produk['promo']) > 0)
        
            echo ($produk['harga'] - ($produk['harga'] * ($produk['promo'] / 100)) )?>
    </h3>

    <div>
        <p><?= $produk['deskripsi'] ?></p>
        <h5>Ukuran : <?= $produk['ukuran'] ?></h5>
        <h5>Berat : <?= $produk['berat'] ?></h5>
    </div>
    <div>
        <div>
            <form id="myForm" class="form-outline" method="post" enctype="multipart/form-data">
                <label class="form-label mr-sm-2" for="inputNumber">Jumlah (1-5):</label>
                <input class="form-control mr-sm-2" placeholder="ukuran" aria-label="ukuran" value="1" type="number"
                    id="jumlah" name="jumlah" max="5" min="1" />
                <button class="btn btn-primary" type="submit"
                    onclick="setAction('<?= base_url('/user/pembayaran/' . $produk['slug']) ?>')">Beli</button>
                <button class="btn btn-primary" type="submit"
                    onclick="setAction('<?= base_url('/user/keranjang/' . $produk['id']) ?>')">Keranjang</button>
            </form>

        </div>
    </div>

</div>



<script>
document.querySelector('form').addEventListener('submit', function(event) {
    var inputNumber = document.getElementById('jumlah').value;
    if (inputNumber < 1 || inputNumber > 5) {
        event.preventDefault(); // Mencegah pengiriman form jika validasi gagal
        alert('Nilai input harus berada antara 1 dan 5.');
    }
});
</script>

<script>
function setAction(action) {
    document.getElementById('myForm').action = action;
}
</script>

<?= $this->endSection() ?>