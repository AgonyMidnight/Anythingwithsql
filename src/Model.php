<?php

class Model
{
    private $obj_DB;
    public $arrayDate;
    private $view;

    public function __construct()
    {
        $this->obj_DB = new DB();
        $this->view = new View();
    }

    /**
     * @param mixed $arrayDate
     */
    public function setArrayDate(int $number): void
    {
        switch ($number) {
            case 1:
            {
                $this->arrayDate[] = array();
                foreach ($this->obj_DB->getPageLayout() as $value) {
                    $this->arrayDate[] = $value;
                }

                $i = 1;
                foreach ($this->arrayDate as $value) {
                    echo "{$i} {$value['entity_id']} {$value['sku']} <br>";
                }
                $this->view->showDate();
                break;
            }
            case 2:{
                $this->arrayDate[] = array();
                foreach ($this->obj_DB->getDate() as $value){
                    $this->arrayDate[] = $value;
                }
                $this->view->showDate();
                break;
            }
            default:
                echo "nope!:";
        }
    }

}
