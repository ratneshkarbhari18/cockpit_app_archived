<main class="page-content" id="contact" style="padding-bottom: 0;">
    <section id="services-hero" class="product-services-hero">
        <div class="container text-center">
            <h1 class="hero-section-title">
                Contact
            </h1>
        </div>
    </section>
    <section id="services-hero" class="product-services-hero">
        <div class="container text-left">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <?php echo form_open("send-contact-email"); ?>
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea rows="4" name="message" class="form-control">
                            </textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Send</button>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">

                </div>
            </div>
        </div>
    </section>
    <section id="about" class="usual-section text-light" style="background-color: #424242;">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">

                    <p style="margin: 0;" class="text-light">
                        <?php echo $business_data["mobile_number"]; ?>
                    </p>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">

                    <p style="margin: 0;" class="text-light">
                        <?php echo $business_data["city"].','.$business_data["country"]; ?>
                    </p>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">

                    <p style="margin: 0;" class="text-light">
                        <?php echo $business_data["email"]; ?>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <?php if(isset($business_data["google_map_embed_code"])): ?>
    <section id="map">
        <?php echo $business_data["google_map_embed_code"]; ?>
    </section>
    <?php endif; ?>
    
</main>
<style>
    p{
        font-size: 20px;
    }
    .form-control{
        border: 1px solid darkgray;
    }
</style>