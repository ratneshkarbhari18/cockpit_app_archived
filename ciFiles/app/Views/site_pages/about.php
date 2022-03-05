<main class="page-content" id="services">
    <section id="services-hero" class="product-services-hero">
        <div class="container text-center">
            <h1 class="hero-section-title">
                About
            </h1>
        </div>
    </section>
    <section id="about" class="usual-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
                <div class="col-lg-10 col-md-12 col-sm-12" style="box-shadow: 0px 0px 20px darkgray; padding: 3em;">
                <?php echo $about_detailed; ?>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12"></div>
            </div>
        </div>
    </section>
    <section id="about" class="usual-section">
        <div class="container text-center">
            <?php if(isset($mission)&&isset($vision)): ?>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <?php echo $mission; ?>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <?php echo $vision; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if(isset($mission)&&!isset($vision)): ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php echo $mission; ?>
                </div>

               
            </div>
            <?php endif; ?>
            <?php if(!isset($mission)&&isset($vision)): ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php echo $vision; ?>
                </div>

               
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>
<style>
    p{
        font-size: 20px;
    }
</style>