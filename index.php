<?php

$request = $_SERVER['REQUEST_URI'];
include_once("controller/RouteController.php");
$controller = new RouteController();



  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   

    // $url = explode ("/",$url); 

    // Append the requested resource location to the URL   
    // $url.= $_SERVER['REQUEST_URI'];    

    // $url = str_replace('localhost','learnengg',$url);

    // print_r($url);  

    // echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


    // $segments = explode('/', $request);
    // $numSegments = count($segments); 
    // $currentSegment = $segments[$numSegments - 1];

    // echo $request;



switch ($request) {
    case '/learnengg/' :
        $controller->home();
        break;
    case '/learnengg/iti' :
        $controller->iti();
        break;
    case '/learnengg/aboutus' :
        $controller->aboutus();
        break;
    case '/learnengg/products' :
        $controller->products();
        break;
    case '/learnengg/development-process' :
        $controller->development_process();
        break;
    case '/learnengg/inviting-contributions' :
        $controller->inviting_contributions();
        break;  
    case '/learnengg/supports' :
        $controller->supports();
        break;      
    case '/learnengg/diploma' :
        $controller->diploma();
        break;    
    case '/learnengg/be-btech' :
        $controller->be_btech();
        break; 
    case '/learnengg/certifications' :
        $controller->certifications();
        break;  
    case '/learnengg/skill' :
        $controller->skill();
        break; 
    case '/learnengg/term' :
        $controller->term();
        break;
    case '/learnengg/product-single'
    || '/learnengg/iti/electrician'
        || '/learnengg/iti/mechanist'
        || '/learnengg/iti/mechanic-motor-vehicle'
        || '/learnengg/iti/draughtsman-mech'
        || '/learnengg/iti/fitter'
        || '/learnengg/iti/welder'
        || '/learnengg/iti/mechanic-diesel'
        || '/learnengg/iti/turner'
        || '/learnengg/iti/copa'
        || '/learnengg/iti/electronics-mechanic'
        || '/learnengg/iti/plumber'
        || '/learnengg/iti/surveyor'
        || '/learnengg/iti/carpenter'
        || '/learnengg/iti/sewing-technology'
        || '/learnengg/iti/include-the-trade-information-communication-technology-system-maintenance' :

        $controller->product_single();
        break;   
                     
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>