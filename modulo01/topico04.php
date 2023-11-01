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
                        <h2 class="Titulo fw-bolder"> 4 - Avaliação de Usabilidade</h2>
                        <!--  Título Principal -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">A usabilidade é passível de avaliação. Vamos entender o básico de
                            avaliações nas próximas subseções.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item4.1"> 4.1 - Por que avaliar?</h3>
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
                        <h3 class="Subtopico fw-bolder" id="item4.2"> 4.2 - Como Avaliar</h3>
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
                        <h2 class="subsubtopico fw-bolder">4.2.1 - Avaliação Heurística</h2>
                        <!-- fim do subsubtopico  -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">A avaliação heurística, também chamada de inspeção heurística, é um
                            método de avaliação de IHC criado para encontrar problemas de usabilidade
                            durante um processo interativo. Foi proposto juntamente com as heurísticas
                            de usabilidade de Nielsen com a finalidade de ser um <strong> método simples,
                                rápido e de baixo custo.</strong> Um menor rigor implica tanto em maior praticidade
                            na aplicação, quanto na possibilidade de imprecisão do método. Por isso,
                            deve ser realizado de forma estruturada e bem planejada.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool"> Esse método orienta os avaliadores a realizarem uma inspeção
                            sistemática da interface seguindo atividades especificadas anteriormente. O avaliador
                            realiza as atividades ao mesmo tempo que busca problemas de
                            usabilidade baseados nas heurísticas.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Para cada problema encontrado é comum estabelecer um nível de
                            severidade que segue a <strong>Tabela 01.</strong> Além do grau de severidade, o problema
                            pode conter descrição, sugestão de melhoria, local (tela) onde ocorreu e a
                            atividade relacionada.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                Descrição de cima</p>
                            <div class="zoom">
                                <a href="imgs/Tabela01.png" data-bs-toggle="modal" data-bs-target="#Tabela01">
                                    <img class="tabela" src="imgs/Tabela01.png" alt="Imagem" id="img-1">
                                </a>
                            </div>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Tabela01" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Tabela01.png" alt="Alt da imagem fica aqui">
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Apesar de parecer óbvio, <strong> uma avaliação heurística encontra
                                problemas.</strong> Por que é importante ressaltar isto? Porque nem sempre uma
                            equipe ou um projeto está pronto para receber um conjunto de problemas.
                            Se estes problemas não forem analisados e corrigidos, esta avaliação pode ter
                            acontecido em vão. <strong> Dica: sempre que decidirem realizar uma avaliação de
                                usabilidade ressaltem que encontrarão problemas e não elogios </strong> e
                            apresentem a expectativa do que deve acontecer com essa lista de
                            problemas. Isso também faz partedo planejamento. A comunicação é a chave
                            do design.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool"> Uma avaliação heurística pode utilizar-se de outras heurísticas ou regras.
                            É comum existirem conjuntos específicos para cada tipo de sistema, por
                            exemplo, para aplicativos móveis ou sistemas de realidade virtual. Busque
                            sempre um mais apropriado ao sistema ou se baseie nos mais genéricos.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 32:</strong>
                                Interface frustrante da Bagaar</p>
                            <div class="zoom">
                                <a href="imgs/Figura32.png" data-bs-toggle="modal" data-bs-target="#Imagem32">
                                    <img src="imgs/Figura32.png" alt="Imagem" id="img-32">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Bagaar.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem32" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura32.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>Bagaar.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloCuriosidade">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="Curiosidade">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">Abra e copie (ou baixe) esta planilha de suporte
                                            à <a
                                                href="https://docs.google.com/spreadsheets/d/1ebC2JqwTi7q7uxejL7TuhDoqoUGFVGthjwAu7B979ts/edit#gid=1283962207" target="_blank">avaliação
                                                heurística:</a>
                                            Avaliação Heurística.
                                            Realize uma avaliação heurística neste sistema: <a
                                                href="https://userinyerface.com/" target="_blank"> User Inyerface - A worst
                                                practice UI experiment.</a> Este é um site onde uma empresa de
                                            tecnologia,
                                            Bagaar, criou um excelente exemplo de interface frustrante.

                                        </p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->




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

    <!-- INÍCIO DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP -->
    <!-- BOTÃO BACK TO TOP COM UMA BARRA DE PROGRESSO -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>
    <!-- FIM DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP-->

    <!-- COMEÇO DO FOOTER  -->
    <?php
    include('layout/footer.php');
    ?>
    <!-- FIM DO FOOTER  -->
</body>

</html>