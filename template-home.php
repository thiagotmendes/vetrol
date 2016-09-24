<?php /* template name: home */ ?>
<?php get_header(); ?>

    <section class="banner">
      <div class="itens-banner">
        <p align="center">
          <img src="images/up-arrow.png" alt="" />
        </p>
        <h3 class="titulo-banner">Não é CRM, é vendas mesmo!</h3>
        <p class="texto-banner">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        <p align="center">
          <a class="btn btn-solicite" href="#" role="button">
            <img src="<?php echo get_template_directory_uri() ?>/images/copy.png" alt="" class="icon-botao" />
            Solicite uma Proposta
          </a>
          <a class="btn btn-download" href="#" role="button">
            <img src="<?php echo get_template_directory_uri() ?>/images/download.png" alt="" class="icon-botao"/>
            Download de apresentação
          </a>
        </p>
      </div>
    </section>

    <section class="desc-produto">
      <div class="container">
        <h2 class="titulo-section">O que é?</h2>
        <p class="texto-desc">
          O VETROL é um sistema de gestão de pessoas monitorado por software, visando o<br>
          gerenciamento do atendimento de cliente leads até a obtenção de vendas.
        </p>
        <div class="row">
          <div class="col-md-3">
            <p align="center">
              <img src="<?php echo get_template_directory_uri() ?>/images/icon1.png" alt="" class="img-responsive"/>
            </p>
            <h3 class="titulo-desc">Como Funciona?</h3>
            <p class="texto-interno-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
          <div class="col-md-3">
            <p align="center">
              <img src="<?php echo get_template_directory_uri() ?>/images/icon1.png" alt="" class="img-responsive"/>
            </p>
            <h3 class="titulo-desc">Para quem é?</h3>
            <p class="texto-interno-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
          <div class="col-md-3">
            <p align="center">
              <img src="<?php echo get_template_directory_uri() ?>/images/icon1.png" alt="" class="img-responsive"/>
            </p>
            <h3 class="titulo-desc">Não possui equipe de vendas?</h3>
            <p class="texto-interno-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
          <div class="col-md-3">
            <p align="center">
              <img src="<?php echo get_template_directory_uri() ?>/images/icon1.png" alt="" class="img-responsive"/>
            </p>
            <h3 class="titulo-desc">Portal do Afiliado</h3>
            <p class="texto-interno-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="vantagem">
      <div class="container">
        <div class="col-md-7">
          <img src="<?php echo get_template_directory_uri() ?>/images/macbook1.png" alt="" class="img-responsive img-mac"/>
        </div>
        <div class="col-md-5">
          <h2 class="titulo-vantagem">Vantagens</h2>
          <p>
            <img src="<?php echo get_template_directory_uri() ?>/images/1.png" alt="" class="img-numero"/> Produto do Grupo Andrade Martins
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri() ?>/images/2.png" alt="" class="img-numero"/> Produto do Grupo Andrade Martins
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri() ?>/images/3.png" alt="" class="img-numero"/> Produto do Grupo Andrade Martins
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri() ?>/images/4.png" alt="" class="img-numero"/> Produto do Grupo Andrade Martins
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri() ?>/images/5.png" alt="" class="img-numero"/> Produto do Grupo Andrade Martins
          </p>
          <a class="btn btn-orcamento" href="#" role="button">Solicite um Orçamento</a>
        </div>
      </div>
    </section>

    <section id="missao" class="bgParallax" data-speed="10">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-offset-3">
            <article>
            	<h2 class="titulo-parallax">
                A Excelência do curso é com você.<br>
                Vender é com o Vetrol
              </h2>
              <p class="texto-parallax">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
            </article>
          </div>
        </div>
    </section>

    <section class="blog-home">
      <div class="container">
        <h2 class="titulo-section">Blog</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="box-noticia-home">
              <img src="<?php echo get_template_directory_uri() ?>/images/news1.jpg" alt="" />
              <h3 class="titulo-noticia-home">Titulo Noticia</h3>
              <p class="info-add">
                Quarta-Feira, 06 de setembro de 2016
              </p>
              <p class="previa-home">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
              <p align="center">
                <a class="btn btn-noticia" href="#" role="button">Saiba Mais</a>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-noticia-home">
              <img src="<?php echo get_template_directory_uri() ?>/images/news2.jpg" alt="" />
              <h3 class="titulo-noticia-home">Titulo Noticia</h3>
              <p class="info-add">
                Quarta-Feira, 06 de setembro de 2016
              </p>
              <p class="previa-home">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
              <p align="center">
                <a class="btn btn-noticia" href="#" role="button">Saiba Mais</a>
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-noticia-home">
              <img src="<?php echo get_template_directory_uri() ?>/images/news3.jpg" alt="" />
              <h3 class="titulo-noticia-home">Titulo Noticia</h3>
              <p class="info-add">
                Quarta-Feira, 06 de setembro de 2016
              </p>
              <p class="previa-home">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
              <p align="center">
                <a class="btn btn-noticia" href="#" role="button">Saiba Mais</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="depoimento">
      <div class="container">
        <h2 class="titulo-section">Depoimentos</h2>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri() ?>/images/person1.jpg" alt="" />
              </div>
              <div class="col-md-9">
                <p class="depo-home">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="nome-depo">
                  Fernada
                </p>
                <p class="empresa-depo">
                  Empresa Tal
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri() ?>/images/titiiiiii.jpg" alt="" />
              </div>
              <div class="col-md-9">
                <p class="depo-home">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="nome-depo">
                  Titizinho
                </p>
                <p class="empresa-depo">
                  Master of Puppets
                </p>
              </div>
            </div>
          </div>
          <p class="link-depo">
            Faça parte você também. <a href="#"><strong>CLIQUE AQUI!</strong></a>
          </p>
        </div>
      </div>
    </section>

    <section class="parceiro">
      <h2 class="titulo-section">Parceiros</h2>
      <div class="logo-parceiro">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </section>

    <section class="captar">
      <div class="container">
        <div class="col-md-7 col-md-offset-3">
          <h2 class="titulo-section"> Como Captar Muito mais Alunos/Clientes?</h2>
          <p class="desc-produto">
            O Software VETROL vai te ajudar! Preencha o formulário e receba um orçamento sem compromisso
          </p>
          <a class="btn btn-call-action" href="#" role="button">Clique Aqui e Fale com um Consultor</a>
        </div>
      </div>
    </section>

<?php get_footer() ?>
