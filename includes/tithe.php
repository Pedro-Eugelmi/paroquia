<?php $tithe = get_field("dizimista", "options");
$phone = get_field("contato", "options")["whatsapp"];
$url = sc_wtt_link($phone, "Olá! Gostaria de ser dizimista");

?>
<section style="background-image:url(<?php echo $tithe["banner"]?>)" class="container-fluid home-tithe">
    <div class="container home-tithe-container">
        <div class="row">
            <div class="col-12 text-center d-flex flex-column align-items-center">
                <h2 class="home-tithe-title main-font">Seja Dizimista</h2>
                <q class="home-tithe-quote"><?php echo $tithe["mensagem"]?></q>
                <a href="<?php echo $url ?>" target="_blank" class="button2 mt-4">Seja dizimista</a>
            </div>
        </div>
    </div>
</section>