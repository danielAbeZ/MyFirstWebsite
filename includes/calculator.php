<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <section class="wrapper-main">
        <!-- With '$_SERVER["PHP_SELF"]', we're resending the data to the same page, making it usable
        We surround it with htmlspecialchars to sanitize the data and avoid possible tampering from 
        the user -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="firstNumber">First Number</label>
            <br>
            <input type="number" id="firstNumber" name = "fNum" placeholder="Write a number">
            <br>
            <br>
            <select name="oprtr">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <br>
            <br>
            <label for="secondNumber">Second Number</label>
            <br>
            <input type="number" id="secondNumber" name = "sNum" placeholder="Write another number">
            <button>Calculate result</button>
        </form>
    </section>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            /*To sanitize the data received from a request method, a way to do it is by using the following function.
            The first parameter depends on the type of the request we received, which is a POST in this case. 
            The second parameter references the 'name' attribute from a field in the form which contains the data we
            wish to sanitize. Lastly, the last parameter specifies the data type we want to sanitize it to, which is
            float in this particular case
            We don't use the same method for a String type of data, as the FILTER_SANITIZE_STRING option was 
            deprecated in PHP 8.1. Instead, we'll use 'htmlspecialchars()' for this type of data, as we did previously
            */
            $firstNumber = filter_input(INPUT_POST, "fNum", FILTER_SANITIZE_NUMBER_FLOAT);
            $secondNumber = filter_input(INPUT_POST, "sNum", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["oprtr"]);

            $errors = false;
            if(empty($firstNumber) || empty($secondNumber) || empty($operator)){
                echo '<p>Please, fill in all the fields</p>';
                $errors = true;
            }

            if(!$errors && (!is_numeric($firstNumber) || !is_numeric($secondNumber))){
                echo '<p>Please, make sure all the files contain only numbers</p>';
                $errors = true;
            }
            if(!$errors){
                $value = 0;
                switch($operator){
                    case "add":
                        $value = $firstNumber + $secondNumber;
                        break;
                    case "subtract":
                        $value = $firstNumber - $secondNumber;
                        break;
                    case "multiply":
                        $value = $firstNumber * $secondNumber;
                        break;
                    case "divide":
                        $value = $firstNumber / $secondNumber;
                        break;
                    default:
                        echo '<p>Something went wrong, please try again</p>';
                        break;
                }
                echo '<p>The result of your operation was: ' . $value . "</p>";
            }
        }
    ?>
</body>
</html>