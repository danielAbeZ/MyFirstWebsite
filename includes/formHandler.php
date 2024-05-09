<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling Example</title>
</head>
<body>
    <?php 
        //We only allow the code to be run if this file has been properly accessed as it's intended to
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            /*htmlspecialchars is a function which turns any data put into it to HTML entities.
            It's done to avoid code injections in the text fields or possible hacking by adding
            non-desired elements to the website.*/
            $firstName = htmlspecialchars($_POST["fName"]);
            $secondName = htmlspecialchars($_POST["sName"]);
            $email = htmlspecialchars($_POST["mail"]);
            $phoneNumber = htmlspecialchars($_POST["pNum"]);
            $personalDescription = htmlspecialchars($_POST["pDesc"]);
            $vehicleType = htmlspecialchars($_POST["vType"]);

            //With 'exit()' we keep the rest of the code from running
            if(empty($firstName) || empty($secondName) || empty($email) || 
            empty($phoneNumber) || empty($personalDescription)){
                header("Location: ../index.php");
                exit();
            }

            echo "The data introduced by the user is the following:";
            echo "<br>";
            echo $firstName;
            echo "<br>";
            echo $secondName;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $phoneNumber;
            echo "<br>";
            echo $personalDescription;
            echo "<br>";
            echo $vehicleType;
        }
        else{
            //With this, we redirect the browser to the designated HTML or PHP file
            header("Location: ../index.php");
        }
    ?>
</body>
</html>