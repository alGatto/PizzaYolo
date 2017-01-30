<?php include "partials/_header.php"; ?>
<body>
<?php include "partials/_navbar.php"; ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="index.php"><i class="ion-pizza" style="color: white; font-size: 100px;"></i></a>
                <h2>PANIER</h2>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!-- Cart Area Start -->
<div class="cart-main-area section-padding">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h2>Mon panier</h2>
                <p></p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Produits</th>
                                    <th class="s-product-price">Prix</th>
                                    <th class="product-quantity">Quantité</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/img/shop/1.jpg" alt="" />
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">Salmon Salad</a>
                                    </td>
                                    <td class="s-product-price">
                                        <span class="amounte">$65.00</span>
                                    </td>
                                    <td class="product-quantity">
                                        <input type="number" value="1"/>
                                    </td>
                                    <td class="product-subtotal">$65.00</td>
                                    <td class="product-remove">
                                        <a href="#">
                                            <i class="ion-close-round"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="assets/img/shop/2.jpg" alt="" />
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">Fritto Misto</a>
                                    </td>
                                    <td class="s-product-price">
                                        <span class="amounte">$50.00</span>
                                    </td>
                                    <td class="product-quantity">
                                        <input type="number" value="1"/>
                                    </td>
                                    <td class="product-subtotal">$50.00</td>
                                    <td class="product-remove">
                                        <a href="#">
                                            <i class="ion-close-round"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">

                                    <a href="#">Retourner au menu</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>Total du Panier</h2>
                                    <table>
                                        <tbody>
                                        <!--<tr class="cart-subtotal">
                                            <th>Sous-total</th>
                                            <td>
                                                <span class="amount">£215.00</span>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th></th>
                                            <td>
                                                <ul id="shipping_method">
                                                    <li>
                                                        <input type="radio" />
                                                        <label>
                                                            <span class="amount"></span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" />
                                                        <label>

                                                        </label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </td>
                                        </tr>-->
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong>
                                                    <span class="amount">30€</span>
                                                </strong>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th></th>
                                            <td>
                                                <a class="cart-readmore" href="blog-details.html">Valider la commande</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->
<?php include "partials/_footer.php"; ?>
<?php include  "partials/_scripts.php"; ?>