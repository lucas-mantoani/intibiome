<form  action="<?php bloginfo('url'); ?>/" method="get">
<div class="row">
<div class="col-lg-10 col-md-10 col-10 my-auto">
<input type="text" name="s" id="search" placeholder="Faça uma busca" value="<?php the_search_query(); ?>" />
</div>

<div class="col-lg-2 col-md-2 col-2 my-auto">
<div class="botaobusca">
<input type="image" src="<?php bloginfo( 'template_url' ); ?>/images/busca.png">
</div>
</div>
</div>
</form>