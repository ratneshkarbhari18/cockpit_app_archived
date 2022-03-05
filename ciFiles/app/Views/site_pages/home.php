<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<main class="page-contentx" id="home">
    <section id="slides-section">
        <div class="owl-carousel" id="homeHeroSlider">
            <?php foreach($slides as $slide): ?>
            <div class="slide">
                <a href="<?php echo $slide["link"]; ?>">
                    <img src="<?php echo $_ENV["SERVER_URL"]."user_assets/images/slides/".$slide["image"]; ?>" class="w-100">
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php if(count($products)>0): ?>
    <section class="usual-section" id="products-section">
        <div class="container">
            <h1 class="section-title text-center">Products</h1>
        
            <div class="row">
                <?php $j=0; for($i=0;$i<count($products);$i++): if($j<4): ?>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <a href="<?php echo "http://".$business_data["subdomain"].".".$_ENV["CLIENT_URL_NON_HTTP"]."product/".$products[$i]["slug"]; ?>">
                    <div class="card">
                        <img src="<?php echo $_ENV["SERVER_URL"]."user_assets/images/product_service_featured_images/".$products[$i]["featured_image"]; ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="product-service-title"><?php echo $products[$i]["title"]; ?></h4>
                            <?php echo $products[$i]["currency"]." ".$products[$i]["price"]; ?>
                        </div>    
                    </div>
                    </a>
                </div>
                <?php endif; $j++; endfor; ?>
            </div>
            
            <div class="text-center">
                <a href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."products"; ?>" class="btn btn-primary see-more-button">See All Products</a>
            </div>

        </div>
    </section>
    <?php endif; ?>
    <?php if(count($services)>0): ?>
    <section class="usual-section" id="services-section">
        <div class="container">
            <h1 class="section-title text-center">Services</h1>
        
            <div class="row">
                <?php for($i=0;$i<count($services);$i++): ?>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <a href="<?php echo "http://".$business_data["subdomain"].".".$_ENV["CLIENT_URL_NON_HTTP"]."product/".$services[$i]["slug"]; ?>">
                    <div class="card">
                        <img src="<?php echo $_ENV["SERVER_URL"]."user_assets/images/product_service_featured_images/".$services[$i]["featured_image"]; ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="product-service-title"><?php echo $services[$i]["title"]; ?></h4>
                        </div>    
                    </div>
                    </a>
                </div>
                <?php endfor; ?>
            </div>

            <div class="text-center">
                <a href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."services"; ?>" class="btn btn-primary see-more-button">See All Services</a>
            </div>

        </div>
    </section>
    <?php endif; ?>
    <?php if($about_home!=""): ?>
    <section class="usual-section" id="about">
        <div class="container">
            <h1 class="section-title text-center">About</h1>
            
            <?php echo $about_home; ?>

            <div class="text-center">
                <a href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."about"; ?>" class="btn btn-primary see-more-button">Know more about us</a>
            </div>
            
        </div>
    </section>
    <?php endif; ?>
    <?php if($business_data["email"]!=""||$business_data["contact_number"]!=""): ?>
    <section class="usual-section" id="about">
        <div class="container" >
            <h1 class="section-title text-center">Contact</h1>

            <div class="contact-content text-center" style="margin-top: 3em;margin-bottom: 1em;">
                <div class="card-body">
                <p>
                    Email: <a style="text-decoration: underline;" href="mailto:<?php echo $business_data["email"]; ?>"><?php echo $business_data["email"]; ?></a>
                </p>
                <p>
                    Contact: <a style="text-decoration: underline;" href="tel:<?php echo $business_data["mobile_number"]; ?>"><?php echo $business_data["mobile_number"]; ?></a> 
                </p>
                <p>Address: <?php echo $business_data["address"]; ?></p>
                </div>
            </div>
            
        </div>
    </section>
    <?php endif; ?>
    
</main>
<style>
    .slide{
        max-height: 80vh;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})  
</script>