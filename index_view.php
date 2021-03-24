<?php

    /**
    * The home page view
    */
    class IndexView
    {

        private $model;

        private $controller;

        // function __construct($controller, $model)
        // {
        //     $this->controller = $controller;

        //     $this->model = $model;

        //     $this->view = $view;

        //     print "Home - ";
        // }

        public function index()
        {
            $this->view->render('iti');
            // return $this->controller->sayWelcome();
        }

        public function action()
        {
            return $this->controller->takeAction();
        }

    }