<?php get_header() ?>
  <main class="interno">
    <section class="topo-titulo">
      <div class="container">
        <h1>Blog</h1>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-not">
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

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(  ); ?></a></h2>

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
                  <?php the_excerpt_limit(60); ?>
                </div>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                    <a href="<?php the_permalink() ?>" class="btn btn-noticia btn-block btn-lg"> Leia Mais </a>
                  </div>
                </div>

              </article>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_pagination(); ?>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer() ?>
