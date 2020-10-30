<section>
    <div id="KarusellKontroll" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner karusell">
            <?php
                $repeater = get_sub_field('karusell_repeater');
                foreach ($repeater as $key => $sub_field) {
                    $karusell_bild = $sub_field['karusell_bild'];
                    $karusell_bild['url'];
                    
                    if ($key === array_key_first($repeater)) {
                        echo '<div class="carousel-item active">';
                    } else {
                        echo '<div class="carousel-item">';
                    }
                    

                    echo '<img src="';
                    echo $karusell_bild['url'];
                    echo '" class="d-block w-100"></div>';
                }
            ?>
        </div>
        <a class="carousel-control-prev" href="#KarusellKontroll" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Föregående</span>
        </a>
        <a class="carousel-control-next" href="#KarusellKontroll" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
</section>