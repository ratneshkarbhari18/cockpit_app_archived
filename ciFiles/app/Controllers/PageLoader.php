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

        $bizData = $apiCaller->postApi("site-data-fetch",array("data"=>array("apiKey"=>$this->authKey,"subdomain"=>$storeSubdomain)));

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

            $data = array("title"=>"Home | ".$businessData["business_name"],"business_data"=>$businessData,"slides"=>$slides,"products"=>$products,"services"=>$services,"logo_path"=>$logoPath);

            $this->page_loader("home",$data);

        }
    }

    public function products_page()
    {
        # code...
    }

}
