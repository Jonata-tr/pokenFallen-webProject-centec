    <?php 
      include "./layouts/header.php";
    ?>
    
    <section id="home">
      <div class="home-parallax">
        <div class="parallax-section parallax1"></div>
        <h1 class="logo home-logo bangers-regular">
          <img src="./assets/pokeball.png" alt="" style="width: 120px;"/>
          PokenFallen
        </h1>
      </div>

      <!-- aqui vai o carrocel -->

      <div class="home-about" id="about">
        <div class="col-12 home-adventure">
          <h2 class="left-icon">Venha se aventurar nesse mundo!</h2>
          <p>
            Com certeza está em busca de uma jornada cheia de desafios. Aqui
            você encontra tudo isso. A aventura será desafiadora, mas conte com
            a nossa comunidade para te ajudar com a criação de estratégias e
            dicas valiosas.
          </p>
        </div>

        <div class="col-12 home-whatIs" id="upgrades">
          <h2 class="left-icon">O que é o PokenFallen?</h2>
          <p>
            É um jogo criado do zero por fãs, aqui temos uma mistura de
            elementos clássicos da franquia Pokémon com mecânicas de RPG,
            permitindo que os jogadores assumam papéis de treinadores de Pokémon
            ou outras funções dentro desse mundo, interagindo com outros npcs e
            completando missões ou objetivos dentro de uma narrativa maior.
          </p>
        </div>
      </div>

      <div class="about-upgrades" >
        <ul class="upgrades-container col-12">
          <li class="upgrade-items">
            <img src="./assets/controller-svgrepo-com.svg" alt="" />
            <p>
              Um jogatina cheia de historias e coisas para explorar, uma região
              inteira com lutas e misterios para você descobrir.
            </p>
          </li>

          <li class="upgrade-items">
            <img src="./assets/cog-svgrepo-com.svg" alt="" />
            <p>
              Novos sistemas de gameplay, como um sistema de profissões
              abrangente, um sistema de customização de personagem alem de
              melhorias no sistema de shinys.
            </p>
          </li>

          <li class="upgrade-items">
            <img src="./assets/stats-1366-svgrepo-com.svg" alt="" />
            <p>
              Sistema de melhorias des pokemons melhorado, evolua seus pokemons
              de novas formas e o leve junto de você a todos os momentos
            </p>
          </li>
        </ul>
      </div>

      <div class="about-historia" id="info">
        <div class="col-12">
          <h2 class="left-icon">Sinopse</h2>
          <p>
            O game se passa em uma realidade paralela à do anime Pokémon, aonde
            o herói Ritchie se depara com suspeitas do ressurgimento da Equipe
            Rocket que foi dissolvida pelo personagem Ethan 6 anos antes da
            história principal. Pouco se sabe sobre tais pistas, mas Silver,
            após ver noticiários vai em busca de investigar os passos de
            Giovanni.
          </p>
        </div>
      </div>

      <div class="about-news" id="news">
        <div class="col-12">
          <h2 class="left-icon">Atualizações e novidades</h2>

          <div class="news-item">
            <a href=""><strong>Atualizaçao - 1.25.465</strong></a>
            <p>
              - Ajustado crash para Resumo de Shuckle na Performance e
              rebalanceado os valores para maximizar o Pokémon.<br />
              - Ajustado ícone de Quaxly.<br />
              - Ajustado situação onde os treinadores inimigos não ativavam mega
              evolução.<br />
              - Ajustado a lógica para efeitos negativos em batalhas contra
              boss, para um efeito não sobrepor outro e a permissão para Sleep e
              efeitos básicos liberados nos Boss da Temporada.<br />
              - Ajustado várias situações onde ao perder e ir para o Centro
              Pokémon e fechar o jogo neste processo a batalha seguia dentro do
              Centro Pokémon.<br />
              - Traduzido alguns diálogos de batalha.<br />
              - Ajustado Health Feather agora dando 20 de EVs.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="col-12" id="faq">
      <div class="container">
        <h2 class="left-icon">Perguntas Frequentes</h2>
        <div class="wrapper">
          <div class="accordion">
            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false">
                <span class="accordion-title"> ATÉ ONDE VAI A HISTÓRIA?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>
                  - O jogo possui o continente de Kanto com 8 Ginásios e Liga
                  Pokémon Indigo.<br />
                  - O continente de Johto está disponível até a Cidade de
                  Goldenrod com um Campeonato Intercontinental inspirado no
                  Mundial do Anime! E também 17 Quests e mais de 10 SideQuests
                  disponíveis.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-2" aria-expanded="false">
                <span class="accordion-title"> O PROJETO É UMA HACKROM?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>O PROJETO É UMA HACKROM?</p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-3" aria-expanded="false">
                <span class="accordion-title"> O PROJETO É UMA HACKROM?</span>
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>
                  Sim, o jogo é dedicado para PC. Mas uma versão android esta no
                  processo de desenvolvimentos e testes.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-4" aria-expanded="false">
                <span class="accordion-title"
                  >É POSSÍVEL JOGAR NO ANDROID?</span
                >
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>
                  Sim, é possível jogar no Android com a versão atualizada do
                  Emulador Joiplay, que se encontra em seu site do Patreon, mas
                  nós fixamos a versão recomendada por aqui.
                </p>
              </div>
            </div>
            <div class="accordion-item">
              <button id="accordion-button-5" aria-expanded="false">
                <span class="accordion-title"
                  >COMO ESTÁ O DESEMPENHO NO ANDROID?</span
                >
                <span class="icon" aria-hidden="true"></span>
              </button>
              <div class="accordion-content">
                <p>
                  O desempenho no Android melhorou e muito desde o início de
                  2023 com muito esforço da equipe que desenvolve o Emulador.
                  Cerca de 98% dos aparelhos já são compatíveis com o jogo. E
                  com nosso time de suporte, estamos trabalhando incansavelmente
                  para atingirmos 100% dos aparelhos.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="about-community">
        <div class="col-12">
          <h2 class="left-icon">Participe da nossa comunidade</h2>
          <div class="community-holder">
            <a href="#" id="wpp">
              <img src="./assets/whatsapp-svgrepo-com.svg" alt="" />
            </a>
            <a href="#" id="fac">
              <img src="./assets/facebook-svgrepo-com.svg" alt="" />
            </a >
            <a href="#" id="disc">
              <img src="./assets/discord-outline-svgrepo-com.svg" alt="" />
            </a">
            <a href="#" id="inst">
              <img src="./assets/instagram-svgrepo-com.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <?php 
      include "./layouts/footer.php";
    ?>

