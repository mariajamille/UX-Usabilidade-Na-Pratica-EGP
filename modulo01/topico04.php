<!DOCTYPE html>
<html lang="pt-br">
<?php
include('layout/header.php');
?>

<body>
    <!-- COMEÇO DA NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV  -->

    <!-- COMEÇO DO MENU  -->
    <?php
    include('layout/menu.php');
    ?>
    <!-- FIM DO MENU  -->

    <!-- CONTEUDO INICIO -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!--  Título Pricipal -->
                        <h2 class="Titulo fw-bolder"> 04 - Avaliação de Usabilidade</h2>
                        <!--  Título Principal -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">A usabilidade é passível de avaliação. Vamos entender o básico de
                            avaliações nas próximas subseções.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder"> 04.1 - Por que avaliar?</h3>
                        <!-- subtopico -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Conhecer critérios de qualidade e seguir processos de fabricação que
                            busquem criar produtos adequados a esses critérios nem sempre resultam
                            em produtos de qualidade. É necessário realizar avaliações do produto ao
                            final ou ao longo deste processo. Estas avaliações podem conter diferentes
                            perspectivas: <strong> de quem o concebe, de quem o constrói e de quem o utiliza.</strong>
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Avaliar a qualidade de uso e corrigir os problemas identificados
                            contribuem para aumentar a produtividade dos usuários, diminuir o número e
                            a gravidade dos erros cometidos durante o uso, e aumentar a satisfação dos
                            usuários. Este impacto também se reflete em como o produto é aceito por
                            quem o utiliza, ou, para fins comerciais, isto se reflete na aceitação e
                            permanência de um produto no mercado.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder"> 04.2 - Como Avaliar</h3>
                        <!-- subtopico -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool"> É possível avaliar a usabilidade tomando como base uma das definições
                            apresentadas no capítulo 2 (Usabilidade) ou outras que não foram aqui
                            apresentadas. Isto é, se utilizar a definição da ISO/IEC 25.000 é possível
                            encontrar um método apropriado para medir as subcaracterísticas
                            relacionadas, como a apreensibilidade. No caso das heurísticas de usabilidade
                            de Nielsen, você pode se utilizar de uma inspeção heurística.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">A avaliação pode ocorrer de três formas: Investigação, Inspeção e
                            Observação. Veja as descrições de cada uma:
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <ul class="list">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>
                                <strong>Investigação:</strong> que ocorre através de coleta de informação e opinião dos
                                usuários acerca de suas necessidades e desejos. Por exemplo,
                                questionários e entrevistas.
                            </li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>
                                <strong>Inspeção:</strong>são realizadas por especialistas e não envolvem diretamente
                                os usuários. Por exemplo, avaliação heurística.
                            </li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>
                                <strong>Observação: </strong>coletam os dados sobre o uso do sistema pelos usuários,
                                que pode ocorrer em laboratório ou em campo. Por exemplo, teste de
                                usabilidade com usuários reais.
                            </li>
                        </ul>

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool"> Uma avaliação pode buscar respostas sobre pontos específicos, como:
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- lista -->
                        <ul class="list">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>a apropriação de tecnologia pelos
                                usuários;</li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>os objetivos e necessidade dos usuários;
                            </li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>quais tecnologias são necessárias para
                                atingir os objetivos;</li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>atividades antes e depois da intervenção
                                com o sistema;</li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>a conformidade com um padrão;</li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>ideias e alternativas de design; e</li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i>diferentes alternativas de solução.</li>
                        </ul>
                        <!-- fim da lista  -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Para realizar uma avaliação é necessário decidir como ela irá ocorrer, em
                            que contexto (laboratório ou real), quantas e quais pessoas irão participar,
                            quais dados irão ser coletados (quantitativos ou qualitativos), que método
                            será usado na análise dos dados e outros critérios fundamentais para que a
                            avaliação seja válida.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Subsubtopico  -->
                        <h2 class="subsubtopico fw-bolder"> 04.2.1 - Avaliação Heurística</h2>
                        <!-- fim do subsubtopico  -->




                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- FIM DO CONTEUDO INICIO  -->





    <!-- Botões de navegação -->
    <div class="text-center">
        <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                class="fa-solid fa-chevron-right"></i></a>
    </div>

    <!-- BUTTON BACK TO TOP (JAMILLE) -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

    <!-- COMEÇO DO FOOTER  -->
    <?php
    include('layout/footer.php');
    ?>
    <!-- FIM DO FOOTER  -->
</body>

</html>