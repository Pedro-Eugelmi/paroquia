<?php $items = $content["repetidor"]; ?>

<?php foreach ($items as $key => $item) :?>
    <div class="row align-items-center <?php echo ($key % 2 !== 0) ? 'flex-row-reverse' : ''; ?>">
        
        <div class="col-12 col-xl-6 editor-content">
            <div><?php echo $item["texto"]; ?></div>
        </div>

        <div class="col-12 col-xl-6">
            <img class="w-100 rounded" src="<?php echo $item["imagem"]["url"]; ?>" alt="<?php echo $item["imagem"]["alt"]; ?>">
        </div>
        
    </div>
<?php endforeach; ?>