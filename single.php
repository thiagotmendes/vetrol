<?php get_header() ?>
  <main class="interno">
    <section class="topo-titulo">
      <div class="container">
        <h1><?php the_title() ?></h1>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
              <article class="bloco-noticia">
                <div class="img-noticia">
                  <?php if (has_post_thumbnail()): ?>
                    	<a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                      </a>
                  <?php endif; ?>
                </div>
                <div class="info-adicional">
		              <div class="pull-left info-block calendario">
										<i class="fa fa-calendar-o"></i> <?php the_time('j  F,  Y'); ?> |
										<!--<i class="fa fa-user"></i> <?php  the_author(); ?> |-->
										<i class="fa fa-comment-o"></i> <?php comments_number('Nenhum comentário', '1 comentário', '% comentários'); ?>
									</div>
									<div class="pull-right info-block">
										Categoria: <?php the_category(' '); ?>
									</div>
									<div class="clearfix"></div>
								</div>
                <div class="conteudo-noticia">
                  <?php the_content(); ?>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-4">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer() ?>
