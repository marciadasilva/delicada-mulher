<?php include_once("header.php");?>

<section>

    <div class="container" id="produto-selecionado">
        
        <div id="detalhes-produto-selecionado">
            <div class="item">
                <div class="col-sm-8 col-imagem">
                    <img src="img/produtos/produtos1.jpg" class="img-responsive">
                </div>
                <div class="col-sm-4 col-descricao">
                    <h2>Vestido GG de Viscose</h2>
                    <div class="box-valor">
                        <div class="text-avista text-arial-cinza">no boleto</div>
                        <div class="text-por text-arial-cinza">por</div>
                        <div class="text-reais text-arial-rosa">R$</div>
                        <div class="text-valor text-arial-rosa">1.259</div>
                        <div class="text-valor-centavos text-arial-rosa">, 50</div>
                        <div class="text-parcelas text-arial-cinza">ou em até 4x de R$ 31,21</div>
                        <div class="text-total text-arial-cinza">total a prazo R$ 124,84</div>
                    </div>
                    <a href="#" class="btn btn-comprar text-arial-rosa"><i class="fa fa-shopping-bag"></i> Compre agora</a>
                </div>
            </div>
            
        </div>
        
    </div>


</section>

<?php include_once("footer.php");?>

<script>
    angular.module("shop", []).controller("destaque-controller", function($scope, $http){

        $scope.produtos = [];

        var initCarousel = function(){

            $("#destaque-produtos").owlCarousel({

                autoPlay: 5000,
                items : 1,
                singleItem: true

            });

            var owlDestaque = $("#destaque-produtos").data('owlCarousel');

            $('#btn-destaque-prev').on("click", function(){

                owlDestaque.prev();

            });

            $('#btn-destaque-next').on("click", function(){

                owlDestaque.next();

            });

        };

        $http({
            method: 'GET',
            url: 'produtos'
        }).then(function successCallback(response) {

            $scope.produtos = response.data;

            setTimeout(initCarousel, 1000);

        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });

    });
    $(function(){

        $('.estrelas').each(function(){

            $(this).raty({
                starHalf    : 'lib/raty/lib/images/star-half.png',                                // The name of the half star image.
                starOff     : 'lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
                starOn      : 'lib/raty/lib/images/star-on.png',
                score		: parseFloat($(this).data("score"))
            });

        });

    });
</script>