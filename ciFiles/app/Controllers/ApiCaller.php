<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;
use App\Libraries\EnvFetcher;

class ApiCaller extends BaseController
{

    private $saasApiKey = "620f56c2c2d4b";
 


    public function postApiBizData($endPointSlug,$data)
    {

        $envFetcher = new EnvFetcher(".env");

        $envFetcher->load();

        $endPoint = $_ENV["SERVER_URL"].$endPointSlug;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $endPoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => 'utf-8',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array("apiKey"=>$this->saasApiKey,"subdomain"=>$data["data"]["subdomain"]),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

        
    }

    public function fetchProductData($endPointSlug,$data)
    {
        $envFetcher = new EnvFetcher(".env");

        $envFetcher->load();

        $endPoint = $_ENV["SERVER_URL"].$endPointSlug;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $endPoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => 'utf-8',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array("apiKey"=>$this->saasApiKey,"slug"=>$data["data"]["slug"]),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;    
    }

}