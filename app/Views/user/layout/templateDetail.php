<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>User Pembayaran</title>
    <style>
    body{
            background-color: #fff8dc;
        }
    header {
        background-color: #654321;
        color: #fff;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    footer {
        background-color: #5E503F;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .sidebar {
        width: 250px;
        background-color: #f8f9fa;
    }

    .card {
        margin: 20px;
        min-width: max-content;
        min-height: 350px;
    }

    .menu-item {
        list-style-type: none;
        margin: 20px;
        padding: 0;

    }

    .payment-options {
        text-align: left;
    }

    .payment-card {
        display: inline-block;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 150px;
    }


    .payment-card p {
        margin-top: 10px;
    }

    h1 {
        color: #FFF;
        font-size: 60px;
        font-family: Inter;
        font-style: italic;
    }

    /* CSS PROFIL */
    .profile {
        display: flex;
        align-items: center;
        position: relative;

        cursor: pointer;
    }

    .profile-image {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #fff;
        margin-right: 10px;
    }

    .profile-name {
        font-weight: bold;
    }

    .profile-dropdown {
        position: absolute;
        top: 100%;
        right: 0;
        background-color: #f9f9f9;
        color: #333;
        padding: 10px;
        min-width: 150px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        display: none;
        z-index: 1;
    }

    .profile.active .profile-dropdown {
        display: block;
    }

    .profile-dropdown-item {
        padding: 5px;
        cursor: pointer;
    }

    h1 {
        color: #FFF;
        font-size: 60px;
        font-family: Inter;
        font-style: italic;
    }

    .thank-you-image {
        width: 200px;
        height: auto;
        margin: 20px auto;
    }

    .konfirmasi {
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 20px;
    }
    </style>
</head>


<header>
    <?php $session = session() ?>
    <div class="container">
        <h1>Bean Caffeine</h1>
    </div>

    <a href="<?= base_url('/user/dashboard') ?>"
        style="color: white; text-decoration: none; border-bottom: none;">Dashboard</a>
    &nbsp;&nbsp;&nbsp;
    <a href="<?= base_url('/user/DaftarBelanja') ?>"
        style="color: white; text-decoration: none; border-bottom: none;">DaftarBelanja</a>
    &nbsp;&nbsp;&nbsp;
    <a href="<?= base_url('/user/Daftarkeranjang') ?>"
        style="color: white; text-decoration: none; border-bottom: none;"><img src="<?= base_url('img/Cart.png'); ?>"
            alt="Keranjang"></a>
    &nbsp;&nbsp;&nbsp;

    <div class="profile" onclick="toggleDropdown()">
        <div class="profile-name"><?php echo $session->get('username') ?></div>
        <p>&nbsp;&nbsp;&nbsp;</p>
        <div class="profile-image"><img src="/img/undraw_profile.svg"></div>

        <?php  ?>
        <div class="profile-dropdown">
            <?php if ($session->get('username')) : ?>
            <div class="profile-dropdown-item"><a class="btn btn-prymary" href="<?= base_url('/editProfile') ?>">Edit
                    Profil</a></div>
            <div class="profile-dropdown-item"><a class="btn btn-prymary" href="<?= base_url('/logout') ?>">Logout</a>
            </div>
            <?php else : ?>
            <div class="profile-dropdown-item"><a class="btn btn-prymary" href="<?= base_url('/login') ?>">Login</a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</header>


<body>
    <div>

        <div class="content">

            <?= $this->renderSection('content'); ?>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>
<footer class="align-self-end">
    <div>
        <p>&copy; 2023 My E-commerce Store. All rights reserved.</p>
    </div>
</footer>





</html>
