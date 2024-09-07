<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Smooch+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@500&display=swap" rel="stylesheet">
    <!-- <script language="JavaScript" type="text/javascript" src="./home.js"></script> -->
    <script src="https://kit.fontawesome.com/a13d893fa0.js" crossorigin="anonymous"></script>

    <title>MyGym</title>
    
</head>
<body>
    <header class="header1">
        <div class="d1">
            <div class="logo_left">
                <p>POWER HOUSE</p>

            </div>
            <div class="header_right">
                <ul class="ul1">
                    <a href="C:\xampp\htdocs\Smart\log in.php"><li>Home</li></a>
                    <a href="./fitnessplan.html"><li>Fitness Plan</li></a>
                    <a href="./Equipments.html"><li>Equipments</li></a>
                    <a href="Contact Us.php"><li>ContactUs</li></a>
                    <a href="Contact Us.php"><li>Cart</li></a>
                    
                    
                </ul>
                <a class="shopbtn" href="./shop.html">Shop here</a>
            </div>
        </div>
    </header>

    <!-- header ends here  -->
    <section class="sectionmidbody">
        <div class="mainboxinside">
            <div class="topheading">
                <p>SHOP HERE!</p>

            </div>
            <div class="bottom">
                <div class="eachdiv">
                    <img src="./p11.png">
                    <p class="itemname">Whey+</p>
                    <p class="priceitem">Rs: 3000/-</p>
                  
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">
        </form>
                </div>
               
                <div class="eachdiv">
                    <img src="./p22.png">
                    <p class="itemname">Whey Gold</p>
                    <p class="priceitem">Rs: 2500/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p33.png">
                    <p class="itemname"> Whey Gold Jumbo</p>
                    <p class="priceitem">Rs: 5000/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p44.png">
                    <p class="itemname">Whey Protein</p>
                    <p class="priceitem">Rs: 2000/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p55.png">
                    <p class="itemname">Isopure</p>
                    <p class="priceitem">Rs: 1500/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p66.png">
                    <p class="itemname">Isopure 1litre</p>
                    <p class="priceitem">Rs: 10000/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p77.png">
                    <p class="itemname">Vegan</p>
                    <p class="priceitem">Rs: 1250/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p77.png">
                    <p class="itemname">Vegan Large</p>
                    <p class="priceitem">Rs: 2500/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p99.png">
                    <p class="itemname">Carry Bag</p>
                    <p class="priceitem">Rs: 800/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p100.png">
                    <p class="itemname">Towels</p>
                    <p class="priceitem">Rs: 500/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p101.png">
                    <p class="itemname">Water Bottle</p>
                    <p class="priceitem">Rs: 200/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p22.png">
                    <p class="itemname">Whey Gold Large</p>
                    <p class="priceitem">Rs: 1600/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p66.png">
                    <p class="itemname">Isopure Large</p>
                    <p class="priceitem">Rs: 10000/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p55.png">
                    <p class="itemname">Isopure small</p>
                    <p class="priceitem">Rs: 3000/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p44.png">
                    <p class="itemname">Whey Isolate</p>
                    <p class="priceitem">Rs: 1000/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
                <div class="eachdiv">
                    <img src="./p33.png">
                    <p class="itemname">Whey Gold Large jumbo</p>
                    <p class="priceitem">Rs: 3500/-</p>
                    
					<form action="index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value=1>
            <input type="submit" value="Add To Cart">

                </div>
         
             

            </div>

        </div>

    </section>

    <script>
        var we1 = document.getElementById("we1")

        we1.onclick = function()
        {
            


  var sql = "UPDATE inventory SET Remaining  = '12' WHERE remaing = '100'";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log(result.affectedRows + " record(s) updated");
  
})
        }

    </script>
    
    
</body>
</html>