<header class="container-fluid m-0 pb-4 header">

    <div class="container-xl header-menu">
        <nav class="row navbar-expand-md navbar dish-nav p-0">
            <div class="col-3 d-flex align-items-center p-0">
                <img src="View/media/F&D.jpg" alt="logo" class="logo">
            </div>
            <div class="header-nav col-7 collapse collapse-horizontal navbar-collapse p-0" id="collapseWidthExample">
                <ul class="navbar-nav flex-column flex-md-row container-fluid d-flex justify-content-between p-0">

                    <li class="nav-item d-flex justify-content-center md-1">
                        <form action="." method="GET">
                            <button type="submit" name="page" value="landing" class="nav-text d-flex align-items-center">
                                <img src="View/media/home 1.svg" alt="main">
                                Home
                            </button>
                        </form>
                    </li>
                    <li class="nav-item d-flex justify-content-center px-md-3">
                        <form action=".">
                            <button type="submit" name="page" value="about" class="nav-text d-flex align-items-center">
                                <img src="View/media/info 1.svg" alt="about">
                                Contact
                            </button>
                        </form>
                    </li>
                    <li class="nav-item d-flex justify-content-center px-md-3">
                        <form action=".">
                            <button type="submit" name="page" value="basket" class="basket">
                                <img src="View/media/shopping-cart.svg" alt="Basket">
                            </button>
                            <button type="submit" name="page" value="basket" class="nav-text d-flex align-items-center d-md-none">
                                <img src="View/media/shopping-cart.svg" alt="basket">
                                Order bin
                            </button>
                        </form>
                    </li>
                </ul>
                <button class="menu-closer" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="true" aria-controls="collapseWidthExample">
                    <img src="View/media/close-b.svg" alt="menu closer">
                </button>
            </div>
        </nav>
        <?php
        if (($_GET['page'] == "landing" || !isset($_GET['page'])) && ($page == "landing" || !isset($page))){ ?>
        <div class="row mt-4 align-items-center">
            <div class="intro col-6 p-0">
                <h2>
                    Don’t wanna make you have a bad day.
                </h2>
                <p class="description mt-2">
                    Our job is delivering a delicious food with fast , free delivery and easy.
                </p>
                <form action=".">
                    <button class="d-block header-btn mt-3" type="submit" name="page" value="menu">
                        Order now
                    </button>
                </form>
            </div>
        </div>
        <?php }?>
    </div>
</header>