<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
       <div> <input type="text" name="num1" placeholder="Enter first number" required></div><br>
       
       <div><select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></div><br>

       <div> <input type="text" name="num2" placeholder="Enter second number" required></div><br>
       <div><button type="submit" name="submit">Calculate</button></div><br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Cannot divide by zero!";
                }
                break;
            default:
                echo "Invalid operator";
        }
       echo "Result: $result";
    }
    ?>
</body>
</html>