<?php


class DB
{
    public $conn = null;

    public function __construct()
    {
        try {
            if ($this->conn == null) {
                $servername = "localhost";
                $username = "root";
                $password = "1488";
                $DB = "one";
                $this->conn = new PDO ("mysql:host=$servername;dbname=$DB", $username, $password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "good";
            }
        } catch (PDOException $e) {
            echo "nope {$e->getMessage()}";
        }
    }

    public function getPageLayout() : array
    {
        $array [] = null;
        $query = "SELECT entity_id, sku, created_at, value, attribute_code FROM catalog_product_entity_text cpet
            JOIN catalog_product_entity cpe on cpet.row_id = cpe.row_id
            JOIN eav_attribute ea on cpet.attribute_id = ea.attribute_id
            WHERE attribute_code = 'page_layout'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
        while($result = $sth->fetch(PDO::FETCH_BOTH)){
            //echo $result;
            print_r($result);
            $array[] = $result;
        }
        return $array;
    }

    public function getDate() : array
    {
        $array[] = null;
        $query = "SELECT * FROM catalog_product_entity_text JOIN catalog_product_entity cpe
                    on catalog_product_entity_text.row_id = cpe.row_id
                    WHERE created_at > '2017-09-20 16:03:28'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
        while($result = $sth->fetch(PDO::FETCH_BOTH)){
            //echo $result;
            print_r($result);
            $array[] = $result;
        }
        return $array;
    }

}
$one = new DB();
$one->getDate();