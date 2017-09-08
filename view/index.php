<?php include_once("header.php");?>

<!-- capa -->
<div class="capa">
    <div class="texto-capa">
        <h1>Delicada Mulher</h1>
        <a href=""class="btn btn-custom btn-roxo btn-lg">Ofertas</a>
        <a href=""class="btn btn-custom btn-branco btn-lg">Agende uma visita</a>
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
                    <h3>lançamentos</h3>
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
                <div class="categoria">
                    <div class="nome-categoria foto-categoria-calcas">
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
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-ofertas">
                        <div class="item active">
                            <img src="img/l1.jpg" alt="Pose 1" class="img-responsive">
                        </div>

                        <div class="item">
                            <img src="img/l2.gif" alt="Pose 2" class="img-responsive">
                        </div>

                        <div class="item">
                            <img src="img/l3.jpg" alt="Pose 3" class="img-responsive">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- /carousel -->

            </div>
            <!-- /loja -->
        </div>
        <!-- row -->
    </div>
    <!-- /container -->
</section>
<!-- /section-loja -->


    <!--

    <div class="container" id="destaques">
        <div class="row text-center">
            <h2>Lançamentos</h2>
            <hr>
        </div>

        <button type="button" id="btn-news-prev"><i class="fa fa-angle-left"></i></button>
        <button type="button" id="btn-news-next"><i class="fa fa-angle-right"></i></button>

        <div class="row thumbnails">
            <div class="item">
                <div class="item-inner">
                    <img src="img/pose1.jpg" alt="vestido">
                    <h3>Os melhores vestidinhos que você vai ver na sua vida!</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

            <div class="item">
                <div class="item-inner">
                    <img src="img/pose2.jpg" alt="vestido">
                    <h3>Os melhores vestidinhos que você vai ver na sua vida!</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

            <div class="item">
                <div class="item-inner">
                    <img src="img/pose2.jpg" alt="vestido">
                    <h3>Os melhores vestidinhos que você vai ver na sua vida!</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

            <div class="item">
                <div class="item-inner">
                    <img src="img/pose1.jpg" alt="vestido">
                    <h3>Os melhores vestidinhos que você vai ver na sua vida!</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

            <div class="item">
                <div class="item-inner">
                    <img src="img/pose2.jpg" alt="vestido">
                    <h3>Os melhores vestidinhos que você vai ver na sua vida!</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

        </div>
    </div>

    <div id="visita">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Agenda já a sua visitinha!</p>
                </div>

                <div class="col-md-6">
                    <p>Aqui tem um formulário, mas ele nem me viu...</p>
                </div>
            </div>


        </div>
    </div>

    <div class="container" id="lojas">
        <div class="row text-center">
            <h2>Roupas de Qualidade, compradas nas melhores lojas!</h2>
            <hr>
        </div>

        <div class="row thumbnails">
            <div class="item">
                <div class="item-inner">
                    <img src="img/marivest.png" alt="vestido">
                    <h3>Marivest Modas</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

            <div class="item">
                <div class="item-inner">
                    <img src="img/rosebombom.png" alt="vestido">
                    <h3>Rosê Bombom</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

            <div class="item">
                <div class="item-inner">
                    <img src="img/marivest.png" alt="vestido">
                    <h3>Marivest Modas</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

            <div class="item">
                <div class="item-inner">
                    <img src="img/rosebombom.png" alt="vestido">
                    <h3>Rosê Bombom</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

            <div class="item">
                <div class="item-inner">
                    <img src="img/shop.jpg" alt="vestido">
                    <h3>Os melhores vestidinhos que você vai ver na sua vida!</h3>
                    <time>Agosto, 2017</time>
                </div>
            </div>

        </div>
    </div>

</section>-->

<?php include_once("footer.php");?>