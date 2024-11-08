
<?php
session_start();
ob_start();
require_once '../commons/database.php';
require_once 'controller/trangchu.php';
require_once 'controller/productController.php';
require_once 'model/productModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    '/'             => (new dashboardController())->dashboard(),
    'category'          => (new productController())->list(),
    'insertDM'      => (new productController())-> insert(),
    'deleteDM'      => (new productController())->deleteCTGR($_GET["id"]),
    'updateDM'      => (new productController())->updateCTGR($_GET["id"]),

    default         => handleDefault($act),
};

function handleDefault($act) {
    echo "Action '$act' is not recognized.";
}
?>
