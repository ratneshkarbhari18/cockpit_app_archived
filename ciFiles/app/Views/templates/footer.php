<footer id="main">
    <div class="container text-center">
        <!-- <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h3 class="text-light">Important Links</h3>
                <ul class="footer-list">
                    <li><a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]; ?>">
                        Home
                    </a></li>
                    <?php if(count($products)>0): ?>
                    <li>
                        <a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."products"; ?>"; ?>Products</a>
                    </li>
                    <?php endif; ?>
                    <?php if(count($services)>0): ?>
                    <li>
                        <a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."services"; ?>"; ?>Services</a>
                    </li>
                    <?php endif; ?>
                    <li><a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."about"; ?>">
                        About
                    </a></li>
                    <li><a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."contact"; ?>">
                        Contact
                    </a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <h3 class="text-light">Policies</h3>
                <ul class="footer-list">
                    <li><a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]; ?>">
                        Home
                    </a></li>
                    <?php if(count($products)>0): ?>
                    <li>
                        <a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."products"; ?>"; ?>Products</a>
                    </li>
                    <?php endif; ?>
                    <?php if(count($services)>0): ?>
                    <li>
                        <a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."services"; ?>"; ?>Services</a>
                    </li>
                    <?php endif; ?>
                    <li><a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."about"; ?>">
                        About
                    </a></li>
                    <li><a class="text-light" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."contact"; ?>">
                        Contact
                    </a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <img src="<?php echo $logo_path; ?>" class="w-100">
            </div>
            
        </div> -->
        <p class="text-light">Developed with &#10084; using <a class="text-light" style="text-decoration: underline;" href="https://getcockpit.tech">Cockpit</a></p>
        
    </div>
</footer>
<a target="_blank" href="https://wa.me/<?php echo $business_data["whatsapp_number"]; ?>">
<img src="<?php echo site_url("assets/img/waIcon.png"); ?>" id="waIcon">
</a>
<script src="<?php echo site_url("assets/js/jquery.min.js"); ?>"></script>
<script src="<?php echo site_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="https://rksoftwarelabs.tech/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo site_url("assets/js/app.min.js"); ?>"></script>