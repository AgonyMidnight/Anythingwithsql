<?php

class Model
{
    private $obj_DB;
    private $arrayDate;
    private $view;

    public function __construct()
    {
        $obj_DB = new DB();
        $objView = new View();
    }

    /**
     * @param mixed $arrayDate
     */
    public function setArrayDate(int $number): void
    {
        switch ($number) {
            case 1:
            {
                //$a[] = $this->obj_DB->getPageLayout();
                foreach ($this->obj_DB->getPageLayout() as $value) {
                    $this->arrayDate[] = $value;
                }

                $i = 1;
                foreach ($this->arrayDate as $value) {
                    echo "{$i} {$value['entity_id']} {$value['sku']} <br>";
                }
                break;
            }
            case 2:{
                $a[] = null;
                foreach ($this->obj_DB->getDate() as $value){
                    $a[] = $value;
                }
                break;
            }
            default:
                echo "nope!:";
        }
    }

}
