<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to My World</title>
<style>
    body {
        font-family: 'Trebuchet MS', sans-serif;
        text-align: center;
        background-color: #000;
        color: #fff;
        margin: 0;
        padding: 0;
    }
    h1 {
        font-size: 48px;
        margin-top: 50px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
    }
    .horror-dragon {
        max-width: 100%;
        height: auto;
        margin-top: 20px;
        filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.8));
    }
    form {
        margin-top: 20px;
    }
    input[type="text"] {
        padding: 8px;
        margin: 10px;
        width: 200px;
        border-radius: 5px;
        border: 1px solid #333;
        background-color: rgba(255,255,255,0.1);
        color: #fff;
    }
    input[type="submit"] {
        padding: 10px 20px;
        background-color: #0f0;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.5s;
    }
    input[type="submit"]:hover {
        background-color: #000;
    }
</style>
</head>
<body>
    <h1>Welcome to My World</h1>
    <img src="horror-dragon-image.jpg" alt="Horror Dragon" class="horror-dragon">
    <form method="post">
        <input type="text" name="firstName" placeholder="First Name">
        <br>
        <input type="text" name="lastName" placeholder="Last Name">
        <br>
        <input type="submit" name="submit" value="Submit" id="submitButton">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $timestamp = date('Y-m-d H:i:s');
        $data = "First Name: $firstName, Last Name: $lastName, Submitted at: $timestamp" . PHP_EOL;
        $file = 'userinfo.txt';
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

        echo '<script>
                var button = document.getElementById("submitButton");
                button.style.backgroundColor = "#000";
                button.style.color = "#fff";
                button.style.fontSize = "20px";
                document.body.style.backgroundColor = "#000";
                setTimeout(function() {
                    button.style.backgroundColor = "#0f0";
                    button.style.fontSize = "";
                    document.body.style.backgroundColor = "#000";
                }, 1000);
              </script>';
        echo '<p>Thank you for submitting the form!</p>';
    }
    ?>
</body>
</html>
