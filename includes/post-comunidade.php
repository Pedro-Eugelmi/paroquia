<div class="swiper-slide p-half home-communities-item relative">
    <a class="home-communities-item-content" href="<?php echo get_the_permalink() ?>">
        <img class="home-communities-item-image" src="<?php echo the_post_thumbnail_url()?>" alt="<?= the_title()?>">
        <h3 class="home-communities-item-title"><?php echo the_title() ?></h3>
    </a>
</div>