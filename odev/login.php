<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <script src="https://kit.fontawesome.com/a390e7cea1.js" crossorigin="anonymous"></script>



</head>

<body class="login">

    <nav class="navbar bg-dark navbar-dark navbar-expand-lg sticky-top opacity ">

        <a href="hakkimda.html" class="navbar-brand ">
            <img id="logo" src="img/logom.png" alt="">
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="collapsibleNavbar">

            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a href="hakkimda.html" class="nav-link">
                        <h3>Hakkımda </h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="ozgecmisim.html" class="nav-link">
                        <h3>Özgeçmişim</h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="sehrim.html" class="nav-link">
                        <h3>Şehrim</h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="mirasimiz.html" class="nav-link">
                        <h3>Mirasımız</h3>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="iletisim.html" class="nav-link">
                        <h3>İletişim</h3>
                    </a>
                </li>


                <li id="lgn" class="nav-item ">
                    <a href="login.html" class="nav-link">
                        <h3>Login</h3>
                    </a>
                </li>



            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="row">

            <div class="col-lg-3"></div>

            <div class="col-lg-6">
                <form action="loginn.php" method="POST" class="form-group pt-5 ">
                    <table>
                        <tr>
                            <td>
                                <h1>Kullanıcı Adı : </h1>
                            </td>
                            <td><input type="email" name="kullaniciadi" class="form-control-lg "  required></td>
                        </tr>
                        <tr>
                            <td>
                                <h1>Şifre : </h1>
                            </td>
                            <td><input type="password" name="sifre" class="form-control-lg" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value=giris class="btn btn-secondary btn-lg"></td>
                        </tr>
                    </table>
                </form>

            </div>

            <div class="col-lg-3"></div>

        </div>

    </div>

    <footer style=" position: absolute; bottom: 0;">
        <div id="share">


            <a href="https://www.linkedin.com/in/g%C3%BCrkan-kaya-3a49ab162?trk=people-guest_people_search-card">
                <i class="fab fa-linkedin fa-3x pr-3"></i>
            </a>

            <a href="https://www.instagram.com/qurkankaya">
                <i class="fab fa-instagram fa-3x"></i>
            </a>
            <h5 class="header">Gürkan Kaya 2020</h5>
        </div>

    </footer>



    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>