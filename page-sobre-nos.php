<?php get_header() ?>
<main>
    <section class="container-fluid p-0 single-banner">
        <img class="single-banner-image" src="<?php echo get_field("banner") ?>" alt="<?php echo get_the_title() ?>">
        <svg class="single-banner-arrow-item bounce" width="16" height="61" viewBox="0 0 16 61" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.29289 60.7071C7.68342 61.0976 8.31658 61.0976 8.70711 60.7071L15.0711 54.3431C15.4616 53.9526 15.4616 53.3195 15.0711 52.9289C14.6805 52.5384 14.0474 52.5384 13.6569 52.9289L8 58.5858L2.34315 52.9289C1.95262 52.5384 1.31946 52.5384 0.928932 52.9289C0.538408 53.3195 0.538408 53.9526 0.928932 54.3431L7.29289 60.7071ZM7 0V60H9V0H7Z" fill="#FFF"></path></svg>
        <h1 class="single-banner-title"><?php echo get_the_title() ?></h1>
    </section>

    <section class="container-fluid padding-y-lg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="subtitle">Sobre nós</h2>
                    <h3 class="margin-top-xs title">Nossa Paróquia</h3>
                </div>   
            </div>        
        </div>

        <div class="container margin-top-xs">
            <?php include ("includes/content.php")?>
        </div>

    </section>

    <?php $time = get_field("horarios");
    $masses = $time["missas"];
    $secretary = $time["secretaria"];
    $confessions = $time["confissoes"]; ?>

    <section id="horarios" class="bg-gray time-card-section">

        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <h2 class="subtitle">HORÁRIOS E ATENDIMENTO PAROQUIAL</h2>
                    <h3 class="margin-top-xs title">Cronograma da Paróquia</h3>
                </div>
            </div>
            <div class="row">

                <div class="col-12 col-xl-4">
                    <div class="time-card bg-main">
                        <div>
                            <h3 class="time-card-title">HORÁRIOS DE MISSA</h3>

                            <ul class="time-card-list">

                                <?php foreach ($masses as $mass): ?>
                                    <li>
                                        <h3 class="time-card-list-title">
                                            <?php echo $mass["dia"] ?>
                                        </h3>

                                        <div class="time-card-list-time">
                                            <?php echo wpautop($mass["horarios"]) ?>
                                        </div
                                    </li>    
                                <?php endforeach;?>
                                
                            </ul>
                        </div>

                        <div class="margin-top-xs">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_99_86)">
                                <path d="M56.2397 27.0977H51.6645V22.9002C51.6645 21.9811 50.9194 21.236 50.0002 21.236C49.0811 21.236 48.3359 21.9811 48.3359 22.9002V27.0977H43.7608C42.8416 27.0977 42.0965 27.8426 42.0965 28.7619C42.0965 29.6811 42.8416 30.4262 43.7608 30.4262H48.3359V41.777C48.3359 42.6961 49.0811 43.4412 50.0002 43.4412C50.9194 43.4412 51.6645 42.6961 51.6645 41.777V30.4262H56.2397C57.1588 30.4262 57.9039 29.6811 57.9039 28.7619C57.9039 27.8426 57.1588 27.0977 56.2397 27.0977Z" fill="white" fill-opacity="0.7"/>
                                <path d="M74.5299 5H18.3707C17.4516 5 16.7064 5.74512 16.7064 6.66426C16.7064 7.5834 17.4516 8.32852 18.3707 8.32852H72.8654V17.8295H69.3322H6.86172H3.32852V8.32871H11.7139C12.633 8.32871 13.3781 7.58359 13.3781 6.66445C13.3781 5.74531 12.633 5.0002 11.7139 5.0002H1.66426C0.745117 5.0002 0 5.74531 0 6.66445V19.4941C0 20.4135 0.745117 21.1584 1.66426 21.1584H5.19746V26.857C5.19746 41.3301 14.5916 53.6498 27.6025 58.0402C27.7666 60.4568 28.0359 63.6525 28.465 67.0506C26.5514 68.0354 25.2385 70.0293 25.2385 72.3256C25.2385 75.3602 27.5305 77.868 30.4738 78.2131C30.8615 80.3133 30.8506 82.6865 30.7141 84.6969H28.6688C22.349 84.6969 16.79 88.8793 14.9621 94.8178H14.8705C12.0633 94.8178 9.77949 97.1018 9.77949 99.9088C9.77949 102.716 12.0635 105 14.8705 105H61.3238C64.1311 105 66.4148 102.716 66.4148 99.9088C66.4148 97.1016 64.1309 94.8178 61.3238 94.8178H61.2322C59.4043 88.8791 53.8455 84.6969 47.5256 84.6969H45.4803C45.3436 82.6863 45.333 80.3131 45.7207 78.2131C48.6641 77.868 50.9561 75.3602 50.9561 72.3256C50.9561 70.0293 49.6432 68.0352 47.7295 67.0506C48.1586 63.6518 48.4283 60.4561 48.592 58.04C50.7045 57.3303 52.7461 56.4078 54.6793 55.2771C59.541 52.434 63.6197 48.3648 66.4748 43.509C66.9408 42.7168 66.6762 41.6967 65.8836 41.2307C65.0906 40.7646 64.0713 41.0297 63.6053 41.8219C61.0379 46.1883 57.3703 49.8473 52.9988 52.4037C48.5272 55.0187 43.2777 56.4283 38.0971 56.4283C32.399 56.4283 26.7574 54.7547 21.9859 51.6428C17.89 48.9717 14.4768 45.2867 12.1307 40.9959C9.76777 36.674 8.52598 31.7818 8.52598 26.857V21.1582H67.6684V26.8568C67.6684 29.8361 67.2266 32.777 66.3551 35.5975C66.0836 36.4758 66.5756 37.4076 67.4539 37.6789C68.3322 37.95 69.2641 37.4582 69.5354 36.5801C70.5051 33.441 70.9969 30.1697 70.9969 26.8568V21.1582H74.5301C75.4492 21.1582 76.1943 20.4131 76.1943 19.4939V6.66426C76.1943 5.74512 75.449 5 74.5299 5ZM47.5258 88.0256C52.0246 88.0256 56.0225 90.784 57.7 94.8178H50.3414C49.4223 94.8178 48.6772 95.5629 48.6772 96.482C48.6772 97.4012 49.4223 98.1463 50.3414 98.1463H59.944H61.324C62.2957 98.1463 63.0865 98.9369 63.0865 99.9088C63.0865 100.88 62.2959 101.671 61.324 101.671H14.8703C13.8986 101.671 13.1078 100.881 13.1078 99.9088C13.1078 98.9371 13.8984 98.1463 14.8703 98.1463H16.2504H43.684C44.6031 98.1463 45.3482 97.4012 45.3482 96.482C45.3482 95.5629 44.6031 94.8178 43.684 94.8178H18.4943C20.1721 90.7836 24.1697 88.0256 28.6686 88.0256H32.2416H43.9527H47.5258ZM42.1451 84.6969H34.0494C34.1727 82.7162 34.1779 80.4185 33.8549 78.2553H42.3398C42.0168 80.4184 42.0221 82.716 42.1451 84.6969ZM31.2682 59.0447C33.5098 59.5201 35.8063 59.7566 38.0973 59.7566C40.2664 59.7566 42.4367 59.5404 44.5641 59.1162C44.5859 59.1117 44.6078 59.107 44.6295 59.1027C44.8156 59.0652 45.0018 59.0289 45.1873 58.9881C45.0283 61.1105 44.7949 63.6832 44.4574 66.3955H31.7369C31.3994 63.6842 31.166 61.1109 31.007 58.9881C31.0941 59.0074 31.1811 59.0264 31.2682 59.0447ZM30.6322 69.7805C30.81 69.7434 30.9902 69.7246 31.1682 69.7246H45.0266C45.2043 69.7246 45.3848 69.7436 45.5625 69.7805C46.7404 70.0283 47.6275 71.0748 47.6275 72.3256C47.6275 73.7598 46.4607 74.9266 45.0266 74.9266H44.3791H31.8158H31.1684C29.7342 74.9266 28.5674 73.7598 28.5674 72.3256C28.567 71.0748 29.4543 70.0283 30.6322 69.7805Z" fill="white" fill-opacity="0.7"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_99_86">
                                <rect width="100" height="100" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>

                        </div>

                    </div>
                </div>

                <div class="col-12 col-xl-4">
                    <div class="time-card bg-brown">
                        
                        <div>
                            <h3 class="time-card-title">SECRETARIA PAROQUIAL</h3>

                            <ul class="time-card-list">

                                <?php foreach ($secretary as $item): ?>
                                    <li>
                                        <h3 class="time-card-list-title">
                                            <?php echo $item["dia"] ?>
                                        </h3>

                                        <div class="time-card-list-time">
                                            <?php echo wpautop($item["horarios"]) ?>
                                        </div
                                    </li>    
                                <?php endforeach;?>
                                
                            </ul>
                        </div>

                        <div class="margin-top-xs">

                            <svg width="80" height="75" viewBox="0 0 80 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.9991 0L0 13.4919L15.5968 5.50749L12.9991 0Z" fill="white" fill-opacity="0.7"/>
                                <path d="M68.7635 14.5762V7.00645H57.299V0.0944824H17.4325L20.6389 6.89205L0.441528 17.231V57.8719H18.9671V66.5577H29.9119V74.1274H79.7083V14.5762H68.7635ZM23.6342 63.0981V57.8727H57.299V10.4668H64.0965V63.0981H23.6342ZM75.038 70.6679H34.579V66.5577H68.7625V18.0365H75.0359V70.6679H75.038Z" fill="white" fill-opacity="0.7"/>
                            </svg>

                        </div>

                    </div>
                </div>

                <div class="col-12 col-xl-4">
                    <div class="time-card bg-green">
                        <div>
                            <h3 class="time-card-title">CONFISSÕES</h3>

                            <ul class="time-card-list">

                                <?php foreach ($confessions as $confession): ?>
                                    <li>
                                        <h3 class="time-card-list-title">
                                            <?php echo $confession["dia"] ?>
                                        </h3>

                                        <div class="time-card-list-time">
                                            <?php echo wpautop($confession["horarios"]) ?>
                                        </div
                                    </li>    
                                <?php endforeach;?>
                                
                            </ul>
                        </div>

                        <div class="margin-top-xs">
                            <svg width="100" height="112" viewBox="0 0 100 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.7692 36.9611C30.7692 31.6012 35.1171 27.3579 40.3567 27.3579C45.7079 27.3579 49.9443 31.7129 49.9443 36.9611C49.9443 42.321 45.5964 46.5643 40.3567 46.5643C35.1171 46.5643 30.7692 42.2094 30.7692 36.9611ZM69.5652 60.1874H75.8083V19.7647H91.9733V19.5414V13.5115V13.2881H75.8083V0H69.5652V13.1765H53.4002V13.5115H53.1773V19.7647H69.5652V60.1874ZM45.5964 48.4626C43.1438 47.1226 40.0223 48.0159 38.6845 50.4726L36.0089 55.3858C35.6745 52.8176 35.0056 50.4726 34.4482 49.4676C33.1104 46.676 31.3266 45.5593 31.3266 45.5593C21.8506 40.1994 16.8339 50.1376 16.7224 50.4726C15.8305 52.7059 14.4928 56.2792 14.6042 63.4257C14.9387 79.6171 24.3032 101.503 24.3032 101.503H6.13155C2.89855 101.503 0 103.402 0 106.975C0 110.102 2.67558 112 5.90858 112H31.1037C34.8941 112 37.7926 109.878 37.9041 102.732L38.1271 72.8056L47.7146 55.2742C48.9409 52.8175 48.0491 49.8026 45.5964 48.4626ZM45.4849 72.3589V111.665H51.0591V77.9422H94.4259V111.665H100V72.3589H45.4849Z" fill="white" fill-opacity="0.7"/>
                            </svg>
                        </div>

                    </div>
                </div>


            </div>

        </div>

    </section>

    <?php $endereco = get_field("endereco", "options");  ?>
    <section class="container-fluid padding-y-md">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="subtitle">NOSSO ENDEREÇO</h2>
                    <h3 class="margin-top-xs title">VENHA CONHECER A NOSSA PARÓQUIA</h3>
                </div>
                <div class="col-12 col-md-6 padding-top-sm">
                    <p><?php echo $endereco["endereco"]?></p>
                </div>
                
                <?php $contato = get_field("contato", "options");?>
                
                <?php if (!empty($contato) && (!empty($contato["whatsapp"]) || !empty($contato["facebook"]) || !empty($contato["instagram"]) || !empty($contato["facebook"]) || !empty($contato["e-mail"]))):?>
                    <div class="col-12 col-md-6 padding-top-sm d-flex justify-content-end single-community-social">
                        <div class="pr-2">
                            <h4 class="main-font single-community-social-title">Nossas redes sociais</h4>
                            
                            <div class="single-community-social-area">
                                <?php if (!empty($contato["facebook"])): ?>
                                    <a href="<?php echo $contato["facebook"] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325 1.42-3.592 3.5-3.592.699-.002 1.399.034 2.095.107v2.42h-1.435c-1.128 0-1.348.538-1.348 1.325v1.735h2.697l-.35 2.725h-2.348V21H20a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"></path></svg>
                                    </a>
                                <?php endif; ?>

                                <?php if (!empty($contato["instagram"])): ?>
                                    <a href="<?php echo $contato["instagram"] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg>
                                    </a>
                                <?php endif; ?>

                                <?php if (!empty($contato["whatsapp"])): ?>
                                    <a href="<?php echo $contato["whatsapp"] ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12.043 6.925a4.985 4.985 0 0 0-4.98 4.979c-.001.94.263 1.856.761 2.649l.118.188-.503 1.837 1.885-.494.181.108a4.97 4.97 0 0 0 2.535.693h.001a4.986 4.986 0 0 0 4.979-4.978 4.946 4.946 0 0 0-1.456-3.522 4.946 4.946 0 0 0-3.521-1.46zm2.928 7.118c-.125.35-.723.668-1.01.711a2.044 2.044 0 0 1-.943-.059 8.51 8.51 0 0 1-.853-.315c-1.502-.648-2.482-2.159-2.558-2.26-.074-.1-.61-.812-.61-1.548 0-.737.386-1.099.523-1.249a.552.552 0 0 1 .4-.186c.1 0 .199.001.287.005.092.004.215-.035.336.257.125.3.425 1.036.462 1.111.037.074.062.162.013.262-.05.101-.074.162-.15.25-.074.088-.157.195-.224.263-.075.074-.153.155-.066.305.088.149.388.64.832 1.037.572.51 1.055.667 1.204.743.15.074.237.063.325-.038.087-.101.374-.437.474-.586.1-.15.199-.125.337-.076.137.051.873.412 1.022.487.148.074.249.112.287.175.036.062.036.361-.088.711z"></path><path d="M20 3H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-7.96 14.896h-.002a5.98 5.98 0 0 1-2.862-.729L6 18l.85-3.104a5.991 5.991 0 0 1 5.19-8.983 5.95 5.95 0 0 1 4.238 1.757 5.95 5.95 0 0 1 1.751 4.237 5.998 5.998 0 0 1-5.989 5.989z"></path></svg>
                                    </a>
                                <?php endif; ?>

                                
                                <?php if (!empty($contato["e-mail"])): ?>
                                    <a href="mailto:<?php echo $contato["e-mail"] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z"></path></svg>
                                    </a>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                <?php endif ?>
                
                <div class="col-12 single-community-map">
                    <?php echo $endereco["googlemap"] ?>
                </div>
            </div>
        </div>
    </section>



    <?php include ("includes/communities.php")?>

    <?php include ("includes/tithe.php")?>
</main>
<?php get_footer() ?>