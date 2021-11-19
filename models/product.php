<?php
    public function getAllProducts ()
    {
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
}
    public function getAllProductById($id)
{

        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i",$id);
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
    }
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE 'name'LIKE ?");
        $keyword="%$keyword%";
        $sql->bind_param("s",$keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //*
    public function paginate($url,$total,$perPage)
    {
        $totalLinks=ceil($total/$perPage);
        $link=$link."<li><a href='$url&page=$j'>$j</a></i>";

}
    return $link;

}
    public function getAllProductsMyManu($manu_id)
{
        $sql=self::$connection->prepage("SELECT*FROM protypes");
        $sql->execute();//return an object  
        $items=array();
        $items=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;//return an array
}