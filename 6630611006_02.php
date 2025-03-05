<!-- ปฏิภาณ ฝอยทอง 6630611006 -->
<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
    <style>
        body {
            font-family: sans-serif;
            /* Add background image styles here */
            background-image: url('Spa_Background.jpg'); /* Path to your image */
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Prevent image repetition */
            background-attachment: fixed; /* Keep image fixed while scrolling */ /* Optional: for parallax effect, remove this */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            width: 20%;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background for better text readability */
            padding: 20px; /* Add padding to the container */
            border-radius: 10px; /* Add rounded corners to the container */
            display: flex; /* Make container a flex container */
            flex-direction: column; /* Align items vertically */
            align-items: center; /* Center items horizontally */
            min-height: 300px; /* Minimum height to ensure centering works */

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
            text-align: left; /* Align strong text to the left */
            margin-right: 5px; /* Add some spacing */
        }
        .back-button {
            display: inline-block;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
        }
        .booking-id {
            font-weight: bold;
            color: #007bff; /* Example color */
            margin-bottom: 20px;
            display: block;
        }
        .rickroll-image {
            margin-top: 30px;
            width: 200px; /* Adjust size as needed */
            height: auto;
            display: block;
            margin: 20px auto; /* Center image horizontally */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Details</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Display the Rickroll image
            echo "<img src='Rickrolling_QR_code.png' alt='Rickroll QR Code' class='rickroll-image'>";
            function randomNumber($base) {
                return rand(1, pow(10, $base)-1);
            }
            // Generate Booking ID
            $bookingDate = date("Ymd"); // Get current date in YYYYMMDD format
            $randomNumber = randomNumber(3); // Generate a random 3-digit number
            $bookingID = "#SPA" . $bookingDate . "-" . sprintf("%03d", $randomNumber); // Format the booking ID
            echo "<span class='booking-id'>Booking ID: " . $bookingID . "</span>";
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

        //add back button
        echo "<a href='6630611006_01.php' class='back-button'>Back to Booking</a>";
        ?>
    </div>
</body>
</html>
