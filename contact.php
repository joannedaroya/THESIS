<!DOCTYPE html>
<html lang="en">
<head>
  <title>iACADEMY Market</title>
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
                <li style="float:right"><input type="text" name="search" placeholder="Search"></li>
            </ul>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-md-6">
      <h2>Contact Us</h2><br/>
      <form>
        <div class="control-group form-group">
          <div class="controls">
            <label>Full Name</label>
            <input type="text" id="name" required>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Email Address</label>
            <input type="email" id="email" required>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Message</label>
            <textarea rows="10" cols="104" id="message" maxlength=999></textarea>
          </div>
        </div>
        <input type="submit" value="Send"> &nbsp;&nbsp;
        <input type="reset" value="Clear">
      </form>
    </div>

    <div class="col-md-6" id="contact">
      <p>324 Sen. Gil Puyat Avenue<br/>Bel-air, Makati City</p>
      <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>: 09167737988<br/>
      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>: <a href="#">sample@inquiry.com</a><br/><br/>

      <iframe width="80%" height="270px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.8306954511957!2d121.01845665817463!3d14.561345997456918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDMzJzQwLjkiTiAxMjHCsDAxJzEwLjQiRQ!5e0!3m2!1sen!2sph!4v1481111170468"></iframe>

    </div> <!--div col-md-6 -->
  </div> <!--div row -->


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
