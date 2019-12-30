
<html>
    <head>
        <meta charset="UTF-8">
        <title>formdata</title>
        <link rel="stylesheet" type= "text/css" href="styles.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
        <br>
        <br>
        <br>
        <!--PHP file to display cups when user enter numbers-->
        <h2> Thank you for your order..<h2>
                <br>
                <br>
                <br>
                <!--variables to use the data from the form in php-->
                <?php
                $size = $_POST["size"];
                $numberofcoffee = $_POST["coffee"];
                $sugar = $_POST["sugar"];
                $cream = $_POST["cream"];
                $costforsugar = 0.5;
                $costforcream = 0.5;
                $tax = 0.5;
                $slang = $_POST["slang"];

                for ($i = 1; $i <= $numberofcoffee; $i++) {
                    //loop for the number of cups entered by the user
                    // if else block for coffee sizes
                    if ($size == "Small") {

                        $cost = 1.5;
                        //cost  is the cost of the coffee 
                        echo '<img src="images/cup.jpg" height="100">';
                    } elseif ($size == "Medium") {
                        $cost = 2.0;

                        echo '<img src="images/cup.jpg" height="180">';
                    } elseif ($size == "Large") {

                        $cost = 2.5;
                        echo '<img src="images/cup.jpg" height="230">';
                    } elseif ($size == "ExtraLarge") {
                        $cost = 3.0;

                        echo '<img src="images/cup.jpg" height="300">';
                    }
                    //if else block for  number of sugars                 
                    if ($sugar == "1") {


                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/plus.jpg" height="80">';
                    } elseif ($sugar == "2") {


                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/plus.jpg" height="80">';
                    } elseif ($sugar == "3") {


                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/plus.jpg" height="80">';
                    }
                    //if else block for cream

                    if ($cream == "1") {

                        echo '<img src="images/cream.jpg" height="80">';
                    } elseif ($cream == "2") {

                        echo '<img src="images/cream.jpg" height="80">';
                        echo '<img src="images/cream.jpg" height="80">';
                    } elseif ($cream == "3") {

                        echo '<img src="images/cream.jpg" height="80">';
                        echo '<img src="images/cream.jpg" height="80">';
                        echo '<img src="images/cream.jpg" height="80">';
                    }

                    //if else block for slang version of the form

                    if ($slang == "Regular") {
                        $slangsugar = 1;
                        $slangcream = 1;

                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/cream.jpg" height="80">';
                    } elseif ($slang == "DoubleDouble") {

                        $slangsugar = 2;
                        $slangcream = 2;

                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/cream.jpg" height="80">';
                        echo '<img src="images/cream.jpg" height="80">';
                    } elseif ($slang == "TripleTriple") {

                        $slangsugar = 3;
                        $slangcream = 3;

                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/cream.jpg" height="80">';
                        echo '<img src="images/cream.jpg" height="80">';
                        echo '<img src="images/cream.jpg" height="80">';
                    } elseif ($slang == "Black") {
                        
                    } elseif ($slang == "Blackonesugar") {
                        $slangsugar = 1;

                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                    } elseif ($slang == "Blacktwosugar") {

                        $slangsugar = 2;
                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                    } elseif ($slang == "Blackthreesugar") {

                        $slangsugar = 3;
                        echo '<img src="images/plus.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                        echo '<img src="images/sugar.jpg" height="80">';
                    }
                    echo "<br>";
                    echo "<br>";
                }
                ?>  

                <?php
                //formula to calculate the total cost of the coffee!
                if ($slangsugar == 0 && $slangcream == 0) {
                    //cost calculation for slang version

                    $costforcoffee = $cost + ($sugar * $costforsugar) + ($cream * $costforcream) + $tax;
                    $totalCost = $costforcoffee * $numberofcoffee;
                    echo "Total Cost: $costforcoffee x $numberofcoffee + Tax = $totalCost";
                } else {
                    //cost calculation for ist form

                    $costforcoffee = $cost + ($slangsugar * $costforsugar) + ($slangcream * $costforcream) + $tax;
                    $totalCost = $costforcoffee * $numberofcoffee;
                    echo "Total Cost: $costforcoffee x $numberofcoffee +Tax = $totalCost";
                }
                ?>

                </body>

                </html>
