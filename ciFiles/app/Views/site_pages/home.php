<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<main class="page-content" id="home">
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
    <section id="slides-section">
        <div class="container">
            
        </div>
    </section>
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