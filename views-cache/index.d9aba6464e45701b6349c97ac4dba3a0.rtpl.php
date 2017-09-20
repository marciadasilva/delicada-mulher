<?php if(!class_exists('Rain\Tpl')){exit;}?>
<main>
<!-- capa -->
<div class="capa">
    <!--<div class="texto-capa">
        <h1>Delicada Mulher</h1>
        <a href=""class="btn btn-custom btn-roxo btn-lg">Ofertas</a>
        <a href=""class="btn btn-custom btn-branco btn-lg">Agende uma visita</a>
    </div>-->

    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li onclick="change_color_item(1)" data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li onclick="change_color_item(2)" data-target="#carousel-example" data-slide-to="1"></li>
            <li onclick="change_color_item(3)" data-target="#carousel-example" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <a href="#"><img src="../res/site/img/banner.png" /></a>
                <div class="carousel-caption">
                    <!-- <h3>Meow</h3>
                    <p>Just Kitten Around</p>-->
                </div>
            </div>
            <div class="item">
                <a href="#"><img src="../res/site/img/banner.png" /></a>
                <div class="carousel-caption">
                    <!-- <h3>Meow</h3>
                    <p>Just Kitten Around</p>-->
                </div>
            </div>
            <div class="item">
                <a href="#"><img src="../res/site/img/banner.png" /></a>
                <div class="carousel-caption">
                    <!--<h3>Meow</h3>
                    <p>Just Kitten Around</p>-->
                </div>
            </div>
        </div>

        <a onclick="change_color()" class="left carousel-control" href="#carousel-example" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a onclick="change_color()" class="right carousel-control" href="#carousel-example" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- /capa -->

<!-- conteúdo -->
<section id="lancamentos">
    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- loja -->
            <div class="loja">
                <!-- texto-loja -->
                <div class="texto-loja">
                    <h3>Feminino</h3>
                </div>
                <!-- /texto-loja -->
            </div>
            <!-- /loja -->

            <!-- albuns -->
            <div class="col-md-3">
                <div class="categoria">
                    <div class="nome-categoria foto-categoria-blusas">
                        <button class="btn btn-categoria">Blusas</button>
                    </div>
                </div>

            </div>
            <!-- /albuns -->

            <!-- servicos -->
            <div class="col-md-3">
                <div class="categoria foto-categoria-calcas">
                    <div class="nome-categoria">
                        <button class="btn btn-categoria">Calças</button>
                    </div>
                </div>
            </div>
            <!-- /servicos -->

            <!-- albuns -->
            <div class="col-md-3">
                <div class="categoria">
                    <div class="nome-categoria foto-categoria-saias">
                        <button class="btn btn-categoria">Saias</button>
                    </div>
                </div>

            </div>
            <!-- /albuns -->

            <!-- servicos -->
            <div class="col-md-3">
                <div class="categoria">
                    <div class="nome-categoria foto-categoria-vestidos">
                        <button class="btn btn-categoria">Vestidos</button>
                    </div>
                </div>
            </div>
            <!-- /servicos -->


        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</section>
<!-- /conteúdo -->

<!-- section-loja -->
<section id="section-loja">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- loja -->
            <div class="loja">
                <!-- texto-loja -->
                <div class="texto-loja">
                    <h3>Ofertas</h3>
                </div>
                <!-- /texto-loja -->
            </div>
            <!-- /loja -->

            <div class="loja">
                <!-- carousel
                       <!-- <Carousel bootstrap> -->
                <div class="maincontent-area">
                    <div class="zigzag-bottom"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="latest-product">
                                    <div class="product-carousel">
                                        <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Ofertas">
                                                <div class="product-hover">
                                                    <a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="add-to-cart-link"><i class="fa fa-shopping-bag"></i> Comprar</a>
                                                    <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="view-details-link"><i class="fa fa-link"></i> Ver Detalhes</a>
                                                </div>
                                            </div>

                                            <h2><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></h2>

                                            <div class="product-carousel-price">
                                                <ins>R$<?php echo formatPrice($value1["vlprice"]); ?></ins>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End main content area -->
                <!-- /carousel -->

            </div>
            <!-- /loja -->
        </div>
        <!-- row -->
    </div>
    <!-- /container -->
</section>
<!-- /section-loja -->

</main>