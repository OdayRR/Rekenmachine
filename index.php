<html>
    
    <head>
        <meta charset="UTF-8">
        <title> PHP Calculater </title>
    </head>
    
    <body>
        <center>

        <h1>PHP Calculater</h1>

        <form action="index.php" method="post"><br>
            
            <input type="number" name="FirstN"><input type="text" name="Operator"><input type="number" name="SecondN">
                <input type="submit" name="submit" value="Submit">
        </form>

        <?php
       
        $FirstN = $_POST['FirstN'];
        $SecondN = $_POST['SecondN'];
        $Operator = $_POST['Operator'];
     
        
        echo $_POST['FirstN'];
        echo"    "."    ";
        echo $_POST['Operator'];
        echo"    "."    ";
        echo $_POST['SecondN'];
        echo"    "."    ";
        echo"=";
        
        
        $Divide         = $FirstN / $SecondN;
        $plus           = $FirstN + $SecondN;
        $min            = $FirstN - $SecondN;
        $Multiplication = $FirstN * $SecondN;
        

    //Note : I used  (if statment) to create the Operators in this Calculater
        //the other easy way you can use (switch statment ) . 
        
        
        
        if($Operator == "/")
        {
        echo $Divide;
        }

            elseif($Operator == "+")
                {
                echo $plus;
                }
                

                elseif($Operator == "-")
                    {
                    echo $min;
                    }

                        elseif($Operator == "*")
                            {
                            echo $Multiplication;
                              }

       ?>

        </center>
    </body>
</html>
