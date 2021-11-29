<?php
session_start();
require_once '../db/dbhelper.php';
require_once '../db/config.php';

if (!empty($_POST)) {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'add':
                $userid = $_SESSION['user_id'];
                $productid = $_POST['product_id'];
                $product_quantity = $_POST['product_quantity'];

                $sql = "select * from cart where productid = $productid";
                $row = executeSingleResult($sql);
                if ($row != null) {
                    $count = (int)$row['product_quant'] + (int)$product_quantity;
                    $sql2 = "update cart set product_quant = $count where productid = $productid";
                    if (execute($sql2)) {
                        echo json_encode(array("statusCode" => 200));
                    } else {
                        echo json_encode(array("statusCode" => 500));
                    }
                } else {
                    $sql2 = "insert into `cart` (`userid`, `productid`, `product_quant`) values ('$userid', $productid, $product_quantity)";
                    if (execute($sql2)) {
                        echo json_encode(array("statusCode" => 200));
                    } else {
                        echo json_encode(array("statusCode" => 500));
                    }
                }
                break;

            case 'get_quantity':
                $user_id = 1;
                $sql = "select sum(product_quant) sum from cart where userid = $user_id";
                $res = execute($sql);
                if ($res) {
                    $total = mysqli_fetch_assoc($res)['sum'];
                    $_SESSION['cart_quant'] = $total;
                    echo json_encode(array("statusCode" => 200, "total" => $total));
                } else {
                    echo json_encode(array("statusCode" => 500));
                }
                break;

            case 'delete':
                $id = $_POST['id'];
                $sql = "delete from cart where  id = $id";

                if (execute($sql)) {
                    echo json_encode(array("statusCode" => 200));
                } else {
                    echo json_encode(array("statusCode" => 500));
                }
                break;
            case 'get_all_cart': 
                $id = 1;
                $sql = "select * from cart";

                $res = executeResult($sql);
                echo json_encode(array("data" => $res));
        }
    }
}
