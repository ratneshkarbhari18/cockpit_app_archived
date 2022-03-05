<main class="page-content" id="products">
    <section id="products-hero" class="product-services-hero">
        <div class="container text-center">
            <h1 class="hero-section-title">
                Products
            </h1>
        </div>
    </section>
    <section id="products-container" style="margin: 3em 0;">
        <div class="container">
            <div class="row">
                <?php foreach($products as $product): ?>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <a href="<?php echo "http://".$business_data["subdomain"].".".$_ENV["CLIENT_URL_NON_HTTP"]."product/".$product["slug"]; ?>">
                    <div class="card">
                        <img src="<?php echo $_ENV["SERVER_URL"]."user_assets/images/product_service_featured_images/".$product["featured_image"]; ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="product-service-title"><?php echo $product["title"]; ?></h4>
                            <?php echo $product["currency"]." ".$product["price"]; ?>
                        </div>    
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>