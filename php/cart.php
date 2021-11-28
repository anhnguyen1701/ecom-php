<?php
require_once '../db/dbhelper.php';
require_once '../db/config.php';

if (!empty($_POST)) {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'add':
                $productid = $_POST['product_id'];
                $product_quantity = $_POST['product_quantity'];

                $sql = "insert into `cart` (`userid`, `productid`, `product_quant`) values ('1', $productid, $product_quantity)";

                if (execute($sql)) {
                    echo json_encode(array("statusCode" => 200));
                } else {
                    echo json_encode(array("statusCode" => 500));
                }
                break;

            case 'get_quantity':
                $user_id = 1;
                $sql = "select sum(product_quant) sum from cart where userid = $user_id";
                $res = execute($sql);
                if ($res) {
                    $total = mysqli_fetch_assoc($res)['sum'];
                    echo json_encode(array("statusCode" => 200, "total" => $total));
                } else {
                    echo json_encode(array("statusCode" => 500));
                }
        }
    }
}
