<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        textarea {
            margin-top: 20px;
            width: 100%;
            height: 200px;
        }

        .output-label {
            display: block;
            margin-top: 20px;
            font-weight: bold;
        }

        .output-text {
            width: 100%;
            height: 500px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }
    </style>
</head>
<body>
    <h1>Contact Us</h1>

    <?php
    if(isset($_POST['submit'])) {
        // Collect form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Generate article
        $article = "Dear readers,\n\nWe received a message from $name ($email) and we wanted to share it with you. The message is as follows:\n\n$message\n\nWe appreciate all of our readers and value your feedback. Please don't hesitate to reach out to us with any questions or comments you may have.\n\nBest regards,\nYour Company Name";

        // Output article to text box
        echo '<label class="output-label" for="output">Here is an article based on your message:</label>';
        echo '<textarea class="output-text" name="output" id="output" readonly>' . $article . '</textarea>';
    }
    ?>

    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html
