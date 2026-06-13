<?php get_header();
$contact = get_field("contato", "options");  
$url = sc_wtt_link($contact["whatsapp"]); ?>

<main>
    <section class="contact-banner">
'
        <div class="contact-banner-content">
            <h1 class="title text-center">Fale com a Paróquia Santa Clara</h1>
        </div>

        <svg class="contact-banner-arrow bounce" width="16" height="61" viewBox="0 0 16 61" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.29289 60.7071C7.68342 61.0976 8.31658 61.0976 8.70711 60.7071L15.0711 54.3431C15.4616 53.9526 15.4616 53.3195 15.0711 52.9289C14.6805 52.5384 14.0474 52.5384 13.6569 52.9289L8 58.5858L2.34315 52.9289C1.95262 52.5384 1.31946 52.5384 0.928932 52.9289C0.538408 53.3195 0.538408 53.9526 0.928932 54.3431L7.29289 60.7071ZM7 0V60H9V0H7Z" fill="#FFF"></path></svg>

    </section>

    <section class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <h2 class="title">Fale com a Secretaria</h2>

                    <p class="mt-3">Tire suas dúvidas sobre sacramentos, dízimo e horários das nossas cinco comunidades de forma rápida e direta.</p>

                    <a href="<?php echo $url ?>" target="_blank" class="button mt-3">Chamar no Whatsapp</a>

                </div>
                
                <div class="col-12 col-xl-6">
                    <h2 class="title">Redes Sociais</h2>

                    <div class="mt-2 d-flex g-2">
                        <?php if (!empty($contact["facebook"])): ?>
                            <a href="<?php echo $contact["facebook"] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: var(--dark-gray);transform: ;msFilter:;"><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325 1.42-3.592 3.5-3.592.699-.002 1.399.034 2.095.107v2.42h-1.435c-1.128 0-1.348.538-1.348 1.325v1.735h2.697l-.35 2.725h-2.348V21H20a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"></path></svg>
                            </a>
                        <?php endif; ?>

                        <?php if (!empty($contact["instagram"])): ?>
                            <a href="<?php echo $contact["instagram"] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: var(--dark-gray);transform: ;msFilter:;"><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg>
                            </a>
                        <?php endif; ?>
                        
                        <?php if (!empty($contact["email"])): ?>
                            <a href="mailto:<?php echo $contact["email"] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: var(--dark-gray);transform: ;msFilter:;"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z"></path></svg>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php $endereco = get_field("endereco", "options");  ?>
    <section class="container-fluid padding-y-md bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="subtitle">NOSSO ENDEREÇO</h2>
                    <h3 class="margin-top-xs title">VENHA CONHECER A NOSSA PARÓQUIA</h3>
                </div>
                <div class="col-12 col-md-6 padding-top-sm">
                    <p><?php echo $endereco["endereco"]?></p>
                </div>
                
                <div class="col-12 single-community-map">
                    <?php echo $endereco["googlemap"] ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>