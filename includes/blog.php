<section class="blog">
<div class="pagewidth">
<h2>keep up to date with our discoveries</h2>
<div id="owl-blog" class="owl-carousel owl-theme">
<?php $args=array('posts_per_page'=>3, 'post_type'=>'post',  'order' => 'desc'); ?>
<?php query_posts($args); while (have_posts()) : the_post(); ?>
<div class="item">              
<div class="postagem">
<?php the_post_thumbnail(); ?>
<h3 class="titulo"><?php the_title(); ?></h3>

</div>
</div>
<?php endwhile; ?>
</div>
<a href=""><button class="more">See More</button></a>
</div>
</div>
</section>

<script>
$(document).ready(function() {
var owl = $('#owl-blog');
owl.owlCarousel({
margin: 30,
nav: false,
loop: true,
dots: false,
center: false,
infinet: false,
navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
responsive: {
320: {
center: true,
items: 1,
loop: false,
margin: 10,
stagePadding: 50
},
1100: {
items: 3,
center: false
},
}
})
})
</script>