<?php get_header(); 

// Captura o termo de busca da URL
$search_query = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : ''; 
$category_slug = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : ''; ?>

    <main>
        <?php $banners = get_field("banners"); ?>
        <section style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)" class="banner shadow d-flex justify-content-center align-items-center">
            <div class="banner-content">
                <h1 class="title">Galeria de fotos</h1>
                <p class="mt-3">Reveja imagens de missas, festas e momentos especiais de nossa Paróquia.</p>
                <svg class="single-banner-arrow-item bounce" width="16" height="61" viewBox="0 0 16 61" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.29289 60.7071C7.68342 61.0976 8.31658 61.0976 8.70711 60.7071L15.0711 54.3431C15.4616 53.9526 15.4616 53.3195 15.0711 52.9289C14.6805 52.5384 14.0474 52.5384 13.6569 52.9289L8 58.5858L2.34315 52.9289C1.95262 52.5384 1.31946 52.5384 0.928932 52.9289C0.538408 53.3195 0.538408 53.9526 0.928932 54.3431L7.29289 60.7071ZM7 0V60H9V0H7Z" fill="#FFF"></path></svg>
            </div>
        </section>
        
        <section class="container-fluid bg-gray">
            <div class="container">
                <div class="row padding-y-md">
                    <div class="push-1 mx-auto col-12 col-xl-10">
                        <form action="<?php echo get_the_permalink() ?>#posts" method="get" class="page-articles-searchbar">
                            <input id="search" name="search" value="<?php echo $search_query ?>" placeholder="O que você está buscando?" class="search" type="text">
                           
                            <button type="submit" class="search-button">
                                <svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.626 29.7422L23.6739 21.7901C25.8409 19.1397 26.9064 15.7579 26.6499 12.344C26.3934 8.93005 24.8346 5.74533 22.2958 3.44854C19.7571 1.15175 16.4326 -0.0813987 13.0102 0.00417336C9.58772 0.0897455 6.32908 1.48749 3.90828 3.90828C1.48749 6.32908 0.0897455 9.58772 0.00417336 13.0102C-0.0813987 16.4326 1.15175 19.7571 3.44854 22.2958C5.74533 24.8346 8.93005 26.3934 12.344 26.6499C15.7579 26.9064 19.1397 25.8409 21.7901 23.6739L29.7422 31.626C29.9935 31.8687 30.33 32.003 30.6793 32C31.0287 31.9969 31.3628 31.8568 31.6098 31.6098C31.8568 31.3628 31.9969 31.0286 32 30.6793C32.003 30.33 31.8687 29.9935 31.626 29.7422ZM13.365 24.0229C11.2571 24.0229 9.1965 23.3979 7.44381 22.2268C5.69113 21.0557 4.32508 19.3911 3.51841 17.4436C2.71173 15.4962 2.50067 13.3532 2.91191 11.2858C3.32315 9.21834 4.33821 7.31928 5.82875 5.82875C7.31929 4.33821 9.21834 3.32315 11.2858 2.91191C13.3532 2.50067 15.4962 2.71173 17.4436 3.5184C19.3911 4.32508 21.0557 5.69113 22.2268 7.44381C23.3979 9.1965 24.0229 11.2571 24.0229 13.365C24.0198 16.1907 22.8959 18.8997 20.8978 20.8978C18.8997 22.8959 16.1907 24.0198 13.365 24.0229Z" fill="#828280"></path></svg>
                            </button>
                        </form>
                    </div>

                    <?php $categories = get_terms(array(
                        'taxonomy' => 'category',
                        'hide_empty' => false,
                    )); ?>
                </div>
            </div>
        </section>

        <section id="posts" class="container-fluid">
            <div class="container padding-bottom-md">
                <div class="row">         
                    <div class="padding-top-lg padding-bottom-sm col-12">
                        <h1 class="main-font page-articles-title">Nossas Fotos</h1>
                    </div>    
                </div>

                <div class="row">
                    <?php 

                        $args = array(
                            'post_type' => 'galeria-de-foto',  
                            'posts_per_page' => 6,   
                            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                            's'  => $search_query
                        );

                        
                        if ( !empty($category_slug) ) {
                            $args['category_name'] = $category_slug; 
                        }

                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) { 
                                $the_query->the_post(); 
                                $link = get_the_permalink();
                                $title = get_the_title();
                                $thumbnail = get_the_post_thumbnail_url();
                                $excerpt = get_the_excerpt();                               
                                include("includes/gallery.php");
                            }
                        }  else {
                            echo '<div class="col-12 text-center py-5">
                                <p>Nenhuma galeria de fotos encontrada para "' . esc_html($search_query) . '".</p>
                            </div>';
                        }

                        wp_reset_postdata();
                    ?>
                </div>

                <?php if ($the_query->max_num_pages > 1): ?>
                    <div class="row padding-top-sm">
                        <div class="col-12">
                            <div class="pagination">
                                <?php echo wordpress_pagination($the_query) ?>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>