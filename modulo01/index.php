<!DOCTYPE html>
<html lang="pt-br">

<?php
include('layout/header.php');
?>

<body>

    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- menu lateral  -->
    <?php
    include('layout/menu.php');
    ?>
    <!-- FIM do menu lateral   -->

    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">

                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">Objetivos</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->
                        <br>

                        <ul class="list">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>
                                Entender o que é usabilidade;
                            </li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i
                                    class="fa fa-dot-circle text-success"></i>
                                Conhecer as heurísticas de Nielsen;
                            </li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i
                                    class="fa fa-dot-circle text-success"></i>
                                Aprender como avaliar usabilidade.
                            </li>
                        </ul>

                        <!-- Botões de navegação -->
                        <div class="text-center">
                            <a href="topico01.php" class="btn btn-outline-success" role="button"
                                aria-pressed="true">Próximo <i class="bi bi-chevron-right"></i></a>
                        </div>


                        <div id="progress-bar"></div>
                    </div>
                    <?php
                    include('layout/footer.php');
                    ?>
</body>

</html>