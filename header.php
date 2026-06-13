<html lang="pt-br">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= get_bloginfo('title') ?> </title>
    <link rel="icon" href="<?= get_site_icon_url() ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <?php wp_head() ?>

    <?php if (has_post_thumbnail()): ?>
        <meta property="og:image" content="<?= get_the_post_thumbnail_url() ?>">
    <?php endif; ?>

</head>

<body>

<header class="container-fluid d-flex align-items-center header">
    <div class="container">

        <div class="row">
            <div class="col-12 p-2 header-container justify-content-between">
                
                <div class="header-logo" href="<?php echo home_url()?>">
                    <?php echo the_custom_logo() ?>
                </div>

                <nav class="d-none justify-content-center align-items-center d-md-flex">
                    <ul class="header-links">
                        <li class="header-links-item"><a class="underline" href="<?php echo home_url() ?>">Início</a></li>
                        <li class="header-links-item"><a class="underline" href="<?php echo get_permalink(get_page_by_path("sobre-nos")); ?>">Sobre Nós</a></li>
                        <li class="header-links-item"><a class="underline" href="<?php echo home_url()."/#comunidades" ?>">Comunidades</a></li>
                        <li class="header-links-item"><a class="underline" href="<?php echo get_permalink(get_page_by_path("galeria")); ?>">Fotos</a></li>
                        <li class="header-links-item"><a class="underline" href="<?php echo get_permalink(get_page_by_path("noticias")); ?>">Notícias</a></li>
                        <li class="header-links-item"><a class="underline" href="<?php echo get_permalink(get_page_by_path("contato")); ?>">Contato</a></li>
                    </ul>
                </nav>

                <div class="d-flex d-md-none align-items-center">
                    <svg id="openMenu" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: #FFF;transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
                </div>
            </div>
        </div>

    </div>
</header>

<nav class="header-mobile-menu">
  <div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <div class="header-logo" href="<?php echo home_url()?>">
                <?php echo the_custom_logo() ?>
            </div>
            <div id="closeMenu"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg></div>

        </div>

        <div class="col-12">
            <hr>
        </div>

        <div class="col-12">              
            <ul class="header-mobile-links">
                <li class="header-mobile-links-item"><a href="<?php echo home_url() ?>">Início</a></li>
                <li class="header-mobile-links-item"><a href="<?php echo get_permalink(get_page_by_path("sobre-nos")); ?>">Sobre Nós</a></li>
                <li class="header-mobile-links-item"><a href="<?php echo home_url()."/#comunidades" ?>">Comunidades</a></li>
                <li class="header-mobile-links-item"><a href="<?php echo get_permalink(get_page_by_path("galeria")); ?>">Fotos</a></li>
                <li class="header-mobile-links-item"><a href="<?php echo get_permalink(get_page_by_path("noticias")); ?>">Notícias</a></li>
                <li class="header-mobile-links-item"><a href="<?php echo get_permalink(get_page_by_path("contato")); ?>">Contato</a></li>
            </ul>
        </div>
    </div>
  </div>
</nav>
