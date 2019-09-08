<?php

$args = array(// Arguments for your query.
    'post_type' => 'page',
    'post_status' => 'publish',
    'post_parent' => '16'
);

// Custom query.
$query = new WP_Query($args);
$slider = [];

// Check that we have query results.
if ($query->have_posts()) {
    // Start looping over the query results.
    while ($query->have_posts()) {
        $query->the_post();
        $slider[] = [
            'src' => get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'd-block w-100')),
            'title' => get_the_title(),
        ];
        // Contents of the queried post results go here.
    }
}

// Restore original post data.
wp_reset_postdata();
$i = 0;
?>

<section id="primary" class="content-area col-sm-12">
    <main id="main" class="site-main" role="main">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach ($slider as $slide): ?>
                    <?php $i++ ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i - 1; ?>"
                        class=" <?php echo ($i == 1) ? "active" : "" ?>"></li>
                <?php endforeach; ?>

            </ol>
            <div class="carousel-inner">
                <?php $i = 0; ?>
                <?php foreach ($slider as $slide): ?>
                    <?php $i++ ?>
                    <div class="carousel-item <?php echo ($i == 1) ? "active" : "" ?>">
                        <div class="cipi-slide-inner-container">
                            <?php echo $slide['src'] ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main><!-- #main -->
</section><!-- #primary -->
