<?php
add_action('init', 'type_post_produtos');
 
function type_post_produtos() { 
	$labels = array(
		'name' => _x('Produtos', 'post type general name'),
		'singular_name' => _x('Produto', 'post type singular name'),
		'add_new' => _x('Adicionar Produto', 'Novo Produto'),
		'add_new_item' => __('Novo Produto'),
		'edit_item' => __('Editar Produto'),
		'new_item' => __('Novo Produto'),
		'view_item' => __('Ver Produto'),
		'search_items' => __('Procurar Produto'),
		'not_found' =>  __('Nenhum produto encontrado'),
		'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Produtos'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,           
		'query_var' => true,
		'menu_icon' => 'dashicons-cart',
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'can_export' => true,
        'exclude_from_search' => false,
		'menu_position' => 3,
		'taxonomies' => array( 'category' ),
		'supports' => array('title','thumbnail', 'editor')
	  );

register_post_type( 'produto' , $args );
flush_rewrite_rules();
}


///////////////////////////////////////
//  Widgets
///////////////////////////////////////
if (function_exists('register_sidebar')) {
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widgettitle">',
			'after_title' => '</h4>',
		)
	);
}
///////////////////////////////////////
// Page Nav
///////////////////////////////////////
function blog_pagenav($before = '', $after = '')
{
	global $wpdb, $wp_query;

	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;

	if (empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = apply_filters('blog_filter_pages_to_show', 8);
	$pages_to_show_minus_1 = $pages_to_show - 1;
	$half_page_start = floor($pages_to_show_minus_1 / 2);
	$half_page_end = ceil($pages_to_show_minus_1 / 2);
	$start_page = $paged - $half_page_start;
	if ($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if (($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if ($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if ($start_page <= 0) {
		$start_page = 1;
	}
	if ($max_page > 1) {
		echo $before . '<div class="pagenav clearfix">';
		if ($start_page >= 2 && $pages_to_show < $max_page) {
			$first_page_text = "&laquo;";
			echo '<a href="' . get_pagenum_link() . '" title="' . $first_page_text . '" class="number">' . $first_page_text . '</a>';
		}
		//previous_posts_link('&lt;');
		for ($i = $start_page; $i <= $end_page; $i++) {
			if ($i == $paged) {
				echo ' <span class="number current">' . $i . '</span> ';
			} else {
				echo ' <a href="' . get_pagenum_link($i) . '" class="number">' . $i . '</a> ';
			}
		}
		//next_posts_link('&gt;');
		if ($end_page < $max_page) {
			$last_page_text = "&raquo;";
			echo '<a href="' . get_pagenum_link($max_page) . '" title="' . $last_page_text . '" class="number">' . $last_page_text . '</a>';
		}
		echo '</div>' . $after;
	}
}
///////////////////////////////////////
// Suporter de Thumnail
///////////////////////////////////////
add_theme_support('post-thumbnails');

///////////////////////////////////////
// Formatação dos comentários
///////////////////////////////////////
function custom_theme_comment($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	?>

	<li id="comment-<?php comment_ID() ?>" <?php comment_class(); ?>>
		<p class="comment-author">
			<?php echo get_avatar($comment, $size = '48'); ?>
			<?php printf('<cite>%s</cite>', get_comment_author_link()) ?><br />
			<small class="comment-time"><strong>
					<?php comment_date('M d, Y'); ?>
				</strong> @
				<?php comment_time('H:i:s'); ?>
				<?php edit_comment_link(__('Editar'), ' [', ']') ?>
			</small>
		</p>
		<div class="commententry">
			<?php if ($comment->comment_approved == '0'): ?>
				<p>
					<em>
						<?php _e('Seu comentário está aguardando aprovação') ?>
					</em>
				</p>
			<?php endif; ?>
			<?php comment_text() ?>
		</div>
		<p class="reply">
			<?php comment_reply_link(array_merge($args, array('add_below' => 'comment', 'depth' => $depth, 'reply_text' => __('Responder'), 'max_depth' => $args['max_depth']))) ?>
		</p>
		<?php
}
?>