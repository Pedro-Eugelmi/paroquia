<?php get_header();
$gallery = get_field("galeria"); 
$terms = get_the_terms(get_the_ID(), 'comunidades');?>

    <main>
        <?php include("includes/banner.php")?>

        <section class="single-info">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                       <time datetime="<?php echo get_the_date('d/m/Y') ?>"> <?php echo get_the_date('d/m/Y') ?></time>
                       <?php if ($terms && !is_wp_error($terms)) : ?>
                            <?php 
                                $community_name = $terms[0]->name; 
                            ?>
                            <span>| Comunidade: <?php echo esc_html($community_name); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-end align-items-center single-info-share">
                        <span>Compartilhar: </span>
                        <a target="_blank" href="https://wa.me/?text=<?php echo get_the_permalink() ?>"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" style="fill: rgb(59, 59, 59);transform: ;msFilter:;"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"></path></svg></a>
                        <a target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" style="fill: rgba(59, 59, 59);transform: ;msFilter:;"><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="container">
                <div class="row padding-top-md">
                    <div class="col-12">
                        <h1 class="main-font single-title"><?php echo get_the_title()?></h1>
                    </div>
                    <?php if (!empty(get_the_content())): ?>
                        <div class="col-12 editor">
                            <?php echo wpautop(get_the_content()) ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>

        <section class="single-gallery-section">
            <div class="container">
                    <div class="row">
                        <?php foreach($gallery as $key => $img) {
                            ?>
                                <div class="col-6 col-xl-4">
                                    <a href="<?php echo $img ?>" data-lightbox="gallery">
                                        <img class="single-gallery-image" src="<?php echo $img ?>" alt="<?php get_the_title(); ?>">
                                    </a>
                                </div>
                            <?php
                        } ?>
                    </div>
            </div>
        </section>

        <?php 
            $args = array(
                'post_type'      => 'galeria-de-foto',  
                'posts_per_page' => 3,   
                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                'post__not_in'   => [get_the_id()],
                'post_status'    => 'publish'
            );

            $the_query = new WP_Query($args);
        ?>

                
        <?php if ($the_query->have_posts()): ?>
            <section class="padding-top-xs padding-bottom-md">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="title">Veja também</h1>
                        </div>
                    </div>

                    <div class="row">
                        <?php                  
                                while ($the_query->have_posts()) { 
                                    $the_query->the_post();
                                    $link = get_the_permalink();
                                    $title = get_the_title();
                                    $thumbnail = get_the_post_thumbnail_url();
                                    $excerpt = get_the_excerpt();                               
                    
                                    include("includes/gallery.php");
                                }
                            ?>

                    </div>

                </div>
            </section>
        <?php endif; ?>
    </main>


<?php get_footer() ?>