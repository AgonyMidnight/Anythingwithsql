<?php


class Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Model();
    }
    public function setTypequery(int $number){
        $this->model->setArrayDate($number);
    }
}