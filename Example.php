<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>

    <form>
        
        <input type="text" name= "num1" placeholder="Number1">
        <input type="text" name= "num2" placeholder="Number2">

        <select name="operator">
            <option >None</option>
            <option >Addition</option>
            <option >Substration</option>
            <option >Multiplication</option>
            <option >Division</option>

        </select>
        <br>
        <br>
        <button type ="submit" name="submit" value="submit">Calculate</button>

    </form>

    <p> The Answer is :</p>

     <!--PHP CODE-->   
    <?php
        if(isset($_GET['submit'])){
          $result1 =$_GET['num1'];
          $result2 = $_GET['num2'];
          $operator= $_GET['operator'];
        }

            switch($operator){
                case "None":
                    echo "Error";
                break;
                case"Addition":
                    echo $result1 + $result2;
                break;
                case "Substration":
                    echo $result1 - $result2;
                break;
                case "Multiplication":
                    echo $result1 * $result2;
                break;
                case "Division":
                    echo $result1 / $result2;
                break;
            }
    ?>
</body>
</html>