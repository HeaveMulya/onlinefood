<?php
// update_cart.php
require_once('admin/connection.php'); // Include your database connection file

if (isset($_POST['cart_id']) && isset($_POST['new_qty'])) {
    $cartId = $_POST['cart_id'];
    $newQty = $_POST['new_qty'];

    // Update the cart quantity in the database
    $updateQuery = "UPDATE cart SET product_qty = $newQty WHERE cart_id = $cartId";
    $result = mysqli_query($conn, $updateQuery);

    if ($result) {
        // Calculate the new total price for the cart
        $ip = getIPAddress();
        $selectQuery = "SELECT SUM(product_qty * food_price) AS total FROM cart, food_items WHERE cart.product_id = food_items.food_id AND cart.user_ip = '$ip'";
        $resultQuery = mysqli_query($conn, $selectQuery);
        $row = mysqli_fetch_assoc($resultQuery);
        $cartTotal = $row['total'];

        echo json_encode(['success' => true, 'newPrice' => $newQty * $foodPrice, 'cartTotal' => $cartTotal]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
