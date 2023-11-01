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
<<<<<<< HEAD
                        <h2 class="Titulo fw-bolder wow fadeIn" data-wow-delay="0.3s">01 - Apresentação</h2>
=======
                        <h2 class="Titulo fw-bolder">1 - Apresentação</h2>
>>>>>>> 24f1498929ddf2adfe394c8b5cfa278144d4be2c
                        <br>

                        <p class="wow fadeIn" data-wow-delay="0.3s"><strong>Objetivo:</strong> Antes de iniciar este curso, é recomendado que
                            veja curso “O que design ux?”, onde são apresentados os conceitos fundamentais de design UX.
                            Ao longo deste material vamos utilizar o termo “design UX”, que é comumente utilizado em
                            tecnologia da informação. UX é um acrônimo do termo inglês User eXperience, que em português
                            é
                            experiência do usuário.
                        </p>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
                            <div class="accordion">

                                <section id="content">
                                    <div class="caixaprincipal" id="tituloimportante">
                                        <div class="div_teste">
                                            <div><i class="bi bi-exclamation-circle"></i> IMPORTANTE </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="importante"><!--caixa secundaria-->
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o
                                                    mouse acima </strong></strong></p>
                                        <p class="txt-caixasecundaria">Este é um curso introdutório, onde vamos passar
                                            por conteúdos que podem ser apresentados de forma extensa, mas não é este o
                                            nosso objetivo aqui. Então vamos conhecer o que é fundamental para você
                                            entender usabilidade na área de tecnologia ou em outros âmbitos da vida.
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </section>

                        <br>
                        <p class="wow fadeIn" data-wow-delay="0.3s">Usabilidade deixou de ser um termo próprio do mundo do design de
                            sistemas. Hoje é possível encontrá-lo escrito em caixas de produtos, como na
                            <strong>Figura 01.</strong> Neste exemplo, o produto é um óculos 3D para
                            realidade virtual
                            ou aumentada da marca WARRIOR. O trecho apresentado na caixa em que
                            considera-se usabilidade é: “Aberturas laterais para utilizar
                            fone de ouvido e carregador durante o uso”, como você pode ler na
                            <strong>Figura01.</strong>
                        </p><br>

                        <!-- IMAGEM 01  -->
                        <div class="text-center img-01 wow fadeIn" data-wow-delay="0.3s">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 01 - </strong>Caixa de
                                óculos 3D
                                Descrição de cima</div>
                            <div class="zoom">
                                <a href="imags/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img src="imgs/Figura01.png" alt="Caixa de óculos 3D">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> autor</p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura01.png" alt="Caixa de óculos 3D">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 01 - </strong>Caixa de óculos 3D</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container wow fadeIn" data-wow-delay="0.3s">
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
                                        <p class="txt-caixasecundaria">Esse tipo de óculos de realidade virtual se
                                            utiliza de um smartphone acoplado para gerar as imagens, já que ele próprio
                                            não possui telas, somente lentes. Na Figura 02 é possível ver a estrutura de
                                            acoplamento do dispositivo e as lentes que geram a sensação 3D. Esse formato
                                            de óculos é comum no mercado, pois há uma redução de custo e um
                                            aproveitamento dos dispositivos móveis, que possuem uma alta capacidade
                                            computacional. O design é semelhante a outros óculos, por este motivo deve
                                            haver uma busca para que as marcas melhorem questões relacionadas à
                                            qualidade do dispositivo.<br><br>

                                            Você já utilizou óculos de realidade virtual? Existem versões no mercado que
                                            são feitas de papelão e tem custos muito acessíveis, são os <a
                                                href="https://arvr.google.com/intl/pt-BR_pt/cardboard/"
                                                target="_blank"><em>cardboards</em></a>
                                            da
                                            Google.
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <!-- IMAGEM 02  -->
                        <br>
                        <div class="text-center img-01 wow fadeIn" data-wow-delay="0.3s">
                            <div class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 02 </strong> -
                                Óculos 3D </div>
                            <div class="zoom">
                                <a href="imgs/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img src="imgs/Figura02.png" alt=" Óculos 3D" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Google.</p>
                        </div>

                        <!-- Imagem 02 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura02.png" alt=" Óculos 3D">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 02</strong> - Óculos 3D</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End  (Audi)-->

                        <br>
                        <p class="wow fadeIn" data-wow-delay="0.3s">A frase sobre usabilidade é curta a ponto de não entendermos qual a relação
                            dela com a essência do termo. O objetivo já é mais claro, a usabilidade como é apresentada é
                            considerada como uma vantagem do produto. Antes mesmo de conhecermos mais sobre usabilidade,
                            é possível se perguntar sobre alguns pontos:
                        </p><br>

                        <ol class="wow fadeIn" data-wow-delay="0.3s"id="txt_final">
                            <li>Quem decidiu agregar conceitos de usabilidade ao dispositivo?</li>
                            <li>Qual metodologia que envolve usabilidade foi utilizada para chegar na escolha desse
                                comportamento?</li>
                            <li>Com que nível de certeza é possível afirmar que esse é um comportamento ideal para seus
                                usuários?</li>
                            <li>Por que adicionar uma característica que trará uma limitação física de uso do
                                dispositivo pode melhorar a usabilidade? Já que ao conectar a um carregador o usuário
                                terá uma movimentação limitada.</li>
                            <li>As aberturas propostas são fáceis de utilizar?</li>
                            <li>Você se recordaria facilmente para que servem?</li>
                            <li>Seria possível reconhecer para que servem sem ler a caixa ou o manual?</li>
                        </ol>

                        <br>
                        <p class="wow fadeIn" data-wow-delay="0.3s">Não vamos antecipar aqui definições formais de usabilidade, mas vamos trazer
                            ao longo deste material as respostas para cada uma destas perguntas. Existem diversas
                            características de qualidade que podemos aplicar aos sistemas e dispositivos. A decisão de
                            acrescentar um nível de qualidade em alguma destas características pode ter impacto em como
                            esse sistema ou dispositivo é aceito pelos seus usuários e pelo mercado. Vamos à teoria?
                        </p>

                    </div>
                </div>

        </section>
        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="fa-solid fa-chevron-right"></i></a>
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