<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculate Money</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .result-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            background-color: white;
            margin-top: 20px;
        }
        .result-header {
            background-color: #00bfff;
            color: white;
            font-weight: bold;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">PHP Calculate Money</h1>
    <hr>
    <p class="text-center">กรุณากรอกข้อมูลเพื่อทำการคำนวณยอดเงิน</p>

    <form method="post" class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="<?= $_POST['price'] ?? '' ?>" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" value="<?= $_POST['amount'] ?? '' ?>" required>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-2">Calculate</button>
            <a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-secondary">Reset All</a>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $price = $_POST['price'] ?? 0;
        $amount = $_POST['amount'] ?? 0;
        $total = $price * $amount;
        ?>

        <div class="result-box mx-auto col-md-6 mt-4 shadow-sm">
            <div class="result-header">Show Result</div>
            <div class="p-3">
                <p>Price of product: <strong><?= number_format($price, 2) ?></strong></p>
                <p>Amount of product: <strong><?= number_format($amount, 2) ?></strong></p>
                <p>Total Paid: <strong class="text-primary"><?= number_format($total, 2) ?></strong></p>
            </div>
        </div>

    <?php } ?>

    <hr>
    <a href="index.php">Home</a>
</div>
</body>
</html>
