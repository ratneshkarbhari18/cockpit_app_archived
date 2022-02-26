<?php

namespace App\Controllers;
use App\Controllers\ApiCaller;

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

        $bizData = $apiCaller->postApi("site-data-fetch",array("apiKey"=>$this->authKey,"subdomain"=>$storeSubdomain));

        $data = array("title"=>"Home","bizdata"=>$bizData);

        $this->page_loader("home",$data);

    }
}
