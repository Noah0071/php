<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop-For-show-product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
        }
    </style>
</head>

<body>
<?php
$products = [
    ['id' => 1001, 'name' => 'Apple', 'price' => 60, 'quantity' => 50],
    ['id' => 1002, 'name' => 'Banana', 'price' => 30, 'quantity' => 40],
    ['id' => 1003, 'name' => 'Orange', 'price' => 45, 'quantity' => 60],
    ['id' => 1004, 'name' => 'Grape', 'price' => 55, 'quantity' => 35],
    ['id' => 1005, 'name' => 'Pineapple', 'price' => 80, 'quantity' => 25],
    ['id' => 1006, 'name' => 'Watermelon', 'price' => 90, 'quantity' => 20],
    ['id' => 1007, 'name' => 'Mango', 'price' => 70, 'quantity' => 45],
    ['id' => 1008, 'name' => 'Strawberry', 'price' => 100, 'quantity' => 30],
    ['id' => 1009, 'name' => 'Blueberry', 'price' => 75, 'quantity' => 40],
    ['id' => 1010, 'name' => 'Blackberry', 'price' => 85, 'quantity' => 38],
    ['id' => 1011, 'name' => 'Pear', 'price' => 50, 'quantity' => 55],
    ['id' => 1012, 'name' => 'Kiwi', 'price' => 65, 'quantity' => 42],
    ['id' => 1013, 'name' => 'Lemon', 'price' => 25, 'quantity' => 70],
    ['id' => 1014, 'name' => 'Cherry', 'price' => 95, 'quantity' => 33],
    ['id' => 1015, 'name' => 'Papaya', 'price' => 60, 'quantity' => 48],
];
?>
<div class="container mt-5">
    <h1>Product list</h1>

    <form action="" method="post" class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <input type="number" name="price" placeholder="Enter Price" class="form-control mb-2">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <table id="productTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (isset($_POST['price']) && !empty($_POST['price'])) {
            $filterPrice = $_POST['price'];
            $filterProducts = array_filter($products, function($product) use ($filterPrice) {
                return $product['price'] == $filterPrice;
            });

            //คืนค่า ให้เริ่มที่ 0
            $filterProducts = array_values($filterProducts);
        } else {
            $filterProducts = $products;
        }

        foreach ($filterProducts as $index => $product) {
            echo "<tr>";
            echo "<td>" . ($index + 1) . "</td>";
            echo "<td>" . $product['id'] . "</td>";
            echo "<td>" . $product['name'] . "</td>";
            echo "<td>" . $product['price'] . "</td>";
            echo "<td>" . $product['quantity'] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

<script>
    new DataTable('#productTable');
</script>
</body>
</html>
