<?php

// fuck sobrang hirap

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imarketdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// prepare and bind

  $porginal = $_POST['hiddenPname'];
  //$target_dir = "uploads/"; unang directory
  $target_dir = "productImages/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  $ptitle = $_POST['title'];
  $pcategory = $_POST['category'];

  $pprice = $_POST['price'];
  setlocale(LC_MONETARY,"en_US");            //money shit dont touch

  $pdes = $_POST['description'];
  $pqty = $_POST['qty'];

  $photo=$_FILES['fileToUpload']['name'];    //dont touch used to upload image property of khelly

  date_default_timezone_set('Asia/Manila');  // creating date_created
  $createdate =date('F j, Y g:i:a  ');          // date_created format


  $stmt = $conn->prepare("UPDATE products (productName, price, shortDes, productCategory, productImage, QTY, date_updated) VALUES (?, ?, ?, ?, ?, ?, ?) WHERE productName='$porginal'");
  
  
  $stmt->bind_param("sdsssis", $ptitle, $pprice, $pdes, $pcategory, $photo, $pqty, $createdate);
  $stmt->execute();


  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "";
    }

  if(@mysqli_query($conn, $query)){
       echo "";
  }else {
    echo mysqli_error($conn);
             echo " FAILED LOL";

  }



$stmt->close();
$conn->close();
?>
