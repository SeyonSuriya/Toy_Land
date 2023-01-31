<?php
include "../connection/connection.php";



?>

<html>
    <head>
        <meta charset ="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="Stylesheet" href="empty.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../mainpage/utility.css"/>
    <link rel="stylesheet" href="../mainpage/style.css"/>
    <link rel="stylesheet" href="../mainpage/footer.css"/>

    <script src="../mainpage/app.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <style>
    
            

.cointainer{
    display: flex;
    justify-content: center;
    margin-top: 0%;
    width: 700px;
    height: 400px;
    margin-left: 500px;
    border-radius: 20%;
}
.cointainer .register  input{
margin-top: 2px;
height: 35px;
width: 450px;
border-radius: 18px 18px 18px 18px;
}
.cointainer .register .name input{
    width: 223px;
}
.register{
    margin-top: 0px;
    padding: 0px;
}
.register h1{
     margin-left: 135px;
     font-size: 45px;
    
}
.submit{
    background-color: rgb(63, 225, 34);
    font-size: 20px;
    cursor: pointer;
}
#welcome{
    margin-top: 50px;
    font-size: 35px;
    color: rgb(0, 0, 0);
    margin-left: 50px;
}
.cointainer .register  input::placeholder{
    margin-left: 20px;
    font-size: 18px;
    align-items: center;
    padding-left: 20px;
}
.alreadyhave{
    display: flex;
    justify-content:first baseline;
    justify-content: center;
    margin-top: 100px;
    margin-left: 0px;
}
.alreadyhave button{
    width: 150px;
    height: 35px;
    margin-top: 20px;
    margin-left: 20px;
    border-radius: 18px 18px 18px 18px;
    background-color: orange;
}


        </style>
</head>
    <body>
    <?php 
        $page = 'adminpanel'; 
        include '../mainpage/header.php'; 
    ?>
    <br><br><br><br><br><br><br>
        <div class="container">
            <form action="../mainpage/Homepage.php">
            <h3 style="font-size:55px; cursor:pointer">Admin</h3>
            
            <h1 style="align: center ; cursor:pointer"><b>Your Cart Is Currently Empty!</b></h1>
            <br><p class="intro"> Before proceed to checkout you must add some products to your shopping cart.<br>
            You will find a lot of interesting products on our "Product page"</p>
            <button type="submit" class="shop">Return To Shop</button>
        </form>
        </div>
        
        <?php
            include '../mainpage/footer.php';
        ?>

    </body>
</html>