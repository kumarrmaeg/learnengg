<?php

    /**
    * The about page view
    */
    class AboutView
    {

        private $modelObj;

        private $controller;

        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->modelObj = $model;

            // echo $controller;

             // return $this->Views->render('iti');

            print "About - ";
        }

        public function now()
        {
            return $this->modelObj->nowADays();
        }

        public function today()
        {
            return $this->controller->current();
        }

    }