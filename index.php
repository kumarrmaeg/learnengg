<?php

$request = $_SERVER['REQUEST_URI'];
include_once("controller/RouteController.php");
$controller = new RouteController();



 // echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


// $segments = explode('/', $request);
// $numSegments = count($segments); 
// $currentSegment = $segments[$numSegments - 1];

// echo $request;



switch ($request) {
    case 'https://testlearnengg.herokuapp.com/' :
        $controller->home();
        break;
    case 'https://testlearnengg.herokuapp.com/iti' :
        $controller->iti();
        break;
    case 'https://testlearnengg.herokuapp.com/aboutus' :
        $controller->aboutus();
        break;
    case 'https://testlearnengg.herokuapp.com/products' :
        $controller->products();
        break;
    case 'https://testlearnengg.herokuapp.com/development-process' :
        $controller->development_process();
        break;
    case 'https://testlearnengg.herokuapp.com/inviting-contributions' :
        $controller->inviting_contributions();
        break;  
    case 'https://testlearnengg.herokuapp.com/supports' :
        $controller->supports();
        break;      
    case 'https://testlearnengg.herokuapp.com/diploma' :
        $controller->diploma();
        break;    
    case 'https://testlearnengg.herokuapp.com/be-btech' :
        $controller->be_btech();
        break; 
    case 'https://testlearnengg.herokuapp.com/certifications' :
        $controller->certifications();
        break;  
    case 'https://testlearnengg.herokuapp.com/skill' :
        $controller->skill();
        break; 
    case 'https://testlearnengg.herokuapp.com/term' :
        $controller->term();
        break;
    case 'https://testlearnengg.herokuapp.com/product-single':
    // || 'https://testlearnengg.herokuapp.com/iti/electrician'
    //     || 'https://testlearnengg.herokuapp.com/iti/mechanist'
    //     || 'https://testlearnengg.herokuapp.com/iti/mechanic-motor-vehicle'
    //     || 'https://testlearnengg.herokuapp.com/iti/draughtsman-mech'
    //     || 'https://testlearnengg.herokuapp.com/iti/fitter'
    //     || 'https://testlearnengg.herokuapp.com/iti/welder'
    //     || 'https://testlearnengg.herokuapp.com/iti/mechanic-diesel'
    //     || 'https://testlearnengg.herokuapp.com/iti/turner'
    //     || 'https://testlearnengg.herokuapp.com/iti/copa'
    //     || 'https://testlearnengg.herokuapp.com/iti/electronics-mechanic'
    //     || 'https://testlearnengg.herokuapp.com/iti/plumber'
    //     || 'https://testlearnengg.herokuapp.com/iti/surveyor'
    //     || 'https://testlearnengg.herokuapp.com/iti/carpenter'
    //     || 'https://testlearnengg.herokuapp.com/iti/sewing-technology'
    //     || 'https://testlearnengg.herokuapp.com/iti/include-the-trade-information-communication-technology-system-maintenance' :

        $controller->product_single();
        break;  

            case 'https://testlearnengg.herokuapp.com/iti/electrician':
    // || 'https://testlearnengg.herokuapp.com/iti/electrician'

        $controller->product_single();
        break;     
                     
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

// switch ($currentSegment) {
//     case 'electrician':
//         $controller->product_single();
//         break;  
    
//     default:
//         http_response_code(404);
//         require __DIR__ . '/views/404.php';
//         break;
// }


// include_once("controller/UserController.php");
// $controller = new UserController();
// $controller->invoke();
?>