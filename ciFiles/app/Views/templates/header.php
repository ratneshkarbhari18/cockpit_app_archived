<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/app.min.css"); ?>">

</head>
<body>
    <script src="<?php echo site_url("assets/js/jquery.min.js"); ?>"></script>
    <header id="header">
        <nav class="navbar navbar-expand-lg text-dark" style="box-shadow:0 0 5px darkgrey;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]; ?>">
                    <img src="<?php echo $logo_path; ?>" class="w-100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav" style="margin-left: auto;">
                        <?php if(count($products)>0): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."products"; ?>"; ?>Products</a>
                        </li>
                        <?php endif; ?>
                        <?php if(count($services)>0): ?>
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."services"; ?>"; ?>Services</a>
                        </li>
                        <?php endif; ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."about"; ?>"; ?>About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo "http://".$business_data["subdomain"].'.'.$_ENV["CLIENT_URL_NON_HTTP"]."contact"; ?>"; ?>Contact</a>
                        </li>
                        
                    </ul>
                
                </div>
            </div>
        </nav>
    </header>
    
</body>
</html>