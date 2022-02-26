<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class ApiCaller extends BaseController
{


    private function endpointCreator($endpointSlug)
    {
        return "http://localhost/products/cockpitMVP/".$endpointSlug;
    }

    private $saasApiKey = "620f56c2c2d4b";

    public function postApi($endPointSlug,$data)
    {

        $endPoint = $this->endpointCreator($endPointSlug);

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
        CURLOPT_POSTFIELDS => array("apiKey"=>$this->saasApiKey,"subdomain"=>"testsubdomain"),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

        
    }

}