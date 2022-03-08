<?php

namespace App\Controllers;
use App\Controllers\ApiCaller;
use App\Libraries\EnvFetcher;
use PhpParser\Node\Stmt\Echo_;

class PageLoader extends BaseController
{

    private $authKey = "620f56c2c2d4b";

    private function getSlug()
    {
        $host = $_SERVER["HTTP_HOST"];

        $hostParts = explode(".",$host);

        return $hostParts[0];

    }

    public function page_loader($viewName,$data)
    {   
        echo view("templates/header",$data);
        echo view("site_pages/".$viewName,$data);
        echo view("templates/footer",$data);
    }

    public function home()
    {

        $storeSubdomain = $this->getSlug();

        $apiCaller = new ApiCaller();

        $bizData = $apiCaller->postApiBizData("site-data-fetch",array("data"=>array("apiKey"=>$this->authKey,"subdomain"=>$storeSubdomain)));

        $bizData = json_decode($bizData,TRUE);

        if ($bizData["result"]=="error") {
            
            echo view("templates/error",array("error_message"=>$bizData["message"]));
        
        } else {

            $bizData = $bizData["site_data"];    

            $businessData = $bizData["bizdata"];

            $slides = $bizData["slides"];

            $products = $bizData["products"];
            $services = $bizData["services"];

            $logoPath = $_ENV["SERVER_URL"]."user_assets/images/logos/".$businessData["logo"];

            $data = array("title"=>"Home | ".$businessData["business_name"],"business_data"=>$businessData,"slides"=>$slides,"products"=>$products,"services"=>$services,"logo_path"=>$logoPath,"about_home"=>$bizData["about_home"]);

            $this->page_loader("home",$data);

        }
    }

    public function products_page()
    {
        $storeSubdomain = $this->getSlug();

        $apiCaller = new ApiCaller();

        $bizData = $apiCaller->postApiBizData("site-data-fetch",array("data"=>array("apiKey"=>$this->authKey,"subdomain"=>$storeSubdomain)));

        $bizData = json_decode($bizData,TRUE);

        if ($bizData["result"]=="error") {
            
            echo view("templates/error",array("error_message"=>$bizData["message"]));
        
        } else {

            $bizData = $bizData["site_data"];    

            $businessData = $bizData["bizdata"];
            $services = $bizData["services"];


            $products = $bizData["products"];

            $logoPath = $_ENV["SERVER_URL"]."user_assets/images/logos/".$businessData["logo"];

            $data = array("title"=>"Products | ".$businessData["business_name"],"business_data"=>$businessData,"products"=>$products,"services"=>$services,"logo_path"=>$logoPath);

            $this->page_loader("products",$data);

        }
    }

    public function services_page()
    {
        $storeSubdomain = $this->getSlug();

        $apiCaller = new ApiCaller();

        $bizData = $apiCaller->postApiBizData("site-data-fetch",array("data"=>array("apiKey"=>$this->authKey,"subdomain"=>$storeSubdomain)));

        $bizData = json_decode($bizData,TRUE);

        if ($bizData["result"]=="error") {
            
            echo view("templates/error",array("error_message"=>$bizData["message"]));
        
        } else {

            $bizData = $bizData["site_data"];    

            $businessData = $bizData["bizdata"];
            $services = $bizData["services"];


            $products = $bizData["products"];

            $logoPath = $_ENV["SERVER_URL"]."user_assets/images/logos/".$businessData["logo"];

            $data = array("title"=>"Services | ".$businessData["business_name"],"business_data"=>$businessData,"products"=>$products,"services"=>$services,"logo_path"=>$logoPath);

            $this->page_loader("services",$data);

        }
    }

    public function about_page()
    {
        $storeSubdomain = $this->getSlug();

        $apiCaller = new ApiCaller();

        $bizData = $apiCaller->postApiBizData("site-data-fetch",array("data"=>array("apiKey"=>$this->authKey,"subdomain"=>$storeSubdomain)));

        $bizData = json_decode($bizData,TRUE);

        if ($bizData["result"]=="error") {
            
            echo view("templates/error",array("error_message"=>$bizData["message"]));
        
        } else {

            $bizData = $bizData["site_data"];    

            $businessData = $bizData["bizdata"];
            $services = $bizData["services"];

            $products = $bizData["products"];


            $logoPath = $_ENV["SERVER_URL"]."user_assets/images/logos/".$businessData["logo"];

            $data = array("title"=>"About | ".$businessData["business_name"],"business_data"=>$businessData,"products"=>$products,"services"=>$services,"logo_path"=>$logoPath,"about_detailed"=>$bizData["about_detailed"],"mission"=>$bizData["mission"],"vision"=>$bizData["vision"]);


            $this->page_loader("about",$data);

        }
    }

    public function contact_page()
    {
        $storeSubdomain = $this->getSlug();

        $apiCaller = new ApiCaller();

        $bizData = $apiCaller->postApiBizData("site-data-fetch",array("data"=>array("apiKey"=>$this->authKey,"subdomain"=>$storeSubdomain)));

        $bizData = json_decode($bizData,TRUE);

        if ($bizData["result"]=="error") {
            
            echo view("templates/error",array("error_message"=>$bizData["message"]));
        
        } else {

            $bizData = $bizData["site_data"];    

            $businessData = $bizData["bizdata"];
            $services = $bizData["services"];

            $products = $bizData["products"];


            $logoPath = $_ENV["SERVER_URL"]."user_assets/images/logos/".$businessData["logo"];

            helper("form");

            $data = array("title"=>"Contact | ".$businessData["business_name"],"business_data"=>$businessData,"products"=>$products,"services"=>$services,"logo_path"=>$logoPath);


            $this->page_loader("contact",$data);

        }
    }

    public function product_page($slug)
    {
     
        $storeSubdomain = $this->getSlug();

        $apiCaller = new ApiCaller();

        $bizData = $apiCaller->postApiBizData("site-data-fetch",array("data"=>array("apiKey"=>$this->authKey,"subdomain"=>$storeSubdomain)));

        $bizData = json_decode($bizData,TRUE);

        if ($bizData["result"]=="error") {
            
            echo view("templates/error",array("error_message"=>$bizData["message"]));


        
        } else {

            $bizData = $bizData["site_data"];    

            $businessData = $bizData["bizdata"];
            $services = $bizData["services"];

            $products = $bizData["products"];


            $logoPath = $_ENV["SERVER_URL"]."user_assets/images/logos/".$businessData["logo"];

            helper("form");

            $data = $apiCaller->fetchProductData("fetch-product",array("data"=>array("apiKey"=>$this->authKey,"slug"=>$slug)));

            $data = json_decode($data,TRUE);


            if ($data["result"]=="error") {

                echo view("templates/error",array("error_message"=>$bizData["message"]));

    
            }else {

                $hero_product = $data["data"];

                $data = array("title"=>$hero_product["title"]." | ".$businessData["business_name"],"business_data"=>$businessData,"products"=>$products,"services"=>$services,"logo_path"=>$logoPath,"hero_product"=>$hero_product);
                
            }



            $this->page_loader("product_page",$data);

        }
        
    }


}
