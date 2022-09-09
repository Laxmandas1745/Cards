<?php
use Phppot\DataSource;

class Product
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/DataSource.php';
        $this->ds = new DataSource();
    }

    function getAllProduct()
    {
        $sql = "SELECT * FROM tbl_product";
        $result = $this->ds->select($sql);
        return $result;
    }
}