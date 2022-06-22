<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/styles/bootstrap-grid.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../View/styles/style.css">
    <link rel="shortcut icon" href="View/media/Mask Group.png" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body>
<header class="container-fluid m-0 pb-4 header">
    <div class="header-background m-0">
        <div class="gradient p-0">
            <div class="fill">
            </div>
        </div>
    </div>
    <div class="container-xl header-menu">
        <nav class="row navbar-expand-md navbar dish-nav p-0">

            <div class="header-nav col-7 collapse collapse-horizontal navbar-collapse p-0" id="collapseWidthExample">
                <ul class="navbar-nav flex-column flex-md-row container-fluid d-flex justify-content-between p-0">
                    <li class="nav-item d-flex justify-content-center md-1">
                        <a href="{{route('landing')}}" class="nav-text d-flex align-items-center">
                            <img src="../View/media/home 1.svg" alt="main">
                            Home
                        </a>
                    </li>
                    <li class="nav-item d-flex justify-content-center px-md-3">
                        <a href="{{route('about')}}" class="nav-text d-flex align-items-center">
                            <img src="../View/media/info 1.svg" alt="about">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item d-flex justify-content-center px-md-3">
                        <a href="{{route('basket')}}" class="basket">
                            <img src="../View/media/shopping-cart.svg" alt="Basket">
                        </a>
                        <a href="{{route('basket')}}" class="nav-text d-flex align-items-center d-md-none">
                            <img src="../View/media/shopping-cart.svg" alt="basket">
                            Order bin
                        </a>
                    </li>
                </ul>
                <button class="menu-closer" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="true" aria-controls="collapseWidthExample">
                    <img src="../View/media/close-b.svg" alt="menu closer">
                </button>
            </div>
        </nav>
        @if (request()->is('/'))
            <div class="row mt-4 align-items-center">
                <div class="intro col-6 p-0">
                    <h2>
                        Доставимо Вашу улюблену їжу  гарячою та смачною!
                    </h2>
                    <p class="description mt-2">
                        Подолаємо голод разом!
                    </p>
                    <a href="{{route('menu')}}" class="d-block header-btn mt-4">
                        ЗАМОВИТИ
                    </a>
                </div>
                <aside class="header-image col-6  d-flex justify-content-end p-0">
                    <img class = "decor-dish" src="../View/media/decorDish.png" alt="DecorDish">
                </aside>
            </div>
        @endif
    </div>
</header>
@yield("main-content")
<footer class="footer conteiner-fluid ">
    <div class="footer-data container-xl py-3 mx-auto d-flex justify-content-between align-items-center flex-md-row flex-column">
        <div class="footer-text">
            <div class="contacts">
                <p>
                    F&D
                </p>
                <p>
                    +380 (63) 639-14-78
                </p>
            </div>
            <div class="city">
                <p>
                    City:
                </p>
                <p>
                    irpin
                </p>
            </div>
            <div class="address">
                <p>
                    Address:
                </p>
                <p>
                    Soborna st., 12
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="View/JS/expander.js"></script>
</body>
</html>
