<section class="products">
<div class="pagewidth">
<h2>Our Products</h2>
<div id="owl-products" class="owl-carousel owl-theme">

<div class="item">              
<div class="produto">
<img src="<?php echo get_template_directory_uri(); ?>/images/wellness.png" alt="Wellness">
<h3 class="titulo">intibiome wellness daily intimate wash</h3>
<a href=""><button class="wellness">Wellness</button></a>
</div>
</div>

<div class="item">              
<div class="produto">
<img src="<?php echo get_template_directory_uri(); ?>/images/active.png" alt="Active">
<h3 class="titulo">intibiome active extra protection intimate wash</h3>
<a href=""><button class="active">active</button></a>
</div>
</div>

<div class="item">              
<div class="produto">
<img src="<?php echo get_template_directory_uri(); ?>/images/agecare.png" alt="Agecare">
<h3 class="titulo">intibiome agecare dryness relief intimate wash</h3>
<a href=""><button class="agecare">agecare</button></a>
</div>
</div>

</div>
</div>
</section>

<script>
$(document).ready(function() {
var owl = $('#owl-products');
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