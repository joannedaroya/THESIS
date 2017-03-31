<!DOCTYPE html>
<html lang="en">
<head>
  <title>iACADAMIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

<!--CSS-->
<link rel="stylesheet" href="css/design.css"/>
</head>
<body>

<div class="container-fluid">


  <div class="row">
    <div class="col-md-12 text-right" id="header">
      <a href="index.php"><img src="image/logo.png" id="logo"></a>
            <nav>
                <a href="#" id="menu-icon"></a>
                <ul>
                  <?php if(isset($_SESSION['email'])){ ?>
                    <li><a href="#"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> SELL</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> NOTIFICATIONS</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> ACCOUNT</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> WISHLIST</a></li>
                    <li><a <href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> CART</a></li>
                  <?php } else { ?>
            <!--         <li><a href="login.html">REGISTER</a></li>
                    <li><a href="login.html">LOGIN</a></li> -->
                  <?php } ?>
                </ul>
            </nav>

      <div class="col-md-12 col-xs-12" id="menu">
            <ul id="augh1">
              <!--   <li><a href="inindex.html">LATEST</a></li>
                <li><a href="inindex.html">CLOTHES</a></li> -->
                <li><a href="inindex.html">iACADEMY MERCH</a></li>
                <li><button type="button" class="btn btn-default btn-xs">Start Business</button><li>

              <!--  <li><a href="inindex.html">CUSTOMIZE</a></li> -->
                <li><a href="login.html">REGISTER</a></li>
                <li><a href="login.html">LOGIN</a></li>
                <li style="float:right"><input type="text" name="search" placeholder=""></li>
            </ul>
      </div>
    </div>

  </div>

  <div class="jumbotron text-center">
    <h1>Slider here in this part</h1>
    <p>augh fck</p>
    <br><br><br>
  </div>
  <div class="col-md-12 text-center">
  <br><br>
    school pride part div here
    <br><br><br><br><br><br><br>
  </div>
  <div class="col-md-12 text-center">
    about us part div here
    <br><br><br><br><br><br><br>
  </div>

  <div class="row">
    <div class="col-md-6 text-center">
      <h3>Column 1</h3>
       name / email address / message part here
           <br><br><br><br><br><br><br>

    </div>
    <div class="col-md-6 text-center">
      <h3>Column 2</h3>
       school address shit with the map extension div here
           <br><br><br><br><br><br><br>

    </div>

    <!--Smelly footer-->
	<footer>
		<section>
			<h3><b>iACADAMIT</b></h3>
			<p><b>09167737988</b><br><br>
			324 iACADEMY Plaza Sen. Gil Puyat Avenue, Bel Air, Makati City 1234<br>
			201501240@iacademy.edu.ph</p>


		</section>
		<section>
			<h3>Connect With Us !</h3>
			<ul class="social">
				<li><a href="https://www.facebook.com/jungiscorny"><img src="image/social/facebook.png"></a></li>
				<li><a href="https://www.facebook.com/jungiscorny"><img src="image/social/facebook.png"></a></li>
        <li><a href="https://www.facebook.com/jungiscorny"><img src="image/social/facebook.png"></a></li>
        <li><a href="https://www.facebook.com/jungiscorny"><img src="image/social/facebook.png"></a></li>
			</ul>
		</section>
		<section>
			<img src="image/logo1.png"  width="100" height="100"/>
		</section>
	</footer>

	<!--Smelly copyright-->
	<footer class="second">
		<p>@Copyright - iACAMADIT, 2017.</p>
	</footer>
    <!--<div class="cold-md-12 text-center">
        website footer shits here
           <br><br><br><br>
    </div>-->
  </div>
</div>

</body>
</html>
