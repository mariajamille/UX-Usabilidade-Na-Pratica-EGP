<?php
include('layout/header.php');
?>

<body>

    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->


    <!-- MENU LATERAL COMEÇO -->
    <?php
    include('layout/menu.php');
    ?>
    <!-- FIM MENU LATERAL  -->

    <!-- CONTEUDO INICIO -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!--  Título Pricipal -->
                        <h2 class="Titulo fw-bolder">03 - Heurísticas de Nielsen</h2>

                        <!-- paragrafo com scroll reveal  -->
                        <p class="scrool">Como já foi dito anteriormente, Nielsen consolidou um conjunto de 10
                            heurísticas de usabilidade, que são amplamente utilizadas hoje [8]. No
                            subtópicos a seguir veremos em detalhes cada heurística de forma aplicada a
                            interfaces reais. A lista abaixo apresenta o título em português e em inglês
                            das heurísticas:
                        </p>

                        <ol>
                            <li>Visibilidade de qual estado estamos no sistema (Visibility of system
                                status)</li>
                            <li> Correspondência entre o sistema e o mundo real (Match between
                                system and the real world)</li>
                            <li>Liberdade de controle fácil pro usuário (User control and freedom)</li>
                            <li>Consistência e padrões (Consistency and standards)</li>
                            <li>Prevenção de erros (Error prevention)</li>
                            <li>Reconhecimento em vez de memorização (Recognition rather than
                                recall)</li>
                            <li>Flexibilidade e eficiência de uso (Flexibility and efficiency of use)</li>
                            <li>Estética e design minimalista (Aesthetic and minimalist design)</li>
                            <li>Ajude os usuários a reconhecerem, diagnosticarem e recuperarem-se de
                                erros (Help users recognize, diagnose, and recover from errors)</li>
                            <li>Ajuda e documentação (Help and documentation)</li>
                        </ol>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
    include('layout/footer.php');
    ?>
</body>

</html>