<!DOCTYPE html>
<html lang="pt-br">

<?php
include('layout/header.php');
?>
<!-- PLUGIN DO FADE IN -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

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

                        <!-- IMAGEM 03 -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 03 </strong> -
                                Definições de usabilidade </div>
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
                        <!-- subtopico título-->
                        <h3 class="Subtopico fw-bolder" id="item1">02.1 - NBR ISO 9241-11</h3>
                        <!-- subtopico título -->


                        <br>
                        <p class="scrool">A ABNT NBR ISO 9241-11 (<strong>Figura 04</strong>) é uma norma consolidada
                            pela <a href="https://www.abnt.org.br/" target="_blank">ABNT – Associação Brasileira de
                                Normas
                                Técnicas</a> que tem como base a ISO 9241-11:1998. Esta norma define o termo usabilidade
                            e especifica o que deve ser considerado numa avaliação de usabilidade em termos de medidas
                            de desempenho e satisfação do usuário. A ISO ainda cita como descrever o contexto de uso de
                            um produto para hardware, software ou serviços. </p><br>

                        <!-- IMAGEM 04  -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 04 </strong> -
                                ABNT NBR ISO 9241-11</div>
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

                        <ol class="list02">
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


                        <!-- IMAGEM 05  -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 05 </strong> -
                                Estrutura de usabilidade</div>
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
                        <!-- subtopico título-->
                        <h3 class="Subtopico fw-bolder" id="item2">02.2 - ISO/IEC 25000 (SQuaRE)</h3>
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

                        <!-- IMAGEM 06  -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 06 </strong> -
                                Qualidade de uso em ISO/IEC 25010</div>
                            <div class="zoom">
                                <a href="imgs/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                    <img src="imgs/Figura06.png" alt="Qualidade de uso em ISO/IEC 25010">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> adaptado de ISO/IEC
                                25010.</p>
                        </div>

                        <!-- Imagem 06 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem06" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura06.png"
                                        alt="Qualidade de uso em ISO/IEC 25010">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 06 - </strong> Qualidade de uso em ISO/IEC
                                        25010</p>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 06 - End  (Audi)-->

                        <br>
                        <p class="scrool">Na divisão ISO/IEC 2504n da série de normas, a especificação define um
                            <strong>modelo de
                                referência de avaliação</strong>, isto é, como avaliar tudo isso que foi apresentado
                            utilizando como base as características e atributos. Essa norma da série apresenta uma
                            seleção das métricas de qualidade de usabilidade.
                        </p>

                        <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloSaibaMais">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="saibamais">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">Ficou curioso sobre as outras características de
                                            qualidade de produto da SQuaRE? Veja na <strong>Figura 07</strong> quais
                                            características de qualidade de produto são incluídas além de usabilidade.
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->

                        <!-- IMAGEM 07  -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 07 </strong> -
                                Características de qualidade de produto em ISO/IEC 25010</div>
                            <div class="zoom">
                                <a href="imgs/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                    <img src="imgs/Figura07.png" class="d-lg"
                                        alt="Características de qualidade de produto em ISO/IEC 25010">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> ISO/IEC 25010.</p>
                        </div>

                        <!-- Imagem 07 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem07" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura07.png"
                                        alt="Características de qualidade de produto em ISO/IEC 25010">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 07 - </strong> Características de qualidade
                                        de produto em ISO/IEC 25010</p>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 07 - End  (Audi)-->

                        <!-- INÍCIO DO SUBTÓPICO -->
                        <!-- subtopico título-->
                        <h3 class="Subtopico fw-bolder" id="item3">02.3 - Heurísticas de Nielsen</h3>
                        <!-- subtopico título -->

                        <br>
                        <p class="scrool">Além das normas apresentadas, existem outras especificações que se relacionam
                            com a definição
                            de Usabilidade. As heurísticas de Nielsen são mais didáticas para uma aplicação prática de
                            usabilidade, sendo mais apreciadas e usadas no contexto de design de sistemas
                            computacionais. </p>

                        <p class="scrool">Enquanto as normas buscam quantificar a usabilidade para definir qual o nível
                            de conformidade
                            com um modelo de qualidade, as heurísticas tratam a usabilidade de forma mais ampla e
                            aberta, considerando aspectos da psicologia cognitiva e experimental. As heurísticas não tem
                            como objetivo encontrar um valor dentro de uma escala para a usabilidade. <strong>Esta é a
                                melhor forma de trabalhar com usabilidade? Depende da aplicação</strong>. Conheça todas
                            as definições e formatos para enfim decidir como irá utilizá-la no contexto de um
                            determinado produto e seu processo. O foco deste curso será nas heurísticas de Nielsen.</p>

                        <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloSaibaMais">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="saibamais">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">É importante ressaltar que as heurísticas de
                                            Nielsen não foram nem são as únicas a tratar da usabilidade. Como mostra o
                                            trabalho de Abreu (2005), há outros critérios ergonômicos de usabilidade:
                                        </p>

                                        <ul class="list02">
                                            <ol class="txt-caixasecundaria">
                                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i
                                                        class="fa fa-dot-circle text-success"></i> Ben
                                                    Shneiderman (1986): “Oito regras de ouro do design de diálogo”;</li>
                                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><i
                                                        class="fa fa-dot-circle text-success"></i> Donald Norman
                                                    (1988): “Princípios de orientação”;</li>
                                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><i
                                                        class="fa fa-dot-circle text-success"></i> Jakob Nielsen
                                                    (1993): “Heurísticas de usabilidade”;</li>
                                                <li class="wow fadeInLeft" data-wow-delay="1.0s"><i
                                                        class="fa fa-dot-circle text-success"></i> Bruce
                                                    Tognazzini (1987): “Guidelines de Interface humana”;</li>
                                                <li class="wow fadeInLeft" data-wow-delay="1.3s"><i
                                                        class="fa fa-dot-circle text-success"></i> Christien
                                                    Bastien &, Dominique Scapin (1993): “Critérios ergonômicos para
                                                    avaliação de interfaces humano-computador”;</li>
                                                <li class="wow fadeInLeft" data-wow-delay="1.6s"><i
                                                        class="fa fa-dot-circle text-success"></i> Andrew Monk
                                                    (1992) - Nokia (Equipe Nokia).</li>
                                            </ol>
                                        </ul><br>

                                        <p class="txt-caixasecundaria">Neste trabalho, Abreu apresenta um comparativo
                                            rico de
                                            23 critérios, indicando, por exemplo, o quão semelhantes são as “oito regras
                                            de ouro” de Shneiderman com as heurísticas de usabilidade Nielsen. Esta
                                            lista permitiu a identificação de recomendações provenientes de pesquisas
                                            consolidadas em HCI culminando em 23 critérios ergonômicos de usabilidade
                                            para a avaliação de sistemas de telefones celulares.</p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->

                        <br>
                        <p>Para Nielsen, </p>

                        <!-- CITAÇÃO -->
                        <div class="bd-callout bd-callout-success fw-bold fst-italic">
                            <p class="scrool">
                                A usabilidade é o atributo de qualidade que avalia se uma interface de
                                usuário é fácil de usar. Usabilidade também se refere ao método utilizado para
                                melhorar a facilidade de uso no processo de design.
                            </p>
                        </div><br>

                        <p>Nielsen complementa esta definição a partir de 5 fatores de usabilidade:</p>

                        <ol>
                            <br>
                            <li><strong>Facilidade de aprendizado</strong> <em>(Learnability)</em>: Quão fácil é
                                para os
                                usuários realizarem tarefas básicas na primeira vez que se deparam com o design
                                da
                                interface? De forma prática, este fator diz respeito ao tempo que o usuário leva
                                para
                                aprender a realizar as principais atividades ou um conjunto mais amplo de
                                atividades do
                                sistema.</li>
                            <br>
                            <li><strong>Facilidade de recordação</strong> <em>(Memorability)</em>: Quando os
                                usuários
                                retornam ao sistema após um período sem usá-lo, com que facilidade eles podem
                                restabelecer a proficiência de uso? Para avaliar este fator, é possível medir a
                                porcentagem de tarefas que um usuário conseguiu lembrar ao usar uma aplicação
                                que
                                utiliza com baixa frequência. </li>
                            <br>
                            <li><strong>Eficiência</strong><em> (Efficiency)</em>: Depois de aprender como
                                interagir com
                                uma interface, com que rapidez os usuários podem executar as tarefas? Sobre este
                                fator,
                                é possível medir o tempo gasto para completar uma tarefa e a porcentagem de
                                completude
                                da tarefa.</li>
                            <br>
                            <li><strong>Segurança no uso</strong> <em>(Errors)</em>: Quantos erros os usuários
                                cometem,
                                quão graves são esses erros e com que facilidade eles podem se recuperar dos
                                erros? Esse
                                fator é bastante explorado nas avaliações que encontram problemas de
                                usabilidade, onde é
                                importante analisar se a interface auxilia o usuário a se recuperar de uma
                                situação
                                problemática. </li>
                            <br>
                            <li><strong>Satisfação do usuário</strong> <em>(Satisfaction)</em>: É prazeroso
                                utilizar uma
                                interface? A satisfação do usuário envolve prazer, diversão, entretenimento,
                                interesse,
                                motivação, estética, criatividade, surpresa e desafio.</li>
                            </ol>

                        <p>Além destas, Nielsen ressalta uma característica adicional à usabilidade: a
                            <strong>utilidade</strong>, que se refere à funcionalidade em si e possibilita
                            questionar o
                            que <strong>o usuário realmente precisa</strong>. Usabilidade e utilidade são
                            igualmente
                            importantes e, juntos, determinam se algo é útil, afinal <storng>pouco importa que
                                algo seja
                                fácil de usar se não for o que você deseja</storng>. Também não é bom que o
                            sistema
                            possa fazer o que você quer realizar em uma interface muito difícil de se utilizar.
                            Veja um
                            resumo disto na Figura 08.
                        </p>

                        <!-- IMAGEM 08  -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 08 </strong>
                                - Utilidade e usabilidade</div>
                            <div class="zoom">
                                <a href="imgs/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img src="imgs/Figura08.png"
                                        alt="Características de qualidade de produto em ISO/IEC 25010">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> autor com
                                base em o
                                que o usuário realmente precisa.</p>
                        </div>

                        <!-- Imagem 08 - MODAL -->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imgs/Figura08.png"
                                            alt="Qualidade de uso em ISO/IEC 25010">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 08</strong> - Utilidade e
                                            usabilidade</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 08 - End -->

                        <br>
                        <p class="scrool">Em 1994 Nielsen publicou as 10 heurísticas de usabilidade, ainda hoje
                            bastante utilizadas. As
                            heurísticas de Nielsen, como são chamadas, são a base dos critérios de boas práticas
                            de
                            usabilidade. As heurísticas são utilizadas em vários momentos do processo de design.
                            Junto
                            com as heurísticas, Nielsen divulgou um método de inspeção de usabilidade que era
                            barato,
                            rápido e fácil de aplicar, que vamos explorar melhor na seção sobre avaliação. </p>

                        <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloSaibaMais">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="saibamais">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">De acordo com Nielsen, as heurísticas de
                                            usabilidade propostas por ele são 10 princípios gerais para o design. Elas
                                            são chamadas de "heurísticas" <strong>porque são regras genéricas e não
                                                diretrizes
                                                específicas de usabilidade.</strong></p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->

                        <p class="srcool">Veja na <strong>Figura 09</strong> as 10 heurísticas de Nielsen
                            de forma
                            resumida. Na próxima seção iremos analisar cada uma das heurísticas.</p>


                        <!-- IMAGEM 09  -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 09 </strong>
                                - 10 heurísticas de Nielsen</div>
                            <div class="zoom">
                                <a href="imgs/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                    <img src="imgs/Figura09.png" alt=" 10 heurísticas de Nielsen">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> <a
                                    href="https://medium.com/signainfo/entendendo-as-10-heur%C3%ADsticas-de-nielsen-para-melhorar-a-experi%C3%AAncia-do-usu%C3%A1rio-86f3c14c0586"
                                    target="_blank">Medium</a>.</p>
                        </div>

                        <!-- Imagem 09 - MODAL -->
                        <div class="modal fade text-center" id="Imagem09" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura09.png" alt="10 heurísticas de Nielsen">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 09 - </strong> 10 heurísticas de Nielsen
                                    </p>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 09 - End -->

                        <br>
                        <!-- INÍCIO DO SUBTÓPICO -->
                        <!-- subtopico título-->
                        <h3 class="Subtopico fw-bolder" id="item4"> 02.4 - O que não é usual?</h3>
                        <!-- subtopico título -->

                        <p class="scrool">Antes de passarmos às heurísticas de forma detalhada, é interessante
                            reconhecer o que não é
                            usual e como podemos identificar onde a usabilidade foi negligenciada. </p>

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
                                        <p class="txt-caixasecundaria">Assim como um musicista sofre com o desafinar
                                            generalizado da hora dos parabéns em festas de aniversário, pessoas que
                                            estudam design UX tendem a sofrer e questionar as interfaces do dia a dia.
                                            Antecipo que será difícil desconsiderar a torneira que não “abre pro lado
                                            certo” ou a porta que “não indica como deve ser aberta” ou a máquina de
                                            lavar roupa que “tem programas de lavagem desnecessários e pouco
                                            utilizados”. <strong>Usabilidade é um conhecimento prático, que pode atuar
                                                na forma como você planeja sua vida, seu trabalho, suas atividades e
                                                muito mais</strong>.</p>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <p class="scrool">Um dos objetos cotidianos que chama muita atenção
                            com relação à usabilidade é
                            o elevador. Não é incomum pessoas passarem por experiências confusas em
                            elevadores. Os elevadores em geral não possuem uma padronização de painel,
                            dessa forma é comum encontrar um elevador que nos perdemos facilmente nas
                            opções. Isso não seria um problema se os painéis fossem desenhados para
                            facilitar a aprendizagem no uso.A <strong>Figura 10</strong> mostra um
                            painel em que infringe o fator de <strong>segurança do uso</strong>,
                            colocando uma mensagem para não entrar se a cabine não estiver bem
                            posicionada. A mensagem, porém, está dentro do elevador, o que impede de
                            evitar o real problema cuja mensagem está tentando evitar. O informe, apesar
                            de ter um objetivo de segurança, perde o significado. </p>


                        <!-- IMAGEM 10  -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 10 </strong>
                                - Painel do Elevador</div>
                            <div class="zoom">
                                <a href="imgs/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img src="imgs/Figura10.png" alt="Painel do Elevador">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> autor.</p>
                        </div>

                        <!-- Imagem 10 - MODAL -->
                        <div class="modal fade text-center" id="Imagem10" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura10.png" alt="Painel do Elevador">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 10 - </strong> Painel do Elevador</p>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 10 - End -->

                        <div class="row">
                            <div class="col-md-6">
                                <p>Como outro exemplo, temos interfaces que apresentam códigos e mensagens não
                                    decifráveis para indicar um erro. Na <strong>Figura 11</strong> vemos uma mensagem
                                    de erro que se destaca na tela pelo seu tamanho e por não ser facilmente
                                    compreendida. Esta foi uma mensagem retornada pelo aplicativo Uber. Neste exemplo,
                                    vemos que problemas de usabilidade podem ocorrer também em aplicativos muito bem
                                    consolidados no mercado. Aplicativos móveis são feitos para rodar em muitas
                                    plataformas, em muitos formatos de tela e com restrições distintas para cada tipo de
                                    dispositivo. Garantir que não haja falhas no sistema e usabilidade para toda essa
                                    diversidade de dispositivos torna a aplicação de sistemas um desafio à equipe de
                                    desenvolvimento.</p>
                            </div>

                            <div class="col-md-6">
                                <!-- Titulo Figura -->

                                <!-- IMAGEM 11  -->
                                <div class="text-center img-01">
                                    <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 11 </strong>
                                        - Mensagem de erro inapropriada</div>
                                    <div class="zoom">
                                        <a href="imgs/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                            <img src="imgs/Figura11.png" class="w-50"
                                                alt=" Mensagem de erro inapropriada">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Autor.</p>
                                </div>

                                <!-- Imagem 11 - MODAL -->
                                <div class="modal fade text-center" id="Imagem11" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-50">
                                            <img class="img-fluid" src="imgs/Figura11.png"
                                                alt="10 heurísticas de Nielsen">
                                        </div>
                                        <div class="modal-footer w-50 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Figura 11 - </strong> Mensagem de erro
                                                inapropriada
                                            </p>
                                        </div>
                                    </div>
                                </div><br>
                                <!-- Imagem 11 - End -->

                            </div>
                        </div>

                        <p class="scrool">O próximo exemplo (<strong>Figura 12</strong>) mostra uma resposta inesperada
                            do sistema que
                            causou confusão. Uma plataforma de submissão de artigos científicos apresentou uma mensagem
                            de sucesso de submissão que dizia <em>“The file has been uploaded”</em>, que significa “O
                            arquivo foi carregado!” e indicaria que tinha conseguido realizar a submissão corretamente,
                            como esperado. Porém, a mensagem está em vermelho. Na produção de interfaces é comum
                            tratarmos o olhar “de relance”, em inglês <em>“at a glance”</em>, que significa aquele olhar
                            rápido em algo. Um olhar de relance fez com que o texto fosse escondido pela mensagem que a
                            cor transmitiu: a de erro. <strong>A cor vermelha deve sempre ser usada com cautela</strong>
                            em interfaces para que não ocorra algo semelhante.</p>
                        </p>

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
                                        <p class="txt-caixasecundaria">As cores podem transmitir informações em
                                            interfaces. Seja estabelecendo a hierarquia do conteúdo ou indicando
                                            informações, como erro. As cores também estão relacionadas a interfaces com
                                            relação à acessibilidade e devem, por exemplo, respeitar um nível de
                                            contraste aceitável para facilitar a leitura.</p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <!-- IMAGEM 12  -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 12 </strong>
                                - Mensagem de erro inapropriada</div>
                            <div class="zoom">
                                <a href="imgs/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                    <img src="imgs/Figura12.png" class="w-100"
                                        alt="Mensagem de ação realizada com sucesso com cor inesperada">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Autor.</p>
                        </div>

                        <!-- Imagem 12 - MODAL -->
                        <div class="modal fade text-center" id="Imagem12" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-100">
                                    <img class="img-fluid" src="imgs/Figura12.png"
                                        alt=" Mensagem de ação realizada com sucesso com cor inesperada">
                                </div>
                                <div class="modal-footer w-100 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 12 - </strong> Mensagem de ação realizada
                                        com sucesso com cor inesperada
                                    </p>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 12 - End -->

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
                                        <p class="txt-caixasecundaria">Veja na Figura 13 como o padrão <a
                                                href="https://material.io/design/color/the-color-system.html"
                                                target="_blank">Material Design</a>, para construção de interfaces,
                                            organiza as cores utilizadas em aplicativos.</p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <!-- IMAGEM 13  -->
                        <div class="text-center img-01">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 13 </strong>
                                - O tema de cor do material de base</div>
                            <div class="zoom">
                                <a href="imgs/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                    <img src="imgs/Figura13.png"
                                        alt="O tema de cor do material de base">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Material Design.</p>
                        </div>

                        <!-- Imagem 12 - MODAL -->
                        <div class="modal fade text-center" id="Imagem13" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura13.png"
                                        alt="O tema de cor do material de base">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 13 - </strong> O tema de cor do material de base
                                    </p>
                                </div>
                            </div>
                        </div><br>
                        <!-- Imagem 13 - End -->

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