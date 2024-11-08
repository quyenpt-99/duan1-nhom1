<?php
class productModel{
    public $conn;
    function __construct(){
        $this->conn=connectDB();
    }
//danh mục sản phẩm
function allCTGR(){
    $sql = "SELECT * FROM danhmuc";
    return $this->conn->query($sql);
}

function insertCTGR($CTGRname)
{
    $sql = "INSERT INTO danhmuc VALUES(null,'$CTGRname')";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute();
}

function deleteCTGR($id){
    $sql = "DELETE FROM danhmuc where id_danhmuc ='$id'";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute();
}

function findCTGR($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id_danhmuc = $id";
    return $this->conn->query($sql)->fetch();
}

function updateCTGR($id, $nameCTGR){
    $sql = "UPDATE danhmuc set ten_danhmuc = '$nameCTGR' where id_danhmuc = '$id'";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute();
}
//
}
?>