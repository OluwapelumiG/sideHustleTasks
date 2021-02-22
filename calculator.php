<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        .container {
            width: 50%;
            padding: 0 25%;            
        }
        .display {
            background-color: grey;
            border-radius: 25px;
            margin:10px;
        }
        .input {
            padding: 10px;
        }
        .output {
            padding: 10px 450px;

        }
        input {
            
            margin: 5px;
            width: 180px;
            height: 90px;
        }
        .buttons {
            padding: 0px 40px;
        }
        button {
            margin: 3px;
            width: 85px;
            height: 90px;
            background-color: grey;
            text-color: white;
        }
    </style>
</head>
<body>
    <?php
        // get value on display
        isset($_POST['current']) ? $val = $_POST['current'] : $val = null;

        // get value being typed
        if (isset($_POST['num'])) {
            $val .= $_POST['num'];
            if (($_POST['previous']) != 0) {
                $previous = $_POST['previous'];
                $opr = $_POST['operation'];

                // Perform calculation again after every number is pressed
                switch ($opr) {
                    case '+':
                        $result = $previous + $val;
                        $operation = $opr;
                        break;
                    case '-':
                        $result = $previous - $val;
                        $operation = $opr;
                        break;
                    case 'X':
                        $result = $previous * $val;
                        $operation = $opr;
                        break;
                    case '/':
                        $result = $previous / $val;
                        $operation = $opr;
                        break;
                    default:
                        $result = $previous;
                        break;
                    
                }
            }
        } 

        // Perform equal-to operation
        if (isset($_POST['equals'])) {
            $result = $_POST['equals'];
            $val = $result;
            
        }

        // Clear all inputs
        if (isset($_POST['clear'])) {
            $result = 0;
            $operation = null;
            $val = 0;
        }

        // get operator for calculation
        if (isset($_POST['operator'])) {
            $val = 0;
            $operation = $_POST['operator'];
            $result = $_POST['result'];
            $result != null ? $previous = $result : $previous = $_POST['current'];
        }

        // Initialise all undefined variables
        isset($result) ? $result = $result : $result = null;
        !isset($operation) ? $operation = null : $operation = $operation;
        $val == null? $display = 0 : $display = $val;
        isset($previous) ? $prev = $previous : $prev = 0;
    ?>
    <div class="container">

        <div class="display">
            <h3 class="input"><?php echo $display; ?></h3>
            <h3 class="output"><?php echo $result; ?></h3>
        </div>
        
        <div class="buttons">
            <form action="calc.php" method="POST" >
                <input id="current" type="hidden" name="current" value="<?php echo $display; ?>" >
                <input id="previous" type="hidden" name="previous" value="<?php echo $prev; ?>">
                <input id="operation" type="hidden" name="operation" value="<?php echo $operation; ?>">
                <input id="result" type="hidden" name="result" value="<?php echo $result; ?>">
                <input name="num" type="submit" value="1">
                <input name="num" type="submit" value="2">
                <input name="num" type="submit" value="3">
                <input name="num" type="submit" value="4">
                <input name="num" type="submit" value="5">
                <input name="num" type="submit" value="6">
                <input name="num" type="submit" value="7">
                <input name="num" type="submit" value="8">
                <input name="num" type="submit" value="9">
                <input name="operator" type="submit" value="+">
                <input name="num" type="submit" value="0">
                <input name="operator" type="submit" value="-">
                <input name="operator" type="submit" value="X">
                <input name="operator" type="submit" value="/">
                <button name="equals" type="submit" value="<?php echo $result; ?>"> = </button>
                <button name="clear" type="submit" value="<?php echo $result; ?>"> C </button>
            </form>
        </div>
    </div>
</body>
</html>