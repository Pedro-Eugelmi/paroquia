<article class="<?php echo (is_front_page())? 'swiper-slide padding-bottom-xs': 'col-12 col-md-6 col-xl-4' ?> article">
    <a class="article-content" href="<?php echo $link ?>">
        <div class="article-image-area">
            <img class="article-image" src="<?php echo $thumbnail ?>" alt="<?php echo get_the_post_thumbnail_caption() ?>">
        </div>

        <h2 class="main-font article-title"><?php echo $title ?></h2>

        <span class="article-description"><?php echo wp_trim_words($excerpt, 30, '...'); ?></span>

        <span class="underline main-font article-read">
            LER ARTIGO 
            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_9_107)"><path d="M9.46614 9.44455V0.555664M9.46614 0.555664H2.19341M9.46614 0.555664L2.89232 8.59033C2.44432 9.137 1.83778 9.44455 1.20432 9.44455H0.0115967" stroke="#FF0004" stroke-width="2" stroke-miterlimit="10"/></g><defs><clipPath id="clip0_9_107"><rect width="10" height="10" fill="white" transform="translate(0.0115967)"/></clipPath></defs></svg>
        </span>
    </a>
</article>