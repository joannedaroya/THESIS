<?php

//putek gumana ka rin naiiyak na ako huhuhu rak na ituh

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



  // prepare and bind time fck


  //$target_dir = "uploads/"; unang directory 
  $target_dir = "productImages/"; // dont touch used to upload image property of khelly
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);  // dont touch used to upload image property of khelly

  $ptitle = $_POST['title'];
  $powner = $_POST['ownerEmail'];
  //$pcategory = $_POST['category'];

  $pcategory = $_GET['category'];

  //pricepart dont touch
  $pprice = $_POST['price'];
  setlocale(LC_MONETARY,"en_US");            //money shit dont touch

  $pdes = $_POST['description'];
  $pstats = $_POST['productStats'];
  $pqty = $_POST['qty'];

  $photo=$_FILES['fileToUpload']['name'];    //dont touch used to upload image property of khelly

  date_default_timezone_set('Asia/Manila');  // creating date_created
  $createdate =date('F j, Y g:i:a  ');          // date_created format


  $stmt = $conn->prepare("INSERT INTO products (productName, owner_email, price, shortDes, productCategory, productImage, QTY, date_created, productStatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

  $stmt->bind_param("ssdsssisi", $ptitle, $powner, $pprice, $pdes, $pcategory, $photo, $pqty, $createdate, $pstats);

  $stmt->execute();


  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "uploaded product images whohoo!";
    }

  if(@mysqli_query($conn, $query)){
       echo "<script>location.href='addproductfinish.php';</script>";
  }else {
    echo mysqli_error($conn);
           echo "fck di gumagan T_T iyak na";
  }



$stmt->close();
$conn->close();
?>
