<?php
require_once 'model/productModel.php';
class productController{
    public $productModel;
    function __construct(){
        $this->productModel=new productModel();
    }
    //danh mục sản phẩm
    function list()
    {
        $category = $this->productModel->allCTGR();
        require_once 'views/DM.php';
    }

    function insert()
    
    {
       
        
        require_once 'views/insertDM.php';
        if (isset($_POST['btn_insertCTGR'])) {
            $CTGRname = $_POST['cate_name'];
            if ($this->productModel->insertCTGR($CTGRname)) {
                header('location: ?act=category');
            } else {
                echo 'insert fail';
            }
        }
    }

    function deleteCTGR($id)
    {
        if ($this->productModel->deleteCTGR($id)) {
            header('location:index.php?act=category');
        } else {
            echo 'xóa không được mục sản phẩm này';
        }
    }

    function updateCTGR($id)
    {
        $oneCTGR = $this->productModel->findCTGR($id);
        require_once 'views/updateDM.php';
        if (isset($_POST['btn_updateCTGR'])) {
            $id = $_POST['id'];
            $nameCTGR = $_POST['cate_name'];
            if ($this->productModel->updateCTGR($id, $nameCTGR)) {
                header('location:?act=category');

            } else {
                echo "lỗi";
            }
        }
    }



    //



}
?>