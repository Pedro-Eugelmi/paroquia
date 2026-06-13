
<?php wp_footer(); 
$contact = get_field("contato", "option");
?>

<footer class="container-fluid bg-black footer padding-top-sm">
    <div class="container">

        <div class="row">
            <div class="col-12 col-xl-4 d-flex justify-content-center">
                <a href="https://diocesedearacatuba.com.br" target="_blank" title="Ir para diocese de araçatuba">
                    <img style="height: 160px;" src="<?php echo get_template_directory_uri() ?>/images/diocese.png" alt="Diocese de Araçatuba">
                </a>
            </div>

            <div class="col-12 col-xl-4 d-flex flex-column align-items-center">
                <h2 class="footer-title">Links Úteis</h2>

                <ul class="footer-list">
                    <li>
                        <a href="<?php echo get_the_permalink(get_page_by_path('sobre-nos')) ?>" title="Ir para os horários">Sobre Nós</a>
                    </li>
                    <li>
                        <a href="<?php echo get_the_permalink(get_page_by_path('sobre-nos')) ?>/#horarios" title="Ir para os horários">Horários</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url()."/#comunidades"?>" title="Ir para Comunidades">Comunidades</a>
                    </li>
                    <li>
                        <a href="<?php echo get_permalink(get_page_by_path("noticias")) ?>" title="Ir para Notícias">Notícias</a>
                    </li>
                    <li>
                        <a href="<?php echo get_permalink(get_page_by_path("contato")) ?>" title="Ir para Contato">Contato</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-xl-4 d-flex flex-column  align-items-center">
                <h2 class="footer-title">Contato</h2>
                
                <ul class="d-flex flex-wrap gap-3 list-unstyled margin-top-xxs">
                    <?php if ($contact['email']): ?>
                        <li>
                            <a href="mailto:<?php echo $contact['email']?>" title="Enviar email para <?php echo $contact['email']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: var(--dark-gray);"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z"></path></svg>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if ($contact['whatsapp']): ?>
                        <li>
                            <a href="<?php echo sc_wtt_link($contact['whatsapp'])?>" title="Whatsapp">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="36" height="36" viewBox="0 0 24 24" style="fill: var(--dark-gray);"><path d="M12.043 6.925a4.985 4.985 0 0 0-4.98 4.979c-.001.94.263 1.856.761 2.649l.118.188-.503 1.837 1.885-.494.181.108a4.97 4.97 0 0 0 2.535.693h.001a4.986 4.986 0 0 0 4.979-4.978 4.946 4.946 0 0 0-1.456-3.522 4.946 4.946 0 0 0-3.521-1.46zm2.928 7.118c-.125.35-.723.668-1.01.711a2.044 2.044 0 0 1-.943-.059 8.51 8.51 0 0 1-.853-.315c-1.502-.648-2.482-2.159-2.558-2.26-.074-.1-.61-.812-.61-1.548 0-.737.386-1.099.523-1.249a.552.552 0 0 1 .4-.186c.1 0 .199.001.287.005.092.004.215-.035.336.257.125.3.425 1.036.462 1.111.037.074.062.162.013.262-.05.101-.074.162-.15.25-.074.088-.157.195-.224.263-.075.074-.153.155-.066.305.088.149.388.64.832 1.037.572.51 1.055.667 1.204.743.15.074.237.063.325-.038.087-.101.374-.437.474-.586.1-.15.199-.125.337-.076.137.051.873.412 1.022.487.148.074.249.112.287.175.036.062.036.361-.088.711z"></path><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-7.96 14.896h-.002a5.98 5.98 0 0 1-2.862-.729L6 18l.85-3.104a5.991 5.991 0 0 1 5.19-8.983 5.95 5.95 0 0 1 4.238 1.757 5.95 5.95 0 0 1 1.751 4.237 5.998 5.998 0 0 1-5.989 5.989z"></path></svg>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if ($contact['facebook']): ?>
                        <li>
                            <a href="<?php echo $contact['facebook']?>" title="Facebook da paróquia">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: var(--dark-gray);"><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325 1.42-3.592 3.5-3.592.699-.002 1.399.034 2.095.107v2.42h-1.435c-1.128 0-1.348.538-1.348 1.325v1.735h2.697l-.35 2.725h-2.348V21H20a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"></path></svg>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if ($contact['instagram']): ?>
                        <li>
                            <a href="<?php echo $contact['instagram']?>" title="Instagram da paróquia">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="36" height="36" viewBox="0 0 24 24" style="fill: var(--dark-gray);"><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center gap-2">
                <span class="footer-text">© <?php echo Date('Y') ?> - Paróquia Santa Clara. Todos os direitos reservados.</span>
                <a class="ml-2" href="https://pedroeugelmi.com" target="_blank" title="Ir para Pedro Eugelmi - Desenvolvedor Web">
                    <img style="height: 40px;" src="<?php echo get_template_directory_uri() ?>/images/icons/pedroeugelmi.ico" alt="Pedro Eugelmi">
                </a>
            </div>
        </div>

    </div>
</footer>
</body>
</html>