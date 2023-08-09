<footer class="rodape">
    <div class="pagewidth">
        <nav>
            <ul>
                <li><a href="">contact us</a></li>
                <li><a href="">faq</a></li>
                <li><a href="">site map</a></li>
                <li><a href="">privacy policy</a></li>
                <li><a href="">cookies policy</a></li>
                <li><a href="">legal notice</a></li>

            </ul>
        </nav>

        <div class="row d-flex justify-content-between">
            <div class="col-lg-auto col-12 order-lg-1 order-md-2 order-2 my-auto">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ulabs.png" alt="U.labs" class="logo">
                </a>
            </div>
            <div class="col-lg-auto col-12 order-lg-2 order-md-1 order-1 my-auto">
                <div class="redes">
                    <div class="rede"><a href=""><i class="fab fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="buscamodal">
<div class="modal fade" id="pesquisa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<?php get_search_form(); ?>
</div>
</div>
</div>
</div></div> 
<?php wp_footer(); ?>