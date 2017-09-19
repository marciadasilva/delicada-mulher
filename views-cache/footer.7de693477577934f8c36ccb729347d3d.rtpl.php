<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- rodapé -->
<footer id="rodape">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-2">
                <a href="index.php" class="navbar-brand">
                    <img class="img-logo" src="../res/site/img/logo.png" alt="DelicadaLogo" id="logotipo">
                </a>
            </div>

            <div class="col-md-2">
                <h4>Empresa</h4>
                <ul class="nav">
                    <li><a href="#" data-toggle="modal" data-target="#janela">Sobre</a></li>
                    <li><a href="#">Promoções</a></li>
                    <li><a href="#">Cartões</a></li>
                    <li><a href="#">Novidades</a></li>
                </ul>
            </div>

            <div class="col-md-2">
                <h4>Categorias</h4>
                <ul class="nav">
                    <?php require $this->checkTemplate("categories-menu");?>
                </ul>
            </div>

            <div class="col-md-2">
                <h4>Links Uteis</h4>
                <ul class="nav">
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Visita</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <ul class="nav">
                    <li class="item-rede-social"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    <li class="item-rede-social"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="item-rede-social"><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>

        </div>
        <!-- row -->
    </div>
    <!-- /container -->
</footer>
<!-- /rodapé -->



<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="/res/site/js/owl.carousel.min.js"></script>
<script src="/res/site/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="/res/site/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="/res/site/js/main.js"></script>

<!-- arquivo de efeito-->
<script type="text/javascript" src="/res/site/js/efeitos.js"></script>

<!-- Slider -->
<script type="text/javascript" src="/res/site/js/bxslider.min.js"></script>
<script type="text/javascript" src="/res/site/js/script.slider.js"></script>
</body>

</html>