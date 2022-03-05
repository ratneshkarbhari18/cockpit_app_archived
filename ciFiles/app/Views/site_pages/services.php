<main class="page-content" id="services">
    <section id="services-hero" class="product-services-hero">
        <div class="container text-center">
            <h1 class="hero-section-title">
                Services
            </h1>
        </div>
    </section>
    <section id="services-container">
        <div class="container">
            <div class="row">
                <?php foreach($services as $service): ?>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <a href="<?php echo "http://".$business_data["subdomain"].".".$_ENV["CLIENT_URL_NON_HTTP"]."product/".$service["slug"]; ?>">
                    <div class="card">
                        <img src="<?php echo $_ENV["SERVER_URL"]."user_assets/images/product_service_featured_images/".$service["featured_image"]; ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="product-service-title"><?php echo $service["title"]; ?></h4>
                            <?php echo $service["currency"]." ".$service["price"]; ?>
                        </div>    
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>