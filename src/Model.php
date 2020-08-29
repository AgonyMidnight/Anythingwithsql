<?php

class Model
{
    private $obj_DB;
    public $arrayDate;


    public function __construct()
    {
        $this->obj_DB = new DB();
        // $this->view = new View();
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

                break;
            }
            case 2:
            {
                $this->arrayDate[] = array();
                foreach ($this->obj_DB->getDate() as $value) {
                    $this->arrayDate[] = $value;
                }

                break;
            }
            case 3:
            {
                $this->arrayDate[] = array();
                foreach ($this->obj_DB->getFindNumber() as $value) {
                    $this->arrayDate[] = $value;
                }

                break;
            }
            default:
                echo "nope!:";
        }
    }

}
