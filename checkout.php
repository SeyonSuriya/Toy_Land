<!DOCTYPE html>
<head> 
    <meta charset ="utf-8">
    <meta http-equiv="x-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Stylesheet" href="checkout.css">
    <link rel="stylesheet" href="path/to/fontawesome.min.css">

</head>

<body>
<h1>Responsive checkout form</h1>
    <div class="row">
    <div class="col-50">
        <div class="container-1">
            <form action="index.php?page=checkout" method="post">
          
             <div class="row-1">
                <h3>Billing Address</h3>
                <label for="fname"><i class="fa fa-user" aria-hidden="true"></i> Full Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Nimal Samarawickrama">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" placeholder="32A/22B, Dalugama, Kelaniya">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="Nimal123@gmail.com">
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city" placeholder="Colombo">

                    <div class="row-1">
                        <div class="col-50">
                            <label for="state"> state</label>
                            <input type="text" id="state" name="state" placeholder="CL">
                        </div>

                        <div class="col-50">
                            <label for="Zip">Zip</label>
                            <input type="text" id="zip" name="zip" placeholder="80000">
                        </div>

                    </div>
                
        
                </div>
        </div>

    </div>

    <div class="col-50">
        <div class="container-1">
            <form action="index.php?page=checkout" method="post">

                <div class="row">
                    <h3>Payment</h3>
                    <label for="fname">Accepted Cards</label>
                    <div class="icons">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="Nimal Samarawickrama">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">
                
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>

                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="cvv" name="cvv" placeholder="2018">
                            </div>
                        </div>
                    </div>
        </div>
    </div>
 
</div>


<label>
    <input type="checkbox">Shipping address is same as billing
</label>
</body>
</html>
