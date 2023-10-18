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
                        <h3 class="Subtopico fw-bolder">03.1 - Visibilidade de qual estado estamos no sistema</h3>
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

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 14:</strong>
                                Botão indicando o andar no elevador</p>
                            <div class="zoom">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img src="imgs/figura14.png" alt="Imagem que remete a organização" id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Google.</p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/figura14.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
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

                        <ol>
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
                            <div class="zoom">
                                <a href="imgs/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                    <img src="imgs/Figura15.png" alt="Imagem que remete a organização" id="img-15">
                                </a>
                            </div>
                            <div class="zoom">
                                <a href="imgs/Figura15_1.png" data-bs-toggle="modal" data-bs-target="#Imagem15_1">
                                    <img src="imgs/Figura15_1.png" alt="Imagem que remete a organização" id="img-15_1">
                                </a>
                            </div>
                            <div class="zoom">
                                <a href="imgs/Figura15_2.png" data-bs-toggle="modal" data-bs-target="#Imagem15_2">
                                    <img src="imgs/Figura15_2.png" alt="Imagem que remete a organização" id="img-15_2">
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
                        <h3 class="Subtopico fw-bolder">03.2 - Correspondência entre o sistema e o mundo real
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
                                    <img src="imgs/Figura16.png" alt="Imagem que remete a organização" id="img-16">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Google.</p>
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
                            <div class="zoom">
                                <a href="imgs/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                    <img src="imgs/Figura17.png" alt="Imagem que remete a organização" id="img-17">
                                </a>
                            </div>
                            <div class="zoom">
                                <a href="imgs/Figura17.1.png" data-bs-toggle="modal" data-bs-target="#Imagem17.1">
                                    <img src="imgs/Figura17.1.png" alt="Imagem que remete a organização" id="img-17.1">
                                </a>
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
                                    <img src="imgs/Figura18.png" alt="Imagem que remete a organização" id="img-18">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Autor em Windows.
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
                                    <img src="imgs/Figura19.png" alt="Imagem que remete a organização" id="img-19">
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

                        <!-- ACCORDION DE CURIOSIDADE AQUI  -->

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
                        <h3 class="Subtopico fw-bolder">03.3 - Liberdade de controle fácil pro usuário</h3>
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
                                    <img src="imgs/Figura20.png" alt="Imagem que remete a organização" id="img-20">
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
                                    <img src="imgs/Figura21.png" alt="Imagem que remete a organização" id="img-21">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>autor em aplicativo
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
                        <h3 class="Subtopico fw-bolder">03.4 - Consistência e Padrões</h3>
                        <!-- subtopico -->

                        <p class="scrool"><strong>Um mesmo comando ou ação deve ter sempre o mesmo efeito. </strong> A
                            mesma operação deve ser apresentada na mesma localização e deve ser
                            formatada ou apresentada da mesma maneira para facilitar o
                            reconhecimento. Desta forma você garante <strong> consistência </strong>, que é esperada em
                            diversos níveis: consistência entre os sistemas de uma mesma organização
                            (interna) ou consistência entre padrões globais (externa). Essa consistência é
                            também aplicada aos termos utilizados como títulos e menus.
                        </p>

                        <p class="scrool">Para desenvolvimento de interface sistemas, existem diversos padrões
                            bem estabelecidos. Um destes é o Material Design <strong> (Figura 22) </strong> que possui
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
                                    <img src="imgs/Figura22.png" alt="Imagem que remete a organização" id="img-22">
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
                        <h3 class="Subtopico fw-bolder">03.5 - Prevenção de Erros
                        </h3>
                        <!-- subtopico -->

                        <p class="scrool">É imprescindível que se evite situações de erro para ter uma boa
                            interação. Esta heurística trata de conhecer as <strong> situações que mais provocam
                                erros e modificar a interface para que estes erros não ocorram </strong>. Por exemplo,
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
                                    <img src="imgs/Figura23.png" alt="Imagem que remete a organização" id="img-23">
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

                        <p class="scrool">No exemplo da <strong> Figura 24 </strong>, vemos a prevenção de erro na ortografia de
um termo buscado no buscador web da Google.
                        </p>


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