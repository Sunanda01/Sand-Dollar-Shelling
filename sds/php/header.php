<!--finalllllllllll-->
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"style="font-size:50px;"></i> Shopping Cart
            </h3>
        </a>
        

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">

                    <a href="index.php"><button style="padding: 12px;
    border-radius: 4px;border:2px solid #ccffe67a; cursor:pointer;
    background: #ccffe67a;font-size:22px"><i class="fas fa-home"></i> HOME
                        </button></a>

                        <a href="cart.php"><button style="padding: 12px;
    border-radius: 4px;border:2px solid #ccffe67a; cursor:pointer;
    background: #ccffe67a;font-size:22px"><i class="fas fa-shopping-cart"></i> Cart :
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                        </button></a>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>





