<?php 
include '../connection/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
    <style>
        .main{
    display: flex;
    height: 800px;
    align-items: center;
    justify-content:  center;
    background-color: white;
    
}

.table{
    width: 900px;
    height: 550px;
    padding-top: 100px;
    background-color: aquamarine;
}

.signup h1{
   color: black;
}

button{
    background-color: aquamarine;
}
.buttonn{
    background-color: grey;
    text-align: center;
    align-items: center;
}
.table{
    margin-top: 0px;
    padding-top: 0px;
}
.cartbutton{
   color: black;
}
.button{
    width: 300px;
    height: 30px;
    background-color: orange;
    font-size: 25px;
    border-radius: 18px 18px 18px 18px;

}
.buttontext{
    margin-top: 50px;
    padding-top: 50px;
}
    </style>
   

<?php


if ((isset($_REQUEST['upload']))&&(isset($_REQUEST['name']))&&(isset($_REQUEST['secondname']))
&&(isset($_REQUEST['price']))&&(isset($_REQUEST['description']))&&(isset($_REQUEST['weight']))
&&(isset($_REQUEST['category']))) {
    
    $productname = $_REQUEST['name'];
    $secondaryname=$_REQUEST['secondname'];
    $description=$_REQUEST['description'];
    $price=$_REQUEST['price'];
    $weight=$_REQUEST['weight'];
    $availableunits=$_REQUEST['aunits'];
    $category=$_REQUEST['category'];
    $sql = "INSERT INTO product(name,secondaryName,description,price,weight,availableUnits,category)VALUES('".$productname."','".$secondaryname."','".$description."',$price,$weight,$availableunits,'".$category."') ";
    $result1 = $conn->query($sql);

    $sql2="SELECT count(*) from product" ;
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2);
    $productid= $row2[0]+1;
    //echo $productid;

    
  $success = 0;
  $fail = 0;
    $productpage = '../product';
  $uploaddir = '/';
  for ($i=0;$i<5;$i++)
  {
   if($_FILES['userfile']['name'][$i])
   {
    mkdir("../product/$productid");
    $uploadfile = $productpage.$productid.$uploaddir. basename($_FILES['userfile']['name'][$i]);
    $ext = strtolower(substr($uploadfile,strlen($uploadfile)-3,3));
    if (preg_match("/(jpg|gif|png|bmp)/",$ext))
    {
     if (move_uploaded_file($_FILES['userfile']['tmp_name'][$i],$productid.$uploaddir.($i+1).'.'.webp)) 
     {
      $success++;
      rename("/$productid/'".$_FILES['userfile']['name'][$i]."'.png","1.png");
     } 
     else 
     {
     echo "Error Uploading the file. Retry after sometime.\n";
     $fail++;
     }
    }
    else
    {
     $fail++;
    }
   }
  }
  //echo "<br> Number of files Uploaded:".$success;
  //echo "<br> Number of files Failed:".$fail;
    header('Location:adminpanel.php');
}
?>

</head>
<body>
<div class="main">
        <div class="table">
            <div class="signup"><h1 style="text-align: center;">ADD ITEMS</h1></div><br>
                

            <div class="form" style="width: 900px;">
                
            <form enctype="multipart/form-data" action="addproduct.php" method="post">
                
                    <table align="center">
                        <tr><td>Enter Name:</td><td><input type="text" name="name" id="name" placeholder="Enter Name"  size="50"></td>
                    <td><span id="1" class="info"></span></td></tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>

                        <tr><td>Secondary Name:</td><td><input type="text" name="secondname" id="sname" placeholder="Secondary Name" size="50"></td>
                    <td><span id="2" class="info"></span></td></tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>

                    <tr><td>Description:</td><td><textarea  name="description" id="description" placeholder="Description" rows="3" cols="50"></textarea></td>
                    <td><span id="3" class="info"></span></td></tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>

                        <tr><td>Price:</td><td><input type="text" name="price" id="price" placeholder="Price"></td>
                    <td><span id="4" class="info"></span></td></tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>

                        <tr><td>Weight:</td><td><input type="text" name="weight" id="weight" placeholder="weight"></td>
                    <td><span id="5" class="info"></span></td></tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>

                    <tr><td>Available Units:</td><td><input type="number"  name="aunits" id="aunits" placeholder="Available Units"></td>
                    <td><span id="6" class="info"></span></td></tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>

                    <tr><td>Category:</td><td><select id="aunits" name="category">
                        <option value="Cars and vehical">Cars and vehical</option>
                        <option value="Construction toys">Construction toys</option>
                        <option value="Creative toys">Creative toys</option>
                        <option value="Dolls">Dolls</option>
                        <option value="Educational toys">Educational toys</option>
                        <option value="Electronic toys">Electronic toys</option>
                        <option value="Food-related toys">Food-related toys</option>
                        <option value="Puzzle/assembly">Puzzle/assembly</option>
                        <option value="Science and optical">Science and optical</option>
                        <option value="Sound toys">Sound toys</option>
                        <option value="Spinning toys">Spinning toys</option>
                        <option value="Wooden toys">Wooden toys</option>
                        <option value="Others">Others</option></select></td>
                    <td><span id="6" class="info"></span></td></tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>

                    <tr>
                        <td> Image1: </td><td><input name="userfile[]" type="file" /> </td>
                    </tr>
                    <tr>
                        <td> Image2: </td><td><input name="userfile[]" type="file" /> </td>
                    </tr>
                    <tr>
                        <td> Image3: </td><td><input name="userfile[]" type="file" /> </td>
                    </tr>
                    <tr>
                        <td> Image4: </td><td><input name="userfile[]" type="file" /> </td>
                    </tr>
                    <tr>
                        <td> Image5: </td><td><input type="file" name="userfile[]"  /> </td>
                    </tr>
<td colspan="2" ><button class="button" type="submit" id="submit" name="upload"> ADD ITEM </button></td>

</tr>
                    </table>
                </form>
                <br><br>
                <a class="links"  href="adminpanel.php"  >
     <button class="cartbutton" type="button"
        style="margin: 16px; padding: 16px; background-color: darkorange; color: aliceblue;
        border: none;border-radius: 4px;font-size: 15px">
        <span class="buttontext"><FONT COLOR=black>Admin Panel</span>
     </button>
</a>
        </div>
                
        </div>
    </div> 
</body>
</html>