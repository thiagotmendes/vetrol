<div class="">
  <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class>
	  <div class="form-group">
	      <input type="text" name="s" id="s" class="form-control" placeholder="Pesquisar...">
	  </div>
	  <button class="btn-block btn btn-4uniformes1" type="submit"><i class="fa fa-search"></i> Pesquisar</button>
  </form>
</div>

<div class="clearfix"></div>
<?php
// Inserindo uma área de Widgets
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral') ) :?>
  <p>Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
<?php
endif;
?>
