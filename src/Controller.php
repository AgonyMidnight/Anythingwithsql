<?php


class Controller
{
    private $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function setTypequery(int $number){
        $this->model->setArrayDate($number);
    }
}