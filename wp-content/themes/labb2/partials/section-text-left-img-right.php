<?php
 $image = get_sub_field('bild_hoger');
?>

<section class="container-fluid">
    <div class="row text-left-img-right">
        <div class="col-6 d-flex align-items-center">
            <div>
                <h1 class="display-4"><?php the_sub_field('text_vanster_rubrik')?></h1>
                <p><?php the_sub_field('text_vanster')?></p>
            </div>
        </div>
        <div class="img-right parallax col-6" style="background-image: url(<?php echo $image['url'];?>);" >
    </div>
</section>