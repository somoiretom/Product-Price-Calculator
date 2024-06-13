<!-- *****************************
     * Name: Somoire Tom         *
     * Reg. No: BCS-03-0012/2023 *
     * Internet Programming II   *
     * Assignment 1              *
     ***************************** -->
<!DOCTYPE html>
<html>
<head>
    <title>Product Price Calculator</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            width: 500px;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
            margin-right: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 10px;
        }
        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #3e8e41;
        }
        .results {
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
    </style>
</head>
<body>
    <body>
    <div class="container">
        <h2>Product Price Calculator</h2>
        <form method="post">
            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName">
            </div>
            <div class="form-group">
                <label for="buyingPrice">Buying Price:</label>
                <input type="number" id="buyingPrice" name="buyingPrice">
            </div>
            <input type="submit" value="Calculate">
        </form>
    <?php
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productName = $_POST["productName"];
        $buyingPrice = $_POST["buyingPrice"];

        $vatRate = 0.16;
        $vat = $buyingPrice * $vatRate;

        $generalExpensesPercentage = 0.10; 
        $generalExpenses = $buyingPrice * $generalExpensesPercentage;

        $profitMarginPercentage = 0.20;
        $profitMargin = $buyingPrice * $profitMarginPercentage;
       
        $sellingPrice = $buyingPrice + $vat + $generalExpenses + $profitMargin;

        echo "<h2>Results</h2>";
        echo "Product Name: $productName<br>";
        echo "Buying Price: Ksh." . number_format($buyingPrice, 2) ."<br>";
        echo "VAT: Ksh." . number_format($vat, 2) . "<br>";
        echo "General Expenses: Ksh." . number_format($generalExpenses, 2) . "<br>";
        echo "Profit Margin: Ksh." . number_format($profitMargin, 2) . "<br>";
        echo "Selling Price: Ksh." . number_format($sellingPrice, 2) . "<br>";
    }
    ?>
</body>
</html>