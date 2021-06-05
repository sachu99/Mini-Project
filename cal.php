<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>js calculator</title>
    <style>
        *
        {
            margin: 0px;
        }
        @keyframes headers {
        from {background-color: red;}
        to {background-color: yellow;}
        }
        header
        {
            background-color: rgb(88, 83, 84);
        }
        #headers
        {   

            animation-name: headers;
            animation-duration: 1s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
            font-size: 3rem;
            font-weight: bold;
            color: tomato;
            display: flex; 
            justify-content: center;   
            /* border: 5px solid yellow;     */
            background-color: aquamarine;  
            border-radius: 50px;
           
        }
        #main
        {
            background-color: rgb(90, 83, 90);
        }
        .container
        {
            background-color: lightblue;
            display: flex;
            height: 100vh;
            width: 100%;
            margin: 0px;
            border-radius: 50px;

        }
        h1{
            color: rgb(4, 0, 235);
            margin-left: 35%;
            font-size: 3rem;
        }
        .box1
        {
            /* display: flex; */
            height: 500px;
            width: 300px;
            /* border: 2px solid red; */
            padding: 16px 50px;
            left: 300px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 50px 550px;
            border-radius: 20px;
            background-color: slategray;
            box-shadow: 10px 10px 20px;

        }
        #input1
        {
            /* color: lightcoral; */
            background-color: rgb(185, 185, 196);
            margin:40px 30px;
            border-radius: 10px;
            box-shadow: 10px 10px 10px;
            font-size: 20px;
        }
        #input2
        {
            /* color: rgb(184, 164, 164); */
            background-color: rgb(185, 185, 196);
            margin:10px 30px;
            border-radius: 10px;
            box-shadow: 10px 10px 10px;
            font-size: 20px;
        }
        #select
        {
            /* border: 2px solid red; */
            padding: 10px;
            margin: 10% 37%;
            border-radius: 20px;
            background-color: seagreen;
            font-size: 1.2rem;
            box-shadow: 10px 10px 10px;
        }
        .button
        {
            font-size: 24px;
            box-shadow: 10px 10px 10px;
            border-radius: 20px;
            background-color: rgb(214, 68, 49);
            margin: 70px 100px;
        }
        .output
        {
            /* border: 2px solid red; */
            height: 30px;
            width: 330px;
            margin: 0px 20px;
            color: yellow;
            font-size: 30px;
        }

    </style>
</head>
<body>
    <header>

        <div>
        <p id="headers">PHP CALCULATOR</p>
    </div >
    </header>
    <div id="main">
    <!-- <p>
        <h1>PHP CALCULATOR</h1>
    </p>  -->
    <div class="container">       
    <div class="box1">
        <form method="POST">
        <input  type="text" id="input1" name="number1" placeholder="Enter first number"> 
        <input type="text" id="input2" name="number2" placeholder="Enter second number"> 
                    
            <select name="operation" id="select">
            <option value="ADD" id="add">ADD</option>
            <option value="SUB" id="sub">SUB</option>
            <option value="MUL" id="mul">MUL</option>
            <option value="DIV" id="div">DIV</option>
            <input type="submit" name="submit" value="submit" class="button">
        </select>
        </form>
        
        <div class="output">
            <p>             
            <?php
            if(isset($_POST['submit']))
            {
                $num1 = $_POST['number1'];
                $num2 = $_POST['number2'];
                // echo "$num1  $num2";
            
            $operation = $_POST['operation'];
            switch($operation)
            {
                case "ADD": $sum = $num1 + $num2;
                echo "sum of $num1 and $num2 is  $sum";
                break;
                case "SUB": $sub = $num1 - $num2;
                echo "subtract of $num1 and $num2 is  $sub";
                break;
                case "MUL": $mul = $num1 *$num2;
                echo "multiply of $num1 and $num2 is  $mul";
                break;
                case "DIV": $div = $num1 / $num2;
                echo "divide of $num1 and $num2 is  $div";
                break;
                default: echo "sorry something went wrong";
            }
        }
            ?>
            
            </p>
    </div>
    
    </div>
</body>
</html>