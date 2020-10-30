<?php
 $image = get_sub_field('hero_image');
?>

<section>
    <div class="hero parallax jumbotron jumbotron-fluid mb-0" style="background-image: url(<?php echo $image['url'];?>);" >
        <div class="container">
            <h1 class="display-4"><?php the_sub_field('hero_rubrik');?></h1>
            <p><?php the_sub_field('hero_underrubrik');?></p>
        </div>
    </div>
</section>