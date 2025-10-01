<?php get_header(); ?>
<section class="hero">
    <div class="container text-center">
        <h1 class="display-3 fw-bold">Welcome to Atholl Estates</h1>
        <p class="lead">Discover Scotland's natural beauty, luxury stays, and unforgettable experiences.</p>
        <a href="#" class="btn btn-primary btn-lg">Book Your Stay</a>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/stay.jpg" class="feature-img" alt="Stay">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Stays</h5>
                        <p class="card-text">Experience comfort and elegance in our lodges and cottages nestled in the heart of Scotland.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/explore.jpg" class="feature-img" alt="Explore">
                    <div class="card-body">
                        <h5 class="card-title">Explore Nature</h5>
                        <p class="card-text">Hiking, biking, and wildlife adventures await in our breathtaking landscapes.</p>
                        <a href="#" class="btn btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/events.jpg" class="feature-img" alt="Events">
                    <div class="card-body">
                        <h5 class="card-title">Events & Weddings</h5>
                        <p class="card-text">Host your special event in a stunning Scottish setting, from weddings to corporate retreats.</p>
                        <a href="#" class="btn btn-outline-primary">View Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
