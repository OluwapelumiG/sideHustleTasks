<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2 - Side Hustle Tasks</title>
</head>
<body>
<h3>Generate Recharge pins</h3>

<?php
    function generatePin ($length) {
        $min = str_repeat(0, $length - 1) . 1;
        $max = str_repeat(9, $length);
        return rand($min, $max);
    }
?>

<table>
    <thead>
        <th>Id</th>
        <th colspan="5">Pin</th>
    </thead>
    <tbody>
        <?php for ($i=0; $i < 250; $i++) { ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo generatePin(12); ?></td>
            </tr>
        <?php } ?>
    </tbody>
    <thead>
        <th>Id</th>
        <th colspan="5">Pin</th>
    </thead>
</table>
    
</body>
</html>