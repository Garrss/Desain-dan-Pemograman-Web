<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}

// Room prices based on type and floor
$roomPrices = [
    'single' => 100000,  // Price in Rupiah
    'double' => 150000,
    'suite' => 250000,
    'deluxe' => 350000,
];

// Initialize variables
$totalPrice = 0;
$totalDiscount = 0;
$finalPayment = 0;
$errorMessage = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $floor = (int)$_POST['floor'];  // Ensure floor is treated as an integer
    $roomType = $_POST['roomType'];
    $days = (int)$_POST['days'];
    $discountType = $_POST['discount'];

    // Validate inputs
    if ($floor === 0) {
        $errorMessage = "Floor 0 is not available for booking.";
    } elseif ($floor === "" || !isset($roomPrices[$roomType]) || $days <= 0) {
        $errorMessage = "Please fill out all fields correctly.";
    } else {
        // Calculate total price
        $basePrice = $roomPrices[$roomType];
        $totalPrice = $basePrice * $days;

        // Add additional charge for floors above 5
        if ($floor > 5) {
            $totalPrice += 10000;  // Add 10000 Rupiah for floors above the 5th floor
        }

        // Set discount percentage based on discount type
        $discountPercentage = 0;
        if ($discountType === "Member") {
            $discountPercentage = 0.1 * $totalPrice; // 10% discount for members
        } elseif ($discountType === "Birthday") {
            $discountPercentage = 50000; // Fixed 50,000 Rupiah discount for birthdays
        }

        // Calculate total discount
        $totalDiscount = $discountPercentage;

        // Calculate final payment
        $finalPayment = $totalPrice - $totalDiscount;

        // Create a success message with a structured display
        $successMessage = "
            <div><strong>Total price for $days day(s) in a $roomType room on floor $floor:</strong><br> 
            Rp " . number_format($totalPrice, 0, ',', '.') . "</div><br>
            <div><strong>Discount type:</strong> $discountType</div>
            <div><strong>Total discount:</strong> Rp " . number_format($totalDiscount, 0, ',', '.') . "</div>
            <div><strong>Total payment after discount:</strong> Rp " . number_format($finalPayment, 0, ',', '.') . "</div>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANDARIA HOTEL - Price Check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: white;
        }

        .header {
            background-color: #000080;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .nav-link {
            color: white !important;
        }

        .content {
            flex: 1;
            padding: 30px;
        }

        footer {
            background-color: #000080;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .success {
            color: green;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>GANDARIA HOTEL - Price Check</h1>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="price-check.php">Price Check</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container content">
        <h2>Check Room Prices</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="floor" class="form-label">Floor:</label>
                <input type="text" id="floor" name="floor" class="form-control" placeholder="Enter floor number" required>
            </div>
            <div class="mb-3">
                <label for="roomType" class="form-label">Room Type:</label>
                <select id="roomType" name="roomType" class="form-select" required>
                    <option value="">Select room type</option>
                    <option value="single">Single Room</option>
                    <option value="double">Double Room</option>
                    <option value="suite">Suite</option>
                    <option value="deluxe">Deluxe Suite</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="days" class="form-label">Number of Days:</label>
                <input type="number" id="days" name="days" class="form-control" placeholder="Enter number of days" required min="1">
            </div>
            <div class="mb-3">
                <label for="discount" class="form-label">Discount:</label>
                <select id="discount" name="discount" class="form-select" required>
                    <option value="None">None</option>
                    <option value="Member">Member</option>
                    <option value="Birthday">Birthday</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Check Price</button>
        </form>

        <!-- Display error or success messages -->
        <?php if ($errorMessage): ?>
            <div class="error mt-3"><?= $errorMessage; ?></div>
        <?php elseif ($successMessage): ?>
            <div class="success mt-3"><?= $successMessage; ?></div>
        <?php endif; ?>
    </div>

    <footer>
        &copy; 2024 Gandaria Hotel
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>