<?php


class View
{
    private $model;
    public $controller;

    public function __construct()
    {
        $this->model = new Model();
        $this->controller = new Controller();
    }

    public function showDate()
    {
        print_r($this->model->arrayDate);
    }


}