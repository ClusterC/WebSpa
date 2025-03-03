<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        strong {
            display: inline-block;
            width: 120px; /* Adjust width as needed */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Details</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<ul>";

            // Display Service
            if (isset($_POST["service"])) {
                echo "<li><strong>Service:</strong> " . htmlspecialchars($_POST["service"]) . "</li>";
            }

            // Display Staff (if selected or random)
            if (isset($_POST["staff"]) && $_POST["staff"] != "Null") {
                echo "<li><strong>Staff:</strong> " . htmlspecialchars($_POST["staff"]) . "</li>";
            } else {
                $staff = array("Olivia Johnson", "Ethan Williams", "Suchart", "Sophia Garcia");
                $randomStaffIndex = array_rand($staff); // Get a random index
                $randomStaffName = $staff[$randomStaffIndex]; // Get the name at the random index
                echo "<li><strong>Staff:</strong> " . $randomStaffName . " (Randomly Assigned)</li>";
            }

            // Display Date
            if (isset($_POST["date"])) {
                echo "<li><strong>Date:</strong> " . htmlspecialchars($_POST["date"]) . "</li>";
            }

            // Display Time
            if (isset($_POST["time"])) {
                echo "<li><strong>Time:</strong> " . htmlspecialchars($_POST["time"]) . "</li>";
            }

            // Display Name
            if (isset($_POST["name"])) {
                echo "<li><strong>Name:</strong> " . htmlspecialchars($_POST["name"]) . "</li>";
            }

            // Display Email
            if (isset($_POST["email"])) {
                echo "<li><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</li>";
            }

            // Display Phone
            if (isset($_POST["phone"])) {
                echo "<li><strong>Phone:</strong> " . htmlspecialchars($_POST["phone"]) . "</li>";
            }

            // Display Message (if provided)
            if (isset($_POST["message"]) && !empty($_POST["message"])) {
                echo "<li><strong>Message:</strong> " . htmlspecialchars($_POST["message"]) . "</li>";
            } else {
                echo "<li><strong>Message:</strong> -</li>";
            }

            echo "</ul>";
        } else {
            echo "<p>No booking data received.</p>";
        }
        ?>
    </div>
</body>
</html>
