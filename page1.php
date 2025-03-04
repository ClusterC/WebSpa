<!-- ปฏิภาณ ฝอยทอง 6630611006 -->
<!DOCTYPE html>
<html>
<head>
    <title>Booking Page</title>
    <style>
        body {
            font-family: sans-serif;
            /* Add background image styles here */
            background-image: url('Spa_Background.jpg'); /* Path to your image */
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Prevent image repetition */
            background-attachment: fixed; /* Keep image fixed while scrolling */ /* Optional: for parallax effect, remove this */
            display: flex; /* Use flexbox to center the container */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            min-height: 100vh; /* Ensure the body takes up the full viewport height */
            margin: 0; /* Remove default body margins */

        }
        .container {
            width: 50%;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background for better text readability */
            padding: 20px; /* Add padding to the container */
            border-radius: 10px; /* Add rounded corners to the container */
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2) /* Add a subtle shadow for depth*/

        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        /* Add a style for required fields (optional) */
        .required-field::after {
            content: " *";
            color: red;
        }

        /* New CSS for Date and Time on the Same Line */
        .date-time-group {
            display: flex;
            gap: 10px; /* Adjust the spacing between date and time */
        }

        .date-time-group > div {
            flex: 0 auto; /* Each field takes up equal space */
        }
        /* Add this to label to change to inline */
        .date-time-group label{
            display: inline-block;
            margin-bottom: 0px;
            margin-right: 5px;
        }
        .date-time-group input[type="date"],
        .date-time-group input[type="time"]{
            width: auto;
        }
        textarea {
            /* ... (Existing styles) ... */
            resize: vertical; /* Allow only vertical resizing */
            min-height: 80px; /* Set a minimum height */
            max-height: 160px; /* Set a maximum height to avoid overly large textareas */
        }

        textarea:invalid { /* Style when the maxlength is exceeded */
            border-color: red;
            box-shadow: 0 0 5px red;
        }

        textarea[maxlength]:focus:invalid{
            outline: none; /* Removes the focus ring on invalid input */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Form</h1>
        <form action="page2.php" method="post">
            <div>
                <label for="service" class="required-field">Select Service:</label>
                <select id="service" name="service" required> 
                    <option value="">Please Select</option>
                    <option value="Thai Massage">Thai Massage</option>
                    <option value="Aroma Massage">Aroma Massage</option>
                    <option value="Body Scrub">Body Scrub</option>
                </select>
            </div>
            <div>
                <label for="staff" >Select Staff:</label>
                <select id="staff" name="staff">
                    <option value="Null">No Preference</option>
                    <?php
                    $staff = array("Olivia Johnson", "Ethan Williams", "Suchart", "Sophia Garcia");
                    foreach ($staff as $name) {
                        echo "<option value='$name'>$name</option>";
                    }
                    ?>
                </select>
            </div>
             <!-- Add class date-time-group to div-->
            <div class="date-time-group">
                <div>
                    <label for="date" class="required-field">Select Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div>
                    <label for="time" class="required-field">Select Time:</label>
                    <input type="time" id="time" name="time" required>
                </div>
            </div>
            <div>
                <label for="name" class="required-field">Name:</label>
                <input type="text" id="name" name="name"
                    placeholder="Enter your name" required>
            </div>
            <div>
                <label for="email" class="required-field">Email:</label>
                <input type="email" id="email" name="email"
                    placeholder="Enter your email" required>
            </div>
            <div>
                <label for="phone" class="required-field">Phone:</label>
                <input type="tel" id="phone" name="phone"
                    placeholder="Enter your phone number" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message"
                          placeholder="Enter your message" maxlength="255"></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
