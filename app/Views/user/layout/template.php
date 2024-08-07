<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>User Dashboard</title>
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
            background-color: #f3ddb2;
        }
        #search{
            color: #654321;
            border-color: #654321;
        }

        .card {
            margin: 20px;
            min-width: max-content;
            min-height: 400px;
        }

        .menu-item {
            list-style-type: none;
            margin: 20px;
            padding: 0;

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

        .placeholder-image {
            background-color: #e9e9e9;
            height: 200px;
            /* Sesuaikan tinggi dengan kebutuhan */
        }

        @media (max-width: 575.98px) {

            /* Pengaturan untuk layar < 576px */
            .card-column {
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {

            /* Pengaturan untuk layar 576px - 767px */
            .card-column {
                flex-basis: 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {

            /* Pengaturan untuk layar 768px - 991px */
            .card-column {
                flex-basis: 33.3333333333%;
                max-width: 33.3333333333%;
            }
        }
    </style>
</head>


<header>
    <?php $session = session() ?>
    <div class="container">
        <h1>Bean Caffeine</h1>
    </div>


    <a href="<?= base_url('/user/dashboard') ?>" style="color: white; text-decoration: none; border-bottom: none;">Dashboard</a>
    &nbsp;&nbsp;&nbsp;
    <a href="<?= base_url('/user/DaftarBelanja') ?>" style="color: white; text-decoration: none; border-bottom: none;">DaftarBelanja</a>
    &nbsp;&nbsp;&nbsp;
    <a href="<?= base_url('/user/Daftarkeranjang') ?>" style="color: white; text-decoration: none; border-bottom: none;"><img src="<?= base_url('img/Cart.png'); ?>" alt="Keranjang"></a>
    &nbsp;&nbsp;&nbsp;
    <div class="profile" onclick="toggleDropdown()">
        <div class="profile-name"><?php echo $session->get('username') ?></div>
        <p>&nbsp;&nbsp;&nbsp;</p>
        <div class="profile-image"><img src="/img/undraw_profile.svg"></div>

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
        <div class="d-flex">
            <div class="sidebar">
                <ul class="menu-item">

                    <li>
                        <div>
                            <div class="d-flex">
                                <form class="d-flex" action="" method="GET" enctype="multipart/form-data">

                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                                    <button class="btn btn-outline my-2 my-sm-0" type="submit" id="search">Search</button>
                                </form>
                            </div>
                        </div>
                    </li>

                    <li style="margin-top:20px ;">
                        <form class="form-group" action="" method="GET" enctype="multipart/form-data">
                            <label for="ukuran">Filter Ukuran</label>
                            <select class="form-control" name="ukuran" onchange="this.form.submit()">
                                <option selected value="">None</option>
                                <?php foreach ($ukuran as $p) : ?>
                                    <option value="<?= $p->name ?>"><?= $p->name  ?></option>
                                <?php endforeach ?>
                            </select>
                        </form>
                    </li>

                    <li>

                    </li>

                </ul>
            </div>
            <div class="content">

                <?= $this->renderSection('content'); ?>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <!-- Script profile dropdown -->
    <script>
        function toggleDropdown() {
            var profile = document.querySelector('.profile');
            profile.classList.toggle('active');
        }
    </script>
</body>
<footer class="align-self-end">
    <div>
        <p>&copy; 2023 My E-commerce Store. All rights reserved.</p>
    </div>
</footer>





</html>
