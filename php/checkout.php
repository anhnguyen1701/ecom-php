<?php
require_once '../db/dbhelper.php';
require_once '../db/config.php';
session_start();

$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

if (!empty($_POST)) {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        switch ($action) {
            case 'checkout':
                $userid = 1;

                $checkout_status = "da hoan thanh";

                $checkout_name = $_POST['checkout_name'];
                $checkout_address = $_POST['checkout_address'];
                $checkout_phone = $_POST['checkout_phone'];
                $checkout_note = $_POST['checkout_note'];


                $cart = $_POST['cart'];

                $sql = "INSERT INTO `order` (`userid`, `name`, `address`, `phone`, `note`, `status`) VALUE ('$userid', '$checkout_name', '$checkout_address', '$checkout_phone', '$checkout_note', '$checkout_status')";

                if (mysqli_query($con, $sql)) {
                    $orderid = mysqli_insert_id($con);

                    $statusCode = 200;

                    foreach ($cart as $item) {
                        $productid = $item['productid'];
                        $product_quant = $item['product_quant'];

                        $sql2 = "insert into order_detail(orderid, productid, product_quant) values('$orderid', '$productid', '$product_quant')";
                        if (!mysqli_query($con, $sql2)) {
                            echo mysqli_error($con);
                            $statusCode = 500;
                        }
                    }

                    $sql3 = "delete from cart where userid = '$userid'";
                    if (!mysqli_query($con, $sql3)) {
                        echo mysqli_error($con);
                        $statusCode = 500;
                    }
                    
                    $_SESSION['cart_quant'] = 0;

                    echo json_encode(array("statusCode" => $statusCode));
                } else {
                    echo mysqli_error($con);
                    echo json_encode(array("statusCode" => 500));
                }
        }
    }
}
