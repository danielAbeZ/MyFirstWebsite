<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Website</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>This is an h1 title example</h1>
    <p>This is a p paragraph example</p>
    <section class="wrapper-main">
        <form action="includes/formHandler.php" method="post">
            <!-- On labels, the 'for' attribute refers to the id of the element they will be attached to -->
            <label for="firstName">First Name</label>
            <br>
            <input type="text" id="firstName" name="fName" placeholder="Put your name">
            <br><br>
            <label for="secondName">Second Name</label>
            <br>
            <input type="text" id="secondName" name="sName" placeholder="Put your second name">
            <br><br>
            <label for="pwd">Password</label>
            <br>
            <input type="password" id="pwd" name="pwd" placeholder="Put your password">
            <br><br>
            <label for="email">Email</label>
            <br>
            <input type="email" id="mail" name="mail" placeholder="Put your e-mail">
            <br><br>
            <label for="phoneNumber">Phone Number</label>
            <br>
            <input type="text" id="phoneNumber" name="pNum" placeholder="Put your phone number">
            <br><br>
            <label for="personalDescription">Your Description</label>
            <br>
            <textarea id="personalDescription" name="pDesc" placeholder="Write something about yourself"></textarea>
            <br><br>
            <!-- They all share the 'name' attribute to allow a single selection, else there would be multiple selection -->
            <!-- In this case, the 'value' attribute is used to know which one is selected when the form is sent -->
            <label>Eyecolor</label>
            <br>
            <input type="radio" id="eyeColorBlue" name="eC" value="blue">
            <label for="eyeColorBlue">Blue</label>
            <input type="radio" id="eyeColorGreen" name="eC" value="green">
            <label for="eyeColorGreen">Green</label>
            <input type="radio" id="eyeColorBrown" name="eC" value="brown" checked>
            <label for="eyeColorBrown">Brown</label>
            <br><br>
            <label>Any pets?</label>
            <br>
            <label for="petDog">Dog</label>
            <input type="checkbox" id="petDog" name="petDog" value="dog">
            <label for="petCat">Cat</label>
            <input type="checkbox" id="petCat" name="petCat" value="cat">
            <label for="petNone">Tiger</label>
            <input type="checkbox" id="petTiger" name="petTiger" value="tiger">
            <br><br>
            <label>Vehicle you own?</label>
            <br>
            <select id="vehicleType" name="vType">
                <option value="none">None</option>
                <option value="car">Car</option>
                <option value="bike">Motorbike</option>
                <option value="plane">Plane</option>
            </select>
            <br><br><br>
            <button type="submit" value="submitButton">Send your data</button>
        </form>    
    </section>
    <?php 
        //Scalar-type variables
        $string = "Daniel";
        $int = 12345;
        $float = 1.2345;
        $bool = true;

        //Array-type variables
        $array = array("Daniel", "John");
        $anotherArray = ["Daniel", "John"]; //PHP 5.4 forward only, not compatible with older versions
    ?>
    <p>This is a testing paragraph with a variable value: <?php echo $string; ?></p>
</body>
</html>