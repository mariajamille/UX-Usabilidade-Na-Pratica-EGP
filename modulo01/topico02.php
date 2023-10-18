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


    <!-- menu lateral começa aqui -->
    <?php
    include('layout/menu.php');
    ?>

    <!-- CONTEUDO INICIO -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">
                        <h2 class="Titulo fw-bolder">02 - Usabilidade</h2>
                        <br>

                        <br>
                        <p class="scrool">Você já conhecia o termo usabilidade? Se você fez o curso de “O que design
                            ux?” se deparou
                            com o termo algumas vezes no material. Vamos recordar? Em 1994, as Heurísticas de Nielsen
                            trouxeram critérios de boas práticas de usabilidade e apresentaram um método de avaliação de
                            inspeção para garantir sua aplicação. Porém, antes desse período, já se utilizava o termo
                            precursor da usabilidade: a <strong>ergonomia</strong>. </p>

                        <p class="scrool">Quando imaginamos ergonomia, pensamos em cadeiras ajustadas, visores na altura
                            dos olhos,
                            carregamento de peso de forma correta ou outras atividades físicas do dia a dia. Porém a
                            ergonomia hoje engloba muitas outras áreas de aplicação. De acordo com a <a
                                href="https://iea.cc/" target="_blank">IEA - Associação Internacional de Ergonomia</a>,
                            a Ergonomia (ou Fatores Humanos) é uma disciplina de estudo relacionada às interações entre
                            os seres humanos e outros elementos ou sistemas, e aplica teorias, princípios, dados e
                            métodos a fim de otimizar o bem estar humano e o desempenho global do sistema. Os
                            ergonomistas tornam tarefas, postos de trabalho, produtos, ambientes e sistemas compatíveis
                            com as necessidades, habilidades e limitações das pessoas. </p>

                        <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="titulofiqueatento">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO
                                            </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">O conceito de ergonomia é importante para
                                            entendermos como passamos a utilizar o termo usabilidade em projetos. A
                                            ergonomia é um conceito amplo e atualmente estas duas áreas de estudo se
                                            mesclam. Entretanto, aqui vamos focar em usabilidade, mais comumente
                                            utilizada na área de sistemas para computadores. O que não impede de
                                            expandirmos o conceito de usabilidade para coisas físicas, ou vice-versa.
                                        </p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <br>
                        <p class="scrool">Dentro do contexto de usabilidade, há diversas definições formais do termo.
                            Três definições
                            são importantes para o contexto de desenvolvimento de sistemas: o da NBR 9241-11, o da ISO
                            25000 e a partir das heurísticas de Nielsen (<strong>Figura 3</strong>). Cada uma destas
                            definições entrega um conjunto genérico a se considerar, como, por exemplo, a ISO 25000
                            entrega caraterísticas de qualidade de software, das quais uma é a usabilidade. Os próximos
                            subtópicos explicarão cada uma destas definições.</p>

                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-01">
                            <div class="zoom">
                                <a href="imags/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img src="imgs/Figura03.png" alt="Definições de usabilidade">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> autor.</p>
                        </div>

                        <!-- Imagem 03 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura03.png" alt="Definições de usabilidade">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 03 - </strong>Definições de usabilidade</p>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 03 - End  (Audi)-->

                        <!-- INÍCIO DO SUBTÓPICO -->
                        <div data-spy="scroll" data-target="#spy" data-offset="0"></div>
                        <a id="item1"></a>

                        <!-- subtopico título-->
                        <h3 class="Subtopico fw-bolder">02.1 - NBR ISO 9241-11</h3>
                        <!-- subtopico título -->


                        <br>
                        <p class="scrool">A ABNT NBR ISO 9241-11 (<strong>Figura 04</strong>) é uma norma consolidada
                            pela <a href="https://www.abnt.org.br/" target="_blank">ABNT – Associação Brasileira de
                                Normas
                                Técnicas</a> que tem como base a ISO 9241-11:1998. Esta norma define o termo usabilidade
                            e especifica o que deve ser considerado numa avaliação de usabilidade em termos de medidas
                            de desempenho e satisfação do usuário. A ISO ainda cita como descrever o contexto de uso de
                            um produto para hardware, software ou serviços. </p><br>

                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-01">
                            <div class="zoom">
                                <a href="imags/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                    <img src="imgs/Figura04.png" alt="ABNT NBR ISO 9241-11">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> autor.</p>
                        </div>

                        <!-- Imagem 04 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem04" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura04.png" alt="ABNT NBR ISO 9241-11">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 04 - </strong>ABNT NBR ISO 9241-11</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 04 - End  (Audi)-->

                        <br>
                        <p class="scrool">De acordo com a norma:</p>

                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success fw-bold">
                            <p class="scrool">
                                A usabilidade é a medida pela qual um produto pode ser usado por usuários
                                específicos para alcançar objetivos específicos com efetividade, eficiência e
                                satisfação em um contexto de uso específico (NBR 9241-11) .
                            </p>
                        </div><br>

                        <br>
                        <p class="scrool">Para que o conceito fique, a medida é o valor resultante de uma medição. As
                            três medidas
                            citadas pela norma são:</p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong>Efetividade:</strong> é a medida em
                                que se verifica o quanto o usuário alcançou os objetivos iniciais de interação. Pode ser
                                avaliada considerando a finalização de uma tarefa ou em termos de qualidade do resultado
                                obtido.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong>Eficiência:</strong> se refere à
                                quantidade de esforço e recursos necessários para se chegar a um determinado objetivo.
                                Os desvios que o usuário faz durante a interação e a quantidade de erros cometidos podem
                                servir para avaliar o nível de eficiência do site.</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><strong>Satisfação do usuário:</strong>
                                considerada a mais difícil de medir, esta medida se refere ao nível de conforto que o
                                usuário sente ao utilizar a interface e qual o nível de aceitação.</li>
                        </ol>

                        <p class="scrool">A <Strong>Figura 05</Strong> apresenta uma figura da norma que resume esse
                            conjunto que forma
                            a estrutura de usabilidade proposta pela norma. A norma apresenta também outras perspectivas
                            da usabilidade como: facilidade de aprendizado; facilidade de memorização; e baixa taxa de
                            erros.</p><br>


                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-01">
                            <div class="zoom">
                                <a href="imags/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                    <img src="imgs/Figura05.png" alt="Estrutura de usabilidade">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> NBR 9241-11..</p>
                        </div>

                        <!-- Imagem 05 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem05" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura05.png" alt="Estrutura de usabilidade">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 05 - </strong>Estrutura de usabilidade</p>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 05 - End  (Audi)-->

                        <!-- INÍCIO DO SUBTÓPICO -->
                        <div data-spy="scroll" data-target="#spy" data-offset="0"></div>
                        <a id="item1"></a>

                        <!-- subtopico título-->
                        <h3 class="Subtopico fw-bolder">02.2 - ISO/IEC 25000 (SQuaRE)</h3>
                        <!-- subtopico título -->

                        <br>
                        <p class="scrool">A série de normas ISO/IEC 25000 ou, como é conhecida, SQuaRE (Requisitos e
                            Avaliação de
                            Qualidade de Sistemas e Software) segue na mesma linha de avaliação de software, porém,
                            diferente da ISO 9241-11, ela trata de outros âmbitos da <strong>avaliação da qualidade de
                                linha de produtos de software</strong>. Esse conjunto de normas é dividida da seguinte
                            forma: </p>

                        <ul class="list">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i> ISO/IEC 2500n – Divisão de Gestão
                                da Qualidade;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i
                                    class="fa fa-dot-circle text-success"></i> ISO/IEC 2501n – Divisão de Modelo
                                de Qualidade;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i
                                    class="fa fa-dot-circle text-success"></i> ISO/IEC 2502n – Divisão de Medição
                                de Qualidade;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i
                                    class="fa fa-dot-circle text-success"></i> ISO/IEC 2503n – Divisão de
                                Requisitos de Qualidade;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i
                                    class="fa fa-dot-circle text-success"></i> ISO/IEC 2504n – Divisão de
                                Avaliação da Qualidade.</li>
                        </ul><br>

                        <p class="scrool">A divisão de Medição de Qualidade (ISO/IEC 2501n) inclui um modelo de
                            referência para
                            medições da qualidade de um produto, definições matemáticas de medidas e orientações
                            práticas para sua aplicação. É nessa divisão que a norma estabelece usabilidade como
                            característica de qualidade e define medições. A definição formal de usabilidade da norma é:
                        </p>

                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success fw-bold">
                            <p class="scrool">
                                Usabilidade - Grau em que um produto ou sistema pode ser usado por usuários
                                específicos para atingir metas especificadas com eficácia, eficiência e satisfação
                                em um contexto específico de uso.
                            </p>
                        </div>

                        <p class="scrool">Dentro desta especificação, a característica usabilidade é composta das
                            seguintes
                            subcaracterísticas:</p><br>

                        <ul class="list">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa fa-dot-circle text-success"></i> Reconhecimento de Adequabilidade;
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i
                                    class="fa fa-dot-circle text-success"></i> Aprendizagem;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i
                                    class="fa fa-dot-circle text-success"></i> Operacionalidade;</li>
                            <li class="wow fadeInLeft" data-wow-delay="1.0s"><i
                                    class="fa fa-dot-circle text-success"></i> Proteção Contra Erros do Usuário;
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i
                                    class="fa fa-dot-circle text-success"></i> Estética da Interface do Usuário;
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i
                                    class="fa fa-dot-circle text-success"></i> Acessibilidade.</li>
                        </ul>

                        <p class="scrool">
                            A norma, além de estabelecer um <strong>modelo de avaliação de produto</strong>, também
                            estabelece um <strong>modelo para avaliação de uso</strong>, que também é considerado dentro
                            do contexto de usabilidade. De acordo com a ISO/IEC 25010, a qualidade de uso se refere à
                            capacidade do produto de software de permitir que os usuários atinjam metas com eficácia,
                            produtividade, segurança e satisfação no contexto de uso do sistema. Para cada uma dessas
                            características são definidos atributos de qualidade, como pode ser visto na <strong>Figura
                                06</strong>.
                        </p><br>

                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-01">
                            <div class="zoom">
                                <a href="imgs/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                    <img src="imgs/Figura06.png" alt="Qualidade de uso em ISO/IEC 25010">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> adaptado de ISO/IEC 25010.</p>
                        </div>

                        <!-- Imagem 06 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem06" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura06.png" alt="Qualidade de uso em ISO/IEC 25010">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 06 - </strong> Qualidade de uso em ISO/IEC 25010/p>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 06 - End  (Audi)-->



                    </div>
                </div>

        </section>
        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="fa-solid fa-chevron-right"></i></a>
        </div>

        <!-- barra de progresso embaixo -->
        <div id="progress-bar"></div>
    </div>

    <!-- BUTTON BACK TO TOP -->
    <!-- INÍCIO DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP -->
    <!-- BOTÃO BACK TO TOP COM UMA BARRA DE PROGRESSO -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>
    <!-- FIM DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP-->

    <?php
    include('layout/footer.php');
    ?>


</body>

</html>