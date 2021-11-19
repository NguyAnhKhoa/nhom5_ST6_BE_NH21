<?php
class Protype extends Dd{
    public function getAllProtype()
    {
        $sql=self::$connection->prepage("SELECT*FROM protypes");
        $sql->execute();//return an object  
        $items=array();
        $items=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;//return an array
    }
}
