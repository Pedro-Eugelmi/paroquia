<section id="comunidades" class="container-fluid home-communities bg-gray">
    <div class="container">
        <div class="row padding-xs">
            <div class="col-12 pt-0">
                <span class="subtitle">Conheças as nossas</span>
                <h2 class="margin-top-xs title">COMUNIDADES:</h2>
            </div>
                
            <div class="col-12 home-communities-item-area swiper-communities flex-wrap p-half d-flex">

                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php 
                                $args = array(
                                    'post_type' => 'comunidade',
                                    'posts_per_page' => -1
                                );

                                $comunidades = new WP_Query( $args );

                                if($comunidades->have_posts()) {
                                    while($comunidades->have_posts()) {
                                        $comunidades->the_post();
                                        include('post-comunidade.php');
                                    }
                                }

                                wp_reset_postdata();
                            ?>
                    </div>

                </div>    

                
                <button aria-label="Próximo" class="swiper-button-next swiper-button-communities-next">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15" fill="#D9D9D9"/><path d="M12 21L18 15L12 9" stroke="#FF0004"/></svg>
                </button>
                
                <button aria-label="Anterior" class="swiper-button-prev swiper-button-communities-prev">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15" fill="#D9D9D9"/><path d="M18 9L12 15L18 21" stroke="#FF0004"/></svg>
                </button>

            </div>
        </div>
    </div>
</section>