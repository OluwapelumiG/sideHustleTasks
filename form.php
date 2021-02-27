<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <style>
        .container {
            width: 50%;
            padding: 0 25%;    
        }
        input, select {
            /* display: block; */
            width: 70%;
            margin: 10px 20px;
            height: 35px;
            /* padding: 10px; */
        }
        label {
            margin: 10px 5px;
            width: 30%;
        }
        .form-group {
            background: grey;
            border-radius: 25px;
            padding: 5px;
            margin: 10px;
            display: block;
        }
        .center {
            padding: 0px 50%;
        }
        
    </style>
</head>
<body>
    <div class="container">
    <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $theme = ucfirst($_POST['theme']);
            ?>
        <div style="background-color: <?php echo $theme; ?>; opacity: 60%; color: white;">
            <h2>Name: <?php echo $name; ?></h2>
             <h2>Telephone: <?php echo $tel; ?></h2>
            <h3>E-mail: <?php echo $email; ?></h3>
            <h3>Theme: <?php echo $theme; ?></h3>
        </div>
        <div class="center">
            <a href="form.php">Reset</a>
        </div>

     <?php   } else {
     ?>
    
        <form action="form.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label for="tel">Telephone:</label>
                <input type="text" name="tel" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="theme">Theme:</label>
                <select name="theme" required>
                    <option value="">Select...</option>
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                </select>
            </div>
            <div class="center">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    <?php } ?>
    </div>
    
</body>
</html>
