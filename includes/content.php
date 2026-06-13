<?php $contents = get_field("conteudo"); 

if (!empty($contents)) {
    // Percorre os conteúdos
    foreach ($contents as $content) {

        // Imprime o layout baseado no acf layout
        switch ($content["acf_fc_layout"]) {
            case "texto":
                include get_template_directory() . '/includes/components/text.php'; 
                break;

            case "imagem_e_texto":
                include get_template_directory() . '/includes/components/image-text.php'; 
                break;
        }
    } 
}  
?>