<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $prices = [
        'Burger' => 50,
        'Fries' => 75,
        'Steak' => 150
    ];

    $unit_price = $prices[$order];
    $total_price = $unit_price * $quantity;

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Order Result</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 18px;
                text-align: center; /* Center text */
            }
            .error, .receipt {
                border: 2px solid black; /* Simple border */
                padding: 10px;
                margin: 20px auto; /* Center the box */
                width: 300px; /* Set a fixed width for the container */
            }
            .error {
                color: red;
            }
        </style>
    </head>
    <body>";

    if ($cash < $total_price) {
        echo "<div class='error'>";
        echo "<p><strong>Sorry, balance not enough.</strong></p>";
        echo "</div>";
    } else {
        $change = $cash - $total_price;
        $date = date("Y/m/d H:i:s"); 

        echo "<div class='receipt'>";
        echo "<h2>RECEIPT</h2>";
        echo "<b><strong>Total Price:</strong> $total_price</p>";
        echo "<b><strong>You Paid:</strong> $cash</p>";
        echo "<b><strong>Change:</strong> $change</p>";
        echo "<b> $date</b>";
        echo "</div>";
    }

    echo "</body>
    </html>";
}
?>
