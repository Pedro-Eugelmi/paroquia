<?php get_header() ?>

<main>
    <section class="container-fluid home-banner d-flex align-items-center justify-content-center">
        <video 
            class="w-100 h-100" 
            muted autoplay="" disablepictureinpicture="" disableremoteplayback="" x-webkit-airplay="deny" loop="" playsinline="" preload="auto">
    
                <source src="<?php echo get_template_directory_uri(); ?>/images/banner_2.mp4" type="video/mp4">

        </video>

        <div class="container home-banner-content">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="home-banner-title"><?php echo get_bloginfo('name') ?></h1>
                    <q class="margin-top-xs d-block"><?php echo get_bloginfo('description') ?></q>

                    <a href="<?php echo get_the_permalink(get_page_by_path("sobre-nos")) ?>/#horarios" class="button2 margin-top-sm mx-auto">
                        Horários de Missa
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php $aboutUs = get_field("sobre_nos"); ?>
    <section class="container home-about-us">
      <div class="row padding-top-md padding-bottom-lg">
            <div class="col-12 col-xl-6 d-flex align-items-center">
                <div class="home-about-us-content d-flex flex-column flex-direction-center">
                    <span class="subtitle">Sobre nós</span>
                    <h2 class="margin-top-xs title"><?php echo $aboutUs["titulo"]?></h2>
                    <p class="margin-top-sm text"><?php echo $aboutUs["descricao"]?></p>
                    <a href="<?= home_url().'/sobre-nos'?>" class="button margin-top-sm">Saiba mais</a>    
                </div>
            </div>
            
            <div class="col-12 col-xl-6">
                <div class="home-about-us-image">
                    <img src="<?php echo $aboutUs["imagem"] ?>">
                </div>
            </div>
        </div>
    </section>

    <?php include ("includes/communities.php")?>
            
    <?php 
        $args = array(
            'post_type' => 'galeria-de-foto',
            'posts_per_page' => 6,
            'order' => 'DESC',
            'orderby' => 'date'
        );
        $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()): ?>
        <section class="container-fluid home-articles">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="Subtitle">GALERIA DE FOTOS</h2>
                        <h3 class="margin-top-xs title">Momentos de nossa comunidade</h3>
                    </div>
                </div>
                <div class="row margin-top-xs relative">
                    <div class="swiper-home-gallery swiper">
                        <div class="swiper-wrapper">
                            <?php                   
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    $link = get_the_permalink();
                                    $title = get_the_title();
                                    $thumbnail = get_the_post_thumbnail_url();
                                    $excerpt = get_the_excerpt();                                
                                    include("includes/gallery.php");
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="swiper-button-next swiper-button-gallery-next">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15" fill="#D9D9D9"/><path d="M12 21L18 15L12 9" stroke="#FF0004"/></svg>
                    </div>

                    <div class="swiper-button-prev swiper-button-gallery-prev">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15" fill="#D9D9D9"/><path d="M18 9L12 15L18 21" stroke="#FF0004"/></svg>
                    </div>

                    <div class="article-readmore col-12 d-flex justify-content-center">
                        <a href="<?php echo home_url("/galeria") ?>" class="button">VEJA MAIS FOTOS</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'order' => 'DESC',
            'orderby' => 'date'
        );
        $the_query_articles = new WP_Query($args);
    ?>

    <?php if ($the_query_articles->have_posts()): ?>
        <section class="container-fluid home-articles bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="Subtitle">NOSSOS ARTIGOS</h2>
                        <h3 class="margin-top-xs title">Conteúdos que transformam</h3>
                    </div>
                </div>
                <div class="row margin-top-xs relative">
                    <div class="swiper-home-articles swiper">
                        <div class="swiper-wrapper">
                            <?php                   
                                while ($the_query_articles->have_posts()) : $the_query_articles->the_post();
                                    $link = get_the_permalink();
                                    $title = get_the_title();
                                    $thumbnail = get_the_post_thumbnail_url();
                                    $excerpt = get_the_excerpt();                                
                                    include("includes/post.php");
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="swiper-button-next">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15" fill="#D9D9D9"/><path d="M12 21L18 15L12 9" stroke="#FF0004"/></svg>
                    </div>
                    
                    <div class="swiper-button-prev">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15" fill="#D9D9D9"/><path d="M18 9L12 15L18 21" stroke="#FF0004"/></svg>
                    </div>

                    <div class="article-readmore col-12 d-flex justify-content-center">
                        <a href="<?php echo home_url("/noticias") ?>" class="button">LEIA MAIS</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="container-fluid home-donations">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <h2 class="subtitle">FAÇA A SUA DOAÇÃO</h2>
                    <h3 class="title margin-top-xs">COLABORE COM A NOSSA PARÓQUIA</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <hr class="home-donations-line">
                </div>
            </div>

            <div class="row">

                <?php $pix = get_field("pix"); ?>
                <div class="col-12 px-0 padding-top-sm relative">
                    <div class="donations-item d-flex flex-wrap active" id="pix">
                        <div class="col-12 col-md-6 d-flex justify-content-center flex-column">
                            <h4 class="donations-title title">ESCANEIE O QR CODE</h4>
                            
                            <img class="image-fluid mx-auto margin-top-sm" src="<?php echo $pix["qr_code"]?>" alt="QR CODE">
                        </div>

                        <div class="col-12 col-md-6 donations-pix-copy">
                            <h4 class="donations-title title">Ou copie a chave</h4>
                            
                            <input type="text" class="margin-top-xs donations-pix-copy-item" id="chave" value="<?php echo $pix["chave"]?>"/>

                            <button id="copy" class="button2 red margin-top-sm">
                                Clique para copiar
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.5 2.25H11.25C10.6533 2.25 10.081 2.48705 9.65901 2.90901C9.23705 3.33097 9 3.90326 9 4.5V6.75H18C18.5967 6.75 19.169 6.98705 19.591 7.40901C20.0129 7.83097 20.25 8.40326 20.25 9V18H22.5C23.0967 18 23.669 17.7629 24.091 17.341C24.5129 16.919 24.75 16.3467 24.75 15.75V4.5C24.75 3.90326 24.5129 3.33097 24.091 2.90901C23.669 2.48705 23.0967 2.25 22.5 2.25Z" fill="white"/><path d="M4.5 24.75H15.75C16.9909 24.75 18 23.7409 18 22.5V11.25C18 10.0091 16.9909 9 15.75 9H4.5C3.25912 9 2.25 10.0091 2.25 11.25V22.5C2.25 23.7409 3.25912 24.75 4.5 24.75ZM6.75 13.5H13.5V15.75H6.75V13.5ZM6.75 18H13.5V20.25H6.75V18Z" fill="white"/></svg>  
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <?php include ("includes/tithe.php"); ?>

    <?php $websites = get_field("sites_indicados"); ?>
    <section class="container-fluid hide-overflow padding-y-xl home-websites">
        <div class="container">
            <div class="row d-flex justify-content-center relative">
                <div class="col-12 col-md-8 pt-0">
                    <h2 class="subtitle">SITES INDICADOS</h2>
                    <h3 class="title margin-top-xs">ACESSE TAMBÉM</h3>
                </div>

                <div class="swiper-websites swiper">
                    <div class="col-12 p-0 swiper-wrapper">
                        <?php foreach ($websites as $item): ?>
                        <div class="swiper-slide">
                                <a href="<?php echo $item["link"] ?>" target="_blank">
                                    <img src="<?php echo $item["logo"]["link"] ?>" alt="<?php echo $item["logo"]["alt"] ?>">
                                </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper-button-next">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15" fill="#D9D9D9"/><path d="M12 21L18 15L12 9" stroke="#FF0004"/></svg>
                </div>
                
                <div class="swiper-button-prev">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15" fill="#D9D9D9"/><path d="M18 9L12 15L18 21" stroke="#FF0004"/></svg>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>