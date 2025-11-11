<?php
include('conn.php');

if (isset($_GET['purchaseid'])) {
    $purchaseid = $_GET['purchaseid'];

    // Fetch purchase details
    $purchase_sql = "SELECT * FROM purchase WHERE purchaseid='$purchaseid'";
    $purchase_query = $conn->query($purchase_sql);
    $purchase = $purchase_query->fetch_assoc();

    // Fetch purchase detail items
    $details_sql = "SELECT product.productname, product.price, purchase_detail.quantity
                    FROM purchase_detail
                    LEFT JOIN product ON product.productid = purchase_detail.productid
                    WHERE purchaseid='$purchaseid'";
    $details_query = $conn->query($details_sql);
} else {
    echo "No purchase ID found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
    <style>
        body {
    background-image: url('coimage/orange.jpg');
    background-size: cover; 
    background-repeat: no-repeat; 
    background-position: center; 
    margin: 0; 
    height: 100vh;
    width: 100vw; 
}
     .container {
            
        max-width: 600px;
        margin: auto;
        background: rgba(255, 255, 255, 0.8); 
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        } 
        
        h1, h2, h3 {
            color: #333;
        }
        .btn {
            background-color:orangered;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius: 5px;
            width: 80%;
            max-width: 500px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total-row {
            font-weight: bold;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <h1>Order Summary</h1>
        <h2>Customer: <?php echo htmlspecialchars($purchase['customer']); ?></h2>
        <h3>Order Date: <?php echo date('M d, Y h:i A', strtotime($purchase['date_purchase'])); ?></h3>
        <h4>Your order is done successfully!</h4>

        <!-- Button to trigger the modal -->
        <button id="viewOrderDetails" class="btn">View Order Details</button>

        <!-- Modal -->
        <div id="orderModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h5>Orders Full Details</h5>
                <p>Customer: <strong><?php echo htmlspecialchars($purchase['customer']); ?></strong></p>
                <p>Date: <strong><?php echo date('M d, Y h:i A', strtotime($purchase['date_purchase'])); ?></strong></p>
                <table>
                    <thead>
                        <tr>
                            <th>Food Name</th>
                            <th>Price</th>
                            <th>Purchase Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total_price = 0;
                        while ($detail = $details_query->fetch_assoc()) {
                            $subtotal = $detail['price'] * $detail['quantity'];
                            $total_price += $subtotal;
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($detail['productname']); ?></td>
                                <td> <?php echo number_format($detail['price'], 2); echo " ETB";?></td>
                                <td><?php echo $detail['quantity']; ?></td>
                                <td> <?php echo number_format($subtotal, 2);  echo " ETB";?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <tr class="total-row">
                            <td colspan="3" style="text-align: right;">TOTAL</td>
                            <td> <?php echo number_format($total_price, 2);  echo " ETB"; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <a href="order.php" class="btn btn-secondary">Back to Order</a>
    </div>

    <script>
        // Modal functionality
        var modal = document.getElementById("orderModal");
        var btn = document.getElementById("viewOrderDetails");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>