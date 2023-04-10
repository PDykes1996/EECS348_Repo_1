<!DOCTYPE html>

<html>
<head>
<style>
    body {
        background-color: black;
    }

    h1 {
        color: limegreen;
        text-align: center;
        font-family: OCRATTRegular;
    }

    p {
        color: limegreen;
        text-align: center;
        font-family: OCRATTRegular;
        font-size: 20px;
    }

    a {
        color: limegreen;
        text-align: right;
        font-family: OCRATTRegular;
        font-size: 14px;
    }
    form{
        background-color: black;
        text-align: center;
        font-family: OCRATTRegular;
        border: solid;
        border-color: limegreen;
        border-width: thick;
        color: limegreen;
    }
    input[type="text"]{
        background-color: black;
        border: solid;
        border-color: green;
        border-width: thin;
        color:limegreen;
    }
    input[type="submit"]{
        background-color: black;
        border:dashed;
        border-color:green;
        color:green;
    }
</style>
</head>
<body>
    <h1> Multplication Tables</h1>
    <form method="POST">
        Number for Multiplication Table: 
        <input type="text" name="userNum" />
        <input type="submit" value="Get Table" />
    </form>
    
<h1><?php
if($_POST) {
    $inputNum = $_POST["userNum"];
    echo "<table border=\"1\">";

        for ($i =0; $i <= $inputNum; $i++){
            echo'<tr>';

            for ($j = 0; $j <= $inputNum; $j++)
		if($j == 0)
		{
			echo '<td>'.$i.'</td>';
		}
	    elseif($i == 0)
		{
			echo '<td>'.$j.'</td>';
		}
	    else
		{
                	echo '<td>' .$i*$j.'</td>';
		}

           echo '</tr>';

        }

  echo"</table>";
}


?></h1>
</body>
</html>
