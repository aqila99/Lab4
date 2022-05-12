<html>
    <head>
        <title> Cost Calculator</title>
</head>
<body>
    <?php #script handle calculator
if(isset($source)){
    if($source =='calculator.html'){
        if((is_numeric($quantity))){
            $total = ($quantity *$price)*($taxrate +1);
            $total = number_format ($tota,2);
            echo "You are purchasing <b>" .$POST["quantity"] . 
            "</b> widget at a cost of<b>" . $_POST["price"] . 
            "</b>each. With tax the total comes to <b>" . $total . "</b>.\n";
        }else{
            echo "<p><b>Please enter a valid quantity to purchase!</b></p>";
        }
    }else{
        echo "<p><b>You have accessed this page inappropriately!</b></p>";
    }
}else{
    echo "<p><b>You have accessed this page inappropritately!</b></p>";
}
    ?>
    </body>
    </html>