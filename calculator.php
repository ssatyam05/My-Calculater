<!DOCTYPE html>
<html>
    <head>
        <title>Calculator using php</title>
        <meta charset="utf-8">
        <meta name="viewport" width="device-width, initial-scale=1.0">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .container {
                width: 100vw;
                height: 100vh;
                background-color: aqua;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .mini-container {
                height: 350px;
                width: 700px;
                background-color: #232316;
                border-radius: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .column1 {
                width: 50%;
                margin: 40px;
            }
            .text-column1::before {
                content: '';
                position: absolute;
                top: 0%;
                left: 0;
                width: 5px;
                height: 100%;
                background-color: deepskyblue;;
                transform-origin: bottom left;
            }
            .text-column1 {
                position: relative;
                color: aqua;
                font-family: sans-serif;
                font-size: 2em;
                font-weight: bold;
                padding: 5px;
                animation: sat 1s ease-in-out infinite;
            }
            @keyframes sat {
                0% {font-size: 2em;}
                100% {font-size: 2.2em;}
            }           
            .column2 {
                width: 50%;
                margin: 20px;                
            }
            form {
                display: grid;
                justify-content: center;
                justify-items: center;
            } 
            .num {
                width: 80%;
                height: 35px;
                border: none;
                background: transparent;
                border-bottom: 2px solid white;
                text-align-last: center;
                color: #fff;
                margin: 10px;
                font-weight: bold;
            }
            .s-box {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            } 
            select {
                width: 80%;
                height: 35px;
                border: none;
                border-radius: 10px;
                font-weight: bold;
            }         

            .btn {
                width: 80%;
                height: 35px;
                background-color: aqua;
                color: #fff;
                font-weight: bold;
                font-size: 1.2em;
                border: none;
                margin-top: 15px;
                border-radius: 10px;
            }
            .btn:hover {
                background-color: deepskyblue;
            }
            .dnmc {
                margin: 30px;
            }
            .php1 {
                color: #000005;
                font-weight: bold;
                font-size: 1.2em;
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="mini-container">
                <div class="column1">
                    <p class="text-column1">PHP CALCULATOR</p>
                </div>
                <div class="column2">
                    <form method="POST">
                        <input class="num" type="text" name="num1" placeholder="ENTER NUMBER">
                        <input class="num" type="text" name="num2" placeholder="ENTER NUMBER"><br>
                        <div class="s-box">
                            <select name="opration">
                                <option class="opt" value="add">ADD</option>
                                <option class="opt" value="sub">SUBTRACTION</option>
                                <option class="opt" value="multi">MULTIPLICATION</option>
                                <option class="opt" value="devide">DEVISION</option>
                            </select>
                        </div>
                        <input class="btn" type="submit" name="submit" value="SUBMIT">
                    </form>
                </div>
            </div>
            <div class="dnmc">
                <p class="php1">
                    <?php
                    
                        if(isset($_POST['submit'])){
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            //echo "{$num1} {$num2}";
                            $opration = $_POST['opration'];
                            
                            switch ($opration){
                                case "add": $sum = $num1 +  $num2;
                                    echo "The addition of $num1 and $num2 is : {$sum}";
                                    break;
                                    case "sub": $sub = $num1 -  $num2;
                                    echo "The subtraction of $num1 and $num2 is : {$sub}";
                                    break;
                                    case "multi": $mult = $num1 *  $num2;
                                    echo "The multiplication of $num1 and $num2 is : {$mult}";
                                    break;
                                    case "devide": $div = $num1 /  $num2;
                                    echo "The devision of $num1 to $num2 is : {$div}";
                                    }
                            
                        }
                    
                    ?>
                </p>
            </div>
        </div>
    </body>
</html>