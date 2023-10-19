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

                        <ol class="scrool" id="txt_final">
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

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item3.1">03.1 - Visibilidade de qual estado estamos no sistema</h3>
                        <!-- subtopico -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">O sistema deve informar continuamente ao usuário sobre o que ele está
                            fazendo e a situação atual do sistema. Isto é, ele deve informar se há algum
                            processamento que está sendo realizado internamente e informar, por
                            exemplo, se uma requisição deu certo ou errado ou quanto tempo falta para
                            finalizá-la. O que seria isto na prática? Uma forma simples de entender o
                            feedback é o botão do elevador indicando em qual andar você e outras
                            pessoas irão descer.<strong> Veja a Figura 14. </strong>
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01 fig14">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 14:</strong>
                                Botão indicando o andar no elevador</p>
                            <div class="zoom">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="w-50" src="imgs/figura14.png" alt="Imagem"
                                        id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Google.</p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-50">
                                    <img class="img-fluid" src="imgs/figura14.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-50 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>Google.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Ainda no exemplo do elevador, suponha que você apertou o botão de
                            um andar e ele não ficou marcado, o que você faria? Provavelmente você
                            entenderia que houve um problema ao apertar o botão e apertaria
                            novamente. Se não tivesse esse retorno do sistema, como saberia se deu
                            certo ou errado?
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Essa informação sobre o estado do sistema deve ser dada o mais rápido
                            possível. Além disso, deve ser clara e significativa. Por exemplo, não faz
                            sentido apresentar ao usuário que um dado do sistema está sendo salvo no
                            banco de dados da aplicação, já que para o usuário esta informação pode
                            não ser bem compreendida, por ser muito técnica. Neste caso, pedir para
                            aguardar e informar que está salvando seria o suficiente.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->
                        <p class="scrool">
                            A <strong>Figura 15</strong> traz mais três exemplos de como dar visibilidade ao estado
                            do sistema, descritos abaixo:
                        </p>

                        <ol class="scrool" id="txt_final">
                            <li>Na primeira imagem, há uma informação sobre uma atualização salva
                                com sucesso. Essa informação está bem posicionada ao lado do botão
                                salvar, permitindo que seja visualizada caso a pessoa pense em salvar
                                novamente ou fique em dúvida.</li>
                            <li>Na segunda imagem vemos um clássico dessa heurística, um modal que
                                informa quantos porcentos foram concluídos de uma cópia de arquivos.
                                A partir dele é possível estimar quanto ainda falta para finalizar a
                                atividade.
                            </li>
                            <li>Na terceira vemos um modal indicando os estados de uma conexão que
                                depende de três pontos ativos para estar ativa. Na imagem o terceiro
                                ponto está com problemas, que é indicado pela cor cinza e pelo ícone
                                em vermelho que indica atenção. A imagem passa a informação de que
                                não há conexão e já indica onde está o problema.</li>
                        </ol>

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 15, 15.1 e
                                    15.2:</strong>
                                Exemplos de como dar visibilidade ao estado do sistema</p>


                            <div class="container text-center">
                                <div class="row">

                                    <div class="zoom col">
                                        <a href="imgs/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                            <img src="imgs/Figura15.png" alt="Imagem"
                                                id="img-15">
                                        </a>
                                    </div>
                                    <div class="zoom col">
                                        <a href="imgs/Figura15_1.png" data-bs-toggle="modal"
                                            data-bs-target="#Imagem15_1">
                                            <img src="imgs/Figura15_1.png" alt="Imagem"
                                                id="img-15_1">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="zoom img15_2">
                                <a href="imgs/Figura15_2.png" data-bs-toggle="modal" data-bs-target="#Imagem15_2">
                                    <img src="imgs/Figura15_2.png" alt="Imagem" id="img-15_2">
                                </a>
                            </div>



                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>autor.</p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem15" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura15.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>autor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->
                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem15_1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura15_1.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>autor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->
                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem15_2" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura15_2.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>autor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Além do retorno de ações mais comuns, tenha atenção nas informações
                            cruciais do sistema. De acordo com Nielsen, nenhuma ação com
                            consequências para os usuários deve ser realizada sem informá-los e isto é
                            necessário para estabelecer confiança no sistema.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item3.2">03.2 - Correspondência entre o sistema e o mundo real
                        </h3>
                        <!-- subtopico -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">A terminologia utilizada nas interfaces deve ser baseada na linguagem
                            do usuário e não orientada ao sistema. As informações devem ser
                            organizadas conforme o modelo mental do usuário. Isto na prática significa
                            que devemos <strong> evitar termos técnicos ou termos específicos do negócio</strong>
                            envolvido. Não somente os termos, mas os conceitos utilizados e os ícones
                            devem ser familiares ao usuário.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Suponha que você precisa criar uma interface que informa trajetos de
                            ônibus exclusivo para sua cidade. Qual dos ícones da <strong> Figura 16 </strong> você
                            utilizaria? Se você mora em Fortaleza, que possui paradas como as da <strong> Figura
                                17 </strong>, provavelmente escolheria a última opção, ou escolheria alguma das
                            outras transformando a placa de redonda para quadrada.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 16:</strong>
                                Ícones para parada de ônibus</p>
                            <div class="zoom">
                                <a href="imgs/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                    <img src="imgs/Figura16.png" alt="Imagem" id="img-16">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary mb-5"><strong>Fonte:</strong>Google.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem16" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura16.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>Google.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 17 e 17.1:</strong>
                                Paradas de ônibus em Fortaleza</p>

                            <div class="container text-center">
                                <div class="row">

                                    <div class="zoom col">
                                        <a href="imgs/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                            <img src="imgs/Figura17.png" alt="Imagem"
                                                id="img-17">
                                        </a>
                                    </div>
                                    <div class="zoom col">
                                        <a href="imgs/Figura17.1.png" data-bs-toggle="modal"
                                            data-bs-target="#Imagem17.1">
                                            <img src="imgs/Figura17.1.png" alt="Imagem"
                                                id="img-17.1">
                                        </a>
                                    </div>

                                </div>
                            </div>


                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong><a
                                    href="https://diariodonordeste.verdesmares.com.br/metro/falta-abrigo-nos-pontos-de-onibus-de-fortaleza-1.91536">Diário
                                    do Nordeste</a> e <a
                                    href="https://g1.globo.com/ce/ceara/noticia/2019/11/07/paradas-de-onibus-de-fortaleza-terao-pavimento-de-concreto.ghtml">G1</a>.
                            </p>
                        </div>

                        <!-- Imagem  - MODAL-->
                        <div class="modal fade text-center" id="Imagem17" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura17.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>Diário do Nordeste e G1.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->
                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem17.1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura17.1.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>Diário do Nordeste e G1.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Por que ter esse cuidado em carregar esse nível de realidade no ícone?
                            Pelo <strong>modelo mental</strong> que temos dos objetos. Se você fez o curso “O que
                            design ux?”, deve lembrar que modelo mental é a <strong> representação do
                                processo de pensamento de alguém para saber como algo funciona </strong> (ou
                            seja, a compreensão da pessoa sobre o mundo que a envolve). Então quanto
                            mais próximo do modelo mental um elemento da interface é, mais fácil será
                            de ser compreendida. De acordo com Nielsen [8], é mais fácil para os usuários
                            aprenderem e lembrarem como a interface funciona quando há esse
                            mapeamento entre os modelos e isso ajuda a construir uma experiência
                            intuitiva.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">A <strong> Figura 18 </strong> mostra outro exemplo em que a lixeira do
                            Windows traz o
                            modelo mental de forma bem próxima do que se espera de uma lixeira,
                            mesmo que esta seja virtual e não precise ser um local físico, como proposto
                            no ícone.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 18:</strong>
                                Ícone da lixeira no Windows</p>
                            <div class="zoom">
                                <a href="imgs/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                    <img src="imgs/Figura18.png" alt="Imagem" id="img-18">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Autor em
                                Windows.
                            </p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem18" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura18.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>Autor em Windows.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">A <strong> Figura 19 </strong> apresenta mais um exemplo, que vai fazer
                            relembrar
                            momentos passados àqueles que utilizaram computadores desde décadas
                            passadas: uma interface antiga do Winamp, um aplicativo para ouvir músicas
                            no computador bastante utilizado nos anos 2000. Nela vemos diversos
                            botões que simulavam os botões dos rádios físicos da época, como o
                            equalizador.

                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                Representação
                                do tempo na mente humana</p>
                            <div class="zoom">
                                <a href="imgs/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                    <img src="imgs/Figura19.png" alt="Imagem" id="img-19">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong><a
                                    href="https://www.techtudo.com.br/noticias/2018/03/oito-curiosidades-sobre-o-winamp-player-que-era-sucesso-nos-anos-2000.ghtml">Techtudo</a>
                            </p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem19" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura19.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong><a
                                            href="https://www.techtudo.com.br/noticias/2018/03/oito-curiosidades-sobre-o-winamp-player-que-era-sucesso-nos-anos-2000.ghtml">Techtudo</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

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
                                        <p class="txt-caixasecundaria">Se você tem memórias afetivas da interface do
                                            Winamp ou apenas quer
                                            conhecer a interface que citamos, acesse uma versão online do sistema em
                                            <a href="https://webamp.org/">https://webamp.org/.</a> O aplicativo
                                            desktop
                                            foi descontinuado desde 2013.
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Esta heurística também diz respeito à <strong> ordem </strong> em que os
                            objetos são
                            postos ou ocorrem. Informações devem aparecer em ordem cronológica e
                            natural, de acordo com as convenções do mundo real. Essa regra tem que
                            estar de acordo com a realidade da aplicação. É comum, por exemplo, listas
                            de municípios de um estado estarem em ordem alfabética, porém a capital se
                            apresenta antes de todas as outras cidades por ser a mais utilizada. <strong> Lembre-se:
                                cada
                                interação é única </strong> , nem sempre a ordem esperada é a alfabética.

                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item3.3">03.3 - Liberdade de controle fácil pro usuário</h3>
                        <!-- subtopico -->

                        <p class="scrool">O usuário deve controlar o sistema e <strong> poder a qualquer momento
                                abortar uma tarefa ou desfazer uma operação para retornar ao estado
                                anterior </strong>. É necessário deixar sempre claro como é possível retornar a um
                            estado anterior. Uma aplicação prática desta heurística, que é bastante
                            comum no dia a dia de quem utiliza computadores, é o atalho Ctrl + z, que
                            desfaz a última ação em sistemas. Veja o exemplo deste atalho na interface
                            de um editor de texto na <strong> Figura 20 </strong>.

                        </p>

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 20:</strong>
                                Atalho para desfazer uma ação</p>
                            <div class="zoom">
                                <a href="imgs/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                    <img src="imgs/Figura20.png" alt="Imagem" id="img-20">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>autor em Google
                                Docs.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem20" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura20.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>autor em Google Docs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <p class="scrool">Um outro exemplo, menos comum, é o processo de apagar mensagens
                            de aplicativos de conversas instantâneas, como <a
                                href="https://www.whatsapp.com/?lang=pt_br"> Whatsapp </a> <strong> (Figura 19)
                            </strong>. Há um
                            conflito nessa questão, pois ao apagar a mensagem o aplicativo não dá
                            visibilidade a outra pessoa do que foi inicialmente recebido. Então, na solução
                            atual, o Whatsapp entrega uma informação de que aquela mensagem foi
                            apagada. Outros sistemas de mensagem utilizam informes sobre mensagens
                            que foram editadas, para que se mantenha a integridade da informação
                            exposta.
                        </p>

                        <p class="scrool">Esse poder de retorno de uma ação cria confiabilidade no uso: é mais
                            seguro saber que você pode apagar uma mensagem se enviar no grupo
                            errado. Entretanto, é interessante refletir sobre o impacto dessa ação no
                            processo no qual o sistema está envolvido.
                        </p>

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 21:</strong>
                                Apagar mensagem no Whatsapp
                            </p>
                            <div class="zoom">
                                <a href="imgs/Figura21.png" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                    <img src="imgs/Figura21.png" alt="Imagem" id="img-21">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>autor em
                                aplicativo
                                Whatsapp.
                            </p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem21" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura21.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>autor em aplicativo Whatsapp.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->


                        <p class="scrool">De acordo com Nielsen, quando uma ação é fácil de desfazer, isso
                            fomenta um senso de liberdade e confiança com o sistema, dando controle a
                            quem o utiliza.
                        </p>

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item3.4">03.4 - Consistência e Padrões</h3>
                        <!-- subtopico -->

                        <p class="scrool"><strong>Um mesmo comando ou ação deve ter sempre o mesmo efeito. </strong>
                            A
                            mesma operação deve ser apresentada na mesma localização e deve ser
                            formatada ou apresentada da mesma maneira para facilitar o
                            reconhecimento. Desta forma você garante <strong> consistência </strong>, que é esperada
                            em
                            diversos níveis: consistência entre os sistemas de uma mesma organização
                            (interna) ou consistência entre padrões globais (externa). Essa consistência é
                            também aplicada aos termos utilizados como títulos e menus.
                        </p>

                        <p class="scrool">Para desenvolvimento de interface sistemas, existem diversos padrões
                            bem estabelecidos. Um destes é o Material Design <strong> (Figura 22) </strong> que
                            possui
                            regras de design para aplicações diversas e trata de componentes, cores e
                            outras características da interface e interação de um sistema
                        </p>

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 22:</strong>
                                Material Design
                            </p>
                            <div class="zoom">
                                <a href="imgs/Figura22.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                    <img src="imgs/Figura22.png" alt="Imagem" id="img-22">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> <a
                                    href="https://m3.material.io/"> Material Design.</a></p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem22" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura22.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong><a href="https://m3.material.io/">
                                            Material Design.</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <p class="scrool">Utilizar padrões torna as interfaces mais fáceis de aprender. Sistemas que
                            seguem modelos conceituais bem estabelecidos são fáceis de usar. Apesar
                            disso, é comum se questionar se: é possível inovar seguindo padrões? Sim.
                            Tanto é possível, que o próprio Material Design apresenta exemplos de
                            interfaces que conseguem inovar respeitando as regras ou negando algumas
                            com uma justificativa plausível.
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
                                        <p class="txt-caixasecundaria">Conheça os exemplos de interfaces no Material
                                            Design, chamados de
                                            Material Studies, e veja como um padrão pode tomar diferentes formatos:
                                            <a
                                                href="https://m2.material.io/design/material-studies/about-our-material-studies.html">Material
                                                Studies.</a>
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->


                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item3.5">03.5 - Prevenção de Erros
                        </h3>
                        <!-- subtopico -->

                        <p class="scrool">É imprescindível que se evite situações de erro para ter uma boa
                            interação. Esta heurística trata de conhecer as <strong> situações que mais provocam
                                erros e modificar a interface para que estes erros não ocorram </strong>. Por
                            exemplo,
                            sempre que
                            houver uma ação decisiva, é importante apresentar
                            uma opção de confirmar esta ação ou cancelar antes de executá-la.
                        </p>

                        <p class="scrool">Um exemplo prático da prevenção de erros é o que acontece em
                            cadastros quando os campos obrigatórios não são preenchidos ou são
                            preenchidos de forma incorreta. A <strong> Figura 23 </strong> apresenta esse tipo de
                            retorno
                            que acontece de forma contextual, facilitando a correção.
                        </p>

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 23:</strong>
                                Exemplos de cadastro indicando possíveis erros</p>
                            <div class="zoom">
                                <a href="imgs/Figura23.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                    <img src="imgs/Figura23.png" alt="Imagem" id="img-23">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Autor.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem23" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura23.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>Autor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <p class="scrool">No exemplo da <strong> Figura 24 </strong>, vemos a prevenção de erro na
                            ortografia de
                            um termo buscado no buscador web da Google.
                        </p>

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 24:</strong>
                                Exemplo de prevenção de erro em buscador web</p>
                            <div class="zoom">
                                <a href="imgs/Figura24.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                    <img src="imgs/Figura24.png" alt="Imagem" id="img-24">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Google.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem24" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura24.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong>Google.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM  -->

                        <p class="scrool">De acordo com Nielsen, existem dois tipos de erros: <strong>deslizes
                            </strong>(slips) e
                            <strong> erros </strong>(errors). Deslizes são erros inconscientes causados por
                            desatenção.
                            Erros
                            são conscientes e baseados em uma incompatibilidade entre o modelo
                            mental do usuário e o design. Erros são mais graves e requerem mais atenção
                            no design.
                        </p>


                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item3.6"> 03.6 - Reconhecimento em vez de memorização</h3>
                        <!-- subtopico -->

                        <p class="scrool"> Você conhece todos os programas da sua máquina de lavar roupa? Você
                            se recorda de como deve colocar o sabão, o amaciante e quanto tempo
                            levará para você retirar suas roupas limpas? Essa heurística irá atuar nestas
                            questões. Veja o exemplo da torneira da <strong>Figura 25</strong> . Imagine utilizá-la
                            pela
                            primeira vez, como você faria? Após conhecer como funciona, se você se
                            deparasse com ela novamente após 1 ano, se lembraria como abri-la? Esta é
                            uma brincadeira de uma empresa de torneiras, que, apesar da irreverência,
                            pode ser semelhante a problemas encontrados em interfaces reais.
                        </p>

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 25:</strong>
                                Torneira com abertura diferenciada</p>
                            <div class="zoom">
                                <a href="imgs/Figura25.png" data-bs-toggle="modal" data-bs-target="#Imagem25">
                                    <img src="imgs/Figura25.png" alt="Imagem" id="img-25">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> <a
                                    href="https://bemlegaus.com/page/4">Bem Legaus.</a></p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem25" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura25.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong><a
                                            href="https://bemlegaus.com/page/4">Bem Legaus.</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

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
                                        <p class="txt-caixasecundaria">Se você achou interessante a torneira
                                            incomum,
                                            indico conhecer o
                                            Jacques Carelman. Um ilustrador francês que publicou em 1969 um catálogo
                                            de objetos improváveis [12] que são inutilizáveis, estranhos e por
                                            quebrarem
                                            a lógica, isto é, fugir dos modelos mentais que temos dos objetos, os
                                            exemplos são divertidos. Conheça algumas peças do livro em <a
                                                href="https://www.laboiteverte.fr/les-objets-introuvables-de-jacques-carelman/">“Les
                                                objets
                                                introuvables de Jacques Carelman”.</a>
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool"> <strong> Objetos, ações e opções devem estar visíveis e devem ser
                                coerentes
                                em sua apresentação</strong>. Por exemplo, instruções de uso do sistema devem ser
                            fáceis de serem encontradas ou facilmente recuperadas sempre que
                            necessário. De acordo com Nielsen [8], os humanos têm memórias de curto
                            prazo limitadas. Então, as interfaces que promovem o reconhecimento
                            reduzem a quantidade de esforço cognitivo exigido dos usuários.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Para aplicar o reconhecimento em vez de memorização, é possível
                            utilizar-se de padrões, como ícones comuns para determinadas ações. Uma
                            outra forma de aplicar o reconhecimento em vez de memorização, é entregar
                            opções em vez de pedir respostas abertas. Por exemplo, campos
                            autocomplete, que completam o que está sendo digitado. Ao mostrar os
                            elementos de diálogo, o design de uma interface permite que o usuário faça
                            suas escolhas sem a necessidade de lembrar um termo específico. Veja um
                            exemplo deste componente na <strong>Figura 26.</strong>
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 26:</strong>
                                Campo autocomplete</p>
                            <div class="zoom">
                                <a href="imgs/Figura26.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                                    <img src="imgs/Figura26.png" alt="Imagem" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong><a
                                    href="https://jqueryui.com/autocomplete/">JQueryUi.</a></p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura26.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong><a
                                            href="https://jqueryui.com/autocomplete/">JQueryUi.</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item3.7"> 03.7 - Flexibilidade e Eficiência de Uso</h3>
                        <!-- subtopico -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">A flexibilidade e eficiência de uso diz respeito a <strong> atalhos para
                                usuários
                                experientes executarem as operações ou recuperarem informações mais
                                rapidamente. </strong> A flexibilidade das interfaces tem a finalidade de tornar a
                            atividade mais eficaz. Na prática isso podem ser:
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- lista ordenada  -->
                        <ol class="scrool" id="txt_final">
                            <li>Abreviações;</li>
                            <li>Teclas de função;</li>
                            <li>Duplo clique no mouse;</li>
                            <li>Customizações;</li>
                            <li>Função de volta em sistemas hipertexto e outros.</li>
                        </ol>
                        <!-- fim da lista ordenada  -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Um exemplo prático são os atalhos que utilizamos em sistemas para
                            edição de texto, como <a href="https://www.microsoft.com/pt-br/microsoft-365/word">Microsoft
                                Word</a> . A <strong>Figura 27</strong> apresenta atalhos usados
                            com frequência no sistema. Quantos destes você sabe de cor?
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 27:</strong>
                                Atalhos do Microsoft Word</p>
                            <div class="zoom">
                                <a href="imgs/Figura27.png" data-bs-toggle="modal" data-bs-target="#Imagem27">
                                    <img src="imgs/Figura27.png" alt="Imagem" id="img-27">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong><a
                                    href="https://support.microsoft.com/pt-br/office/atalhos-de-teclado-do-word-95ef89dd-7142-4b50-afb2-f762f663ceb2">
                                    Atalhos de teclado do Word - Suporte do Office .</a></p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem27" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura27.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong><a
                                            href="https://support.microsoft.com/pt-br/office/atalhos-de-teclado-do-word-95ef89dd-7142-4b50-afb2-f762f663ceb2">
                                            Atalhos de teclado do Word - Suporte do Office .</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item3.8"> 03.8 - Estética e design minimalista</h3>
                        <!-- subtopico -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">As <strong>interfaces não devem conter informações irrelevantes ou
                                raramente utilizadas</strong> . É necessário compreender que informações o usuário
                            necessita e quais
                            opções devem estar disponíveis no momento, para entregar
                            somente o suficiente, nem mais, nem menos.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Para isto, os elementos visuais da interface devem apoiar os objetivos
                            principais do usuário. Além disso, a sequência da interação e o acesso aos
                            objetos e operações devem ser compatíveis com o modo pelo qual o usuário
                            realiza suas tarefas.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->


                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Um bom exemplo de evolução de interface que buscou entregar uma
                            estética e design minimalistas é a interface do buscador Google. Veja na
                            <strong>Figura 28</strong> a evolução da interface do Google ao longo dos anos. É
                            possível
                            ver que houve uma redução visual de informações e nos elementos da
                            interface que tornou cada nova versão mais minimalista e focada em sua
                            função principal: buscar algo na Internet.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 28:</strong>
                                Evolução da interface do buscador Google</p>
                            <div class="zoom">
                                <a href="imgs/Figura28.png" data-bs-toggle="modal" data-bs-target="#Imagem28">
                                    <img src="imgs/Figura28.png" alt="Imagem" id="img-28">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong><a
                                    href="https://hackernoon.com/the-past-present-and-the-future-of-design-thinking-2a07d02193c7">Hackernoon.</a>
                            </p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem28" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura28.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong><a
                                            href="https://hackernoon.com/the-past-present-and-the-future-of-design-thinking-2a07d02193c7">Hackernoon.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->

                        <!-- FIM DA IMAGEM NO SITE  -->

                        <!-- subtopico -->
                        <h3 class="Subtopico fw-bolder" id="item3.9">03.9 - Ajude os Usuários a Reconhecerem, Diagnosticarem e
                            Recuperarem-se de Erros</h3>
                        <!-- subtopico -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">As mensagens que interagem com usuários devem ser expressas em
                            linguagem simples (sem utilização de códigos), indicando o problema e
                            sugerindo uma solução. É essencial <strong>ajudar o usuário a entender e resolver
                                um erro do sistema</strong> . Para isto, a interface não deve culpá-lo ou
                            intimidá-lo.
                            Sobre as mensagens de erro, é importante que mensagens de erro:
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- lista ordenada  -->
                        <ol class="scrool" id="txt_final">
                            <li>sejam <strong>claras e simples</strong> de serem entendidas e</li>
                            <li>ofereçam uma <strong> forma de se recuperar do erro.</strong></li>
                        </ol>
                        <!-- fim da lista ordenada  -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">Além do texto, o visual do erro também deve ser bem apresentado e
                            destacado. É comum utilizar a cor vermelha para indicar campos preenchidos
                            de forma incorreta ou não preenchidos. Por este motivo, tenha atenção no
                            uso do vermelho para componentes na sua interface, principalmente em
                            mensagens de retorno de uma ação. Discutimos uma situação deste
                            problema no sub-tópico <strong> 02.4 - O que não é usual?, Figura 10.</strong>
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool">É também importante que as mensagens de erro satisfaçam seus
                            usuários, ou pelo menos não os assustem. A <strong>Figura 29</strong> apresenta um
                            exemplo clássico de interface indevida para um vírus detectado. O modal era
                            utilizado em uma versão antiga do software antivírus <a
                                href="https://www.avg.com/pt-br/homepage#pc">AVG</a> . O problema,
                            detecção de um vírus, está apresentado de forma clara e a solução mais
                            rápida está no botão Move to Vault, que traduzido é mover para quarentena.
                            Apesar de ter um valor sentimental daqueles que utilizaram computadores
                            nas décadas de 90 e no início dos anos 2000, essa interface pode ser mais
                            assustadora do que o necessário para um usuário despreparado. Não é justo
                            julgar uma interface antiga com o que conhecemos e utilizamos hoje em
                            usabilidade, mas ilustra bem como podemos apresentar melhor mensagens
                            de erro. Medo é o sentimento ideal para resolver problemas?
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

                        <!-- IMAGEM NO SITE  -->

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 29:</strong>
                                Interface antiga de detecção do antivírus AVG</p>
                            <div class="zoom">
                                <a href="imgs/Figura29.png" data-bs-toggle="modal" data-bs-target="#Imagem29">
                                    <img src="imgs/Figura29.png" alt="Imagem" id="img-29">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Dribbble.</p>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem29" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura29.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong> Dribbble.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem - End-->


                        <!-- Parágrafo com a biblioteca de animação  -->
                        <p class="scrool"> Apesar de estas instruções serem fundamentais, não é incomum ver
                            mensagens que as infringem. O impacto disto pode ser enorme e irreversível.
                            Don Norman, em seu famoso livro “O Design do Dia-a-dia”, afirma que seres
                            humanos não erram sempre, mas erram com frequência quando as coisas que
                            usam são mal concebidas e mal projetadas.
                        </p>
                        <!--  Fim do Parágrafo com a biblioteca de animação -->

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
                                        <p class="txt-caixasecundaria">Projetar interfaces pode ser essencial para
                                            um
                                            uso sem erros. Para
                                            exemplificar isto, Norman apresentou resultados de uma análise sua em
                                            acidentes industriais. No desastre que aconteceu na usina nuclear Three
                                            Mile
                                            Island, a culpa do acidente foi atribuída às pessoas que operavam a
                                            máquina
                                            e fizeram um diagnóstico errôneo do problema. Em sua análise, Norman
                                            verificou que na verdade houve uma série de problemas mecânicos que para
                                            correção deveriam verificar até luzes que indicavam o problema exato
                                            atrás
                                            do painel de controle, isto é, de difícil acesso. Ele então concluiu que
                                            <strong> “houve
                                                falha de equipamento combinada com grave erro de design”. </strong>
                                            Depois
                                            desse exemplo, parece justo lidar com o mea-culpa do design de sistemas?
                                        </p>
                                        <!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->


                                <!-- Parágrafo com a biblioteca de animação  -->
                                <p class="scrool col paragrafo">Uma abordagem interessante para
                                    mensagens de erro, é torná-la mais
                                    amigável e interativa, diferente da que
                                    vimos na interface antiga do AVG <strong>(Figura
                                        27).</strong> Veja o exemplo da página de erro 404
                                    do Dribbble na <strong> Figura 30 </strong> ou clicando no
                                    link: <a href="https://dribbble.com/shots/3429843--Reality">mensagem de erro do
                                        Dribbble</a>
                                    .
                                </p>
                                <!--  Fim do Parágrafo com a biblioteca de animação -->

                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01 col">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 30:</strong>
                                        Erro 404 do Dribbble</p>
                                    <div class="zoom">
                                        <a href="imgs/Figura30.jpg" data-bs-toggle="modal" data-bs-target="#Imagem30">
                                            <img class="w-50" src="imgs/Figura30.jpg" alt="Imagem"
                                                id="img-30">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Dribbble.
                                    </p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem30" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid" src="imgs/Figura30.jpg"
                                                alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte:</strong>Dribbble.</p>
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
                                                <p class="txt-aviso"><strong class="opacity-75"><strong
                                                            class="opacity-75">
                                                            Passe o mouse acima
                                                        </strong></strong></p>
                                                <p class="txt-caixasecundaria">O erro 404 significa Not Found, em
                                                    português
                                                    “não
                                                    encontrado”. Esta
                                                    falha aparece quando a URL (link) pesquisada não foi encontrada no
                                                    domínio
                                                    buscado, o que também chamamos de link quebrado. Uma causa comum
                                                    para esse erro é a digitação errada, mas também pode acontecer
                                                    quando há
                                                    links desatualizados nas páginas. Outros erros comuns em navegação
                                                    são
                                                    400 - Bad Request, que indica problema na conexão; 401 -
                                                    Authorization
                                                    Required e 403 - Forbidden, que indicam problema de permissão de
                                                    acesso.
                                                </p><!--caixa secundaria-->
                                            </div>
                                        </section>
                                </section>
                                <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                                <!-- subtopico -->
                                <h3 class="Subtopico fw-bolder" id="item3.10"> 03.10 - Ajuda e Documentação</h3>
                                <!-- subtopico -->

                                <p class="scrool">O ideal é que o sistema não precise de documentação extra para que
                                    seja utilizado. Usabilidade em sua essência é justamente a interface ser auto
                                    explicável. <strong> Quando necessário, porém, é importante que este conteúdo
                                        seja também fácil de usar e entender. </strong> Além disso, deve ser fácil de
                                    ser
                                    encontrado e se for longo deve ser fácil de pesquisar algo dentro dele.
                                </p>
                                <!--  Fim do Parágrafo com a biblioteca de animação -->

                                <p class="scrool">O título desta heurística lembra longos documentos de instruções, como
                                    bulas de remédios ou os antigos manuais de instruções que recebíamos com
                                    uma TV nova. Entretanto, vale lembrar que esta heurística não diz respeito a
                                    todo tipo de documentação de software. Ela trata de <strong> informações de ajuda
                                        na interação com usuário </strong>, que devem ser concisas e diretas. Não há
                                    espaço
                                    nessa comunicação para informações extras ou complexas, como uma
                                    documentação técnica da equipe de desenvolvimento.
                                </p>
                                <!--  Fim do Parágrafo com a biblioteca de animação -->

                                <p class="scrool">A forma de aplicação contextual é considerada pelos especialistas
                                    como a forma mais apropriada. Esse formato acontece quando a
                                    informação de ajuda para uma atividade aparece no momento desta
                                    atividade e não fica em um local separado, como em uma tela de ajuda. Veja
                                    na <strong> Figura 31 </strong> um exemplo prático de ajuda contextual. No exemplo
                                    vemos
                                    um modal de ajuda que explica sobre um campo específico da adição do
                                    cartão de crédito. Essa informação é contextual pois se encontra no local
                                    onde o próprio cartão está adicionado, como pode ser visto na tela de fundo.
                                    Desta forma não é necessário sair desta tela e parar a atividade para tirar uma
                                    dúvida.
                                </p>
                                <!--  Fim do Parágrafo com a biblioteca de animação -->

                                <!-- IMAGEM NO SITE  -->

                                <div class="text-center img-01">
                                    <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 31:</strong>
                                        Exemplo de ajuda contextual no iFood</p>
                                    <div class="zoom">
                                        <a href="imgs/Figura31.jpg" data-bs-toggle="modal" data-bs-target="#Imagem31">
                                            <img class="w-50" src="imgs/Figura31.jpg" alt="Imagem"
                                                id="img-31">
                                        </a>
                                    </div>
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong><a
                                            href="https://www.ifood.com.br/">iFood.</a></p>
                                </div>

                                <!-- Imagem - MODAL-->
                                <div class="modal fade text-center" id="Imagem31" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                        <div class="modal-content w-75">
                                            <img class="img-fluid " src="imgs/Figura31.jpg"
                                                alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer w-75 bg-light justify-content-center">
                                            <p class="text-secondary"><strong>Fonte:</strong><a
                                                    href="https://www.ifood.com.br/">iFood.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem - End-->

                                <!-- FIM DA IMAGEM NO SITE  -->


                            </div>
                        </div>
                    </div>
        </section>
    </div>

    <!-- Botões de navegação -->
    <div class="text-center">
        <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                class="fa-solid fa-chevron-left"></i> Voltar </a>
        <a href="topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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

    <?php
    include('layout/footer.php');
    ?>
</body>

</html>