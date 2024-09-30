<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>

</head>
<body>
    <h1>Menu</h1>

    <table border="1">
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <form method="POST" action="process_order.php">
        <br> <label for="order">Select an order:</label> 
        <select name="order" id="order" required> 
            <option value="Burger">Burger - 50</option>
            <option value="Fries">Fries - 75</option>
            <option value="Steak">Steak - 150</option>
        </select>
        <br>

        <br> <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>
        <br>

        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" min="1" required>
        <br>

        <br> <button type="submit">Submit</button>
    </form>
</body>
</html>
