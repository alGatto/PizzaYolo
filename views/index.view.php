<?php include "partials/_header.php"; ?>

<body>
<?php include "partials/_navbar.php"; ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php
    var_dump();
?>
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="index.php"><i class="ion-pizza" style="color: white; font-size: 100px;"></i></a>
                <h2>PIZZAYOLO</h2>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!-- Shop Page Start -->
<div class="shop-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-menu-top text-center">
                    <ul>
                        <li><a href="#">Toutes les pizzas</a></li>
                        <li><a href="#">Les incontournables</a></li>
                        <li><a href="#">Les sauces tomates</a></li>
                        <li><a href="#">Les crémeuses</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="shop-tab-list clearfix">
                <div class="shop-left-tab">
                    <div class="shop-tab-pill pull-left">
                        <ul>
                            <li class="active" id="left"><a data-toggle="pill" href="#home"><i class="ion-grid"></i><span></span></a></li>
                            <li><a data-toggle="pill" href="#menu1"><i class="ion-navicon-round"></i><span></span></a></li>
                            <li>
                                <input type="text" placeholder="Search">
                            </li>
                        </ul>
                    </div>
                    <!--<div class="shop-tab-pill pull-right">
                        <ul>
                            <li class="product-size-deatils">
                                <div class="show-label">
                                    <select>
                                        <option selected="selected" value="position">Details sorting</option>
                                        <option value="Name">Name</option>
                                        <option value="Price">Price</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <div class="tab-content">
                <div class="row tab-pane fade in active" id="home">
                    <?php
                    $products = $DB->query('SELECT * FROM products');
                    foreach ($products as $product):
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-product-box">
                            <div class="product-box-img">
                                <a href="#">
                                    <img alt="" src="<?= $product->img_product;?>">
                                </a>
                                <div class="product-price">
                                    <p><span>€</span><?= $product->price;?></p>
                                </div>
                                <div class="shop-title">
                                    <a href="#"><?= $product->name;?></a>
                                </div>
                                <div class="item-action">
                                    <a href="#" class="action-btn">
                                        <i class="ion-ios-cart"></i>
                                        <span>COMMANDER</span>
                                    </a>
                                    <a href="#" class="action-btn">
                                        <i class="ion-eye"></i>
                                        <span>VOIR</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $products = $DB->query('SELECT * FROM products');
                            foreach ($products as $product):
                            ?>
                            <div class="shop-list-single">
                                <div class="shop-list-left">
                                    <a href="#"><img src="<?= $product->img_product;?>" alt="" /></a>
                                </div>
                                <div class="shop-list-right">
                                    <div class="left-content">
                                        <a href="#"><h2><?= $product->name;?></h2></a>
                                        <span class="new-price"><?= $product->price;?>€</span>
                                    </div>
                                    <div class="product-desc">
                                        <p><?= $product->descr;?></p>
                                    </div>
                                    <a class="btn-default btn-about" href="#">COMMANDER</a>
                                </div>
                            </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-pagination pull-right">
                <ul>
                    <li><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Shop Page End -->
<!-- Footer Area Start -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2  col-md-2 col-sm-4">
                <div class="single-footer">
                    <h2 class="footer-title">Information</h2>
                    <ul class="footer-list">
                        <li><a href="about.html">A propos</a></li>
                        <li><a href="#">Information de livraison</a></li>
                        <li><a href="#">Termes & Conditions</a></li>
                        <li><a href="#">Préparation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                <div class="single-footer">
                    <h2 class="footer-title">Mon compte</h2>
                    <ul class="footer-list">
                        <li><a href="my-account.html">Mon compte</a></li>
                        <li><a href="account.html">Login</a></li>
                        <li><a href="cart.html">Mon panier</a></li>
                        <li><a href="checkout.html">Mes commandes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                <div class="single-footer">
                    <h2 class="footer-title">Aide</h2>
                    <ul class="footer-list">
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-6">
                <div class="single-footer footer-newsletter">
                    <h2 class="footer-title">Notre Newsletter</h2>
                    <p>Consectetur adipisicing elit se do eiusm od tempor incididunt ut labore et dolore magnas aliqua.</p>
                    <form method="post" action="#">
                        <div>
                            <input type="text" placeholder="Votre adresse email">
                        </div>
                        <button type="submit" class="btn-default btn-search">SOUSCRIRE</button>
                        <i class="ion-paper-airplane" aria-hidden="true"></i>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="single-footer no-margin">
                    <h2 class="footer-title">Business Hours</h2>
                    <ul class="footer-list">
                        <li><a href="my-account.html">Mon-Mar..............................8am-11am</a></li>
                        <li><a href="account.html">Jeu-Dim..............................8pm-11pm</a></li>
                        <li><a href="account.html">Mer..............................Fermé</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "partials/_footer.php"; ?>
<?php include  "partials/_scripts.php"; ?>
