<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img src="img/logowow.png" alt="wow restaurent logo" class= "img-responsive">
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="baitap.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Categories</a>
                    </li>
                    <li>
                        <a href="#">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfloat">
        </div>
    </section>

    <section class="order-food text-center">
        <div class="container">
            <h3 style= " color: white;">Fill this form  to confirm your order</h3>
            
            <form class="select-food-form">
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="food-menu-desc-box">
                        <div class="food-menu-img"> 
                            <img src="img/menu-pizza.jpg" alt="Chicken pizza" class="img-responsive img-curve">
                        </div>

                        <div class="food-menu-desc">
                            <h4> Food Tittle </h4>
                            <p class= "food-price"> 2.3$ </p>
                            <p class= "food-detali">
                                Quantity
                            </p>
                            <input type="number" name="quantity" min="1" max="50">
                            <br>

                        </div>
                    </div>
            
                </fieldset>
            </form>
            <form class="delivery-food-form">
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="delivery-desc">
                    <label for="fname">Full name</label><br>
                    <input type="text"  name= "text" placeholder= "E.g. Noo">
                    <label for="fname">Phone number</label><br>
                    <input type="text"  name= "text" placeholder= "E.g. 0377******">
                    <label for="fname">Email</label><br>
                    <input type="text"  name= "text" placeholder= "E.g. Noohuy1500@gmal.com">
                    <label for="fname">Address</label><br>
                    <input type="text"  name= "text-add" placeholder= "E.g. Street, City, Country"><br>
                    <a href="#" class= " btn btn-search"> Confirm order </a>
                    </div>
            
                </fieldset>
            </form>
        </div>

    </section>

    <section class="social">
        <div class="container text-center">
            
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/nolan/50/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/nolan/50/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/nolan/50/twitter-circled.png"/></a>
                </li>
            </ul>
        </div>

    </section>

    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed by <a href="#">CSE.TLU</a></p>
        </div>
    </section>


    
</body>
</html>