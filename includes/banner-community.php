<?php $banner = get_field("banner")[0]; ?>

<section class="container-fluid p-0 single-banner">
    
    <?php if ($banner["acf_fc_layout"] == "video"): ?>
        <video 
            class="w-100 h-100 object-fit-cover" 
            muted autoplay="" disablepictureinpicture="" disableremoteplayback="" x-webkit-airplay="deny" loop="" playsinline="" preload="auto">
            <source src="<?php echo $banner["video"]["url"] ?>" type="video/mp4">
        </video>

    <?php else: ?>
        <img class="single-banner-image" src="<?php echo isset($banner["imagem"]) ? $banner["imagem"]["url"] :get_the_post_thumbnail_url()?>" alt="<?php echo get_the_title() ?>">
    <?php endif; ?>

    <svg class="single-banner-arrow-item bounce" width="16" height="61" viewBox="0 0 16 61" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.29289 60.7071C7.68342 61.0976 8.31658 61.0976 8.70711 60.7071L15.0711 54.3431C15.4616 53.9526 15.4616 53.3195 15.0711 52.9289C14.6805 52.5384 14.0474 52.5384 13.6569 52.9289L8 58.5858L2.34315 52.9289C1.95262 52.5384 1.31946 52.5384 0.928932 52.9289C0.538408 53.3195 0.538408 53.9526 0.928932 54.3431L7.29289 60.7071ZM7 0V60H9V0H7Z" fill="#FFF"></path></svg>
    <h1 class="single-banner-title"><?php echo get_the_title() ?></h1>
</section>