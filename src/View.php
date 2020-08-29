<?php


class View
{
    private $model;
    public $controller;

    public function __construct(Controller $controller, Model $model)
    {
        $this->model = $model;
        $this->controller = $controller;
    }

    public function showDate()
    {
        print_r($this->model->arrayDate);
    }


}