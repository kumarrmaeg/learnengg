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
    case '/' :
        $controller->home();
        break;
    case '/iti' :
        $controller->iti();
        break;
    case '/aboutus' :
        $controller->aboutus();
        break;
    case '/products' :
        $controller->products();
        break;
    case '/development-process' :
        $controller->development_process();
        break;
    case '/inviting-contributions' :
        $controller->inviting_contributions();
        break;  
    case '/supports' :
        $controller->supports();
        break;      
    case '/diploma' :
        $controller->diploma();
        break;    
    case '/be-btech' :
        $controller->be_btech();
        break; 
    case '/certifications' :
        $controller->certifications();
        break;  
    case '/skill' :
        $controller->skill();
        break; 
    case '/term' :
        $controller->term();
        break;
    case '/product-single'
    || '/iti/electrician'
        || '/iti/mechanist'
        || '/iti/mechanic-motor-vehicle'
        || '/iti/draughtsman-mech'
        || '/iti/fitter'
        || '/iti/welder'
        || '/iti/mechanic-diesel'
        || '/iti/turner'
        || '/iti/copa'
        || '/iti/electronics-mechanic'
        || '/iti/plumber'
        || '/iti/surveyor'
        || '/iti/carpenter'
        || '/iti/sewing-technology'
        || '/iti/include-the-trade-information-communication-technology-system-maintenance' :

        $controller->product_single();
        break;   
                     
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>