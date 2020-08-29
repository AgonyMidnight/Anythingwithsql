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
        echo '<table border="1">';
        foreach ($this->model->arrayDate as $el) {
            echo '<tr>';
            foreach ($el as $e) {
                echo '<td>' . $e . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }


}