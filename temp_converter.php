<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temp_converter</title>
    <style>
        *{
            padding: 0px 0px;
        margin: 0px 0px;
        }
    .container
    {
        height: 100vh;
        width: auto;
        background-color: lightpink;
        
    }
    .box
    {
        border: 2px solid black;
        height: 300px;
        width: 400px;
        padding: 40px 40px;
        margin: 0px 500px;
        display: flex;
        flex-direction: column;
        background-color: burlywood;
        border-radius: 10px;
            box-shadow: 10px 10px 10px;
    }
    h1{
        color: rgb(10, 10, 10);
        margin: 0px 40px;
        

    }   
     #input1
    {
        display: flex;
        margin: 30px 70px;
        background-color: rgb(158, 158, 196);
            /* margin:10px 30px; */
            border-radius: 10px;
            box-shadow: 10px 10px 10px;
            font-size: 20px;
        
    }
    #select
    {
        background-color: rgb(238, 80, 17);
        font-size: 1.8rem;
        border: 3px solid black;
        /* height: 20px;
        width: 50px; */
        margin: -10px 150px;
        border-radius: 10px;
            box-shadow: 10px 10px 10px;
    }
    .button
    {
        font-size: 24px;
            box-shadow: 10px 10px 10px;
            border-radius: 20px;
            background-color: rgb(214, 68, 49);
            margin: 90px 150px;
    }
    
    </style>
</head>
<body>
    <div class="container">
    <div class="box">
    <h1>TEMP CONVERTER</h1>
    <form method="POST">
    <input  type="text" id="input1" name="number1" placeholder="Enter value"> 
    <select name="operation" id="select" >
    
    <option value="CEL" >cel</option>
    <option   value="FAR" >far</option>
    <input type="submit" name="submit" value="submit" class="button">
    </select>
    
    <!-- <input type="text" id="input2" name="number2" placeholder="Enter second number">  -->
    
    </form>
    <div class="output">
    <p>
    <?php
    if(isset($_POST['submit']))
    {
        $num1 = $_POST['number1'];
        $num2=0.55;
        $operation = $_POST['operation'];
        switch($operation)
        {
            case "CEL": $cel = ($num1-32)*$num2;
            echo $cel;
            break;
            case "FAR": $far = ($num1*1.8)+32;
            echo $far;
            break;
            default: echo "sorry";
        }
    }








    ?>
    
    
    
    
    </p>
    </div>
    </div>
    </div>
</body>
</html>