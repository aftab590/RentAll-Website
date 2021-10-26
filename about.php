<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 33%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div>
<?php include 'includes/navbar.php'; ?>
<div class="about-section">
<h1>Who We Are?</h1>
<h4>We are the Administrator of this website.</h4>
<p>This website is about mini-project contributed by Prathmesh, Aaftab and Adarsh. It describes about the User Interface, where user can render the different products based on a particular category. If user has already registered then he/she can proceed to checkout the product to purchase it on Rent else need to sign up to proceed for checkout. For more information kindly go through our <a href="" data-toggle="modal" data-target="#myModal" style="color:#a1b0d4;">Terms & Conditions</a>.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/founder1.1.jpg" alt="Jane" style="height:350px ; width:100%">
      <div class="container">
        <h2>Aaftab</h2>
        <p class="title">Admin</p>
        <p>Designed front-end and back-end.</p>
        <p>2019aaftab.shaikh@ves.ac.in</p>
        <p><a href="https://www.linkedin.com/in/aaftab-shaikh-081bb8217"  target="_blank" class="button">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="images/founder2.1.jpeg" alt="Jane" style="height:350px ; width:100%">
      <div class="container">
        <h2>Adarsh Panigrahi</h2>
        <p class="title">Admin</p>
        <p>Worked on the back-end and front-end Connectivity.</p>
        <p>2019adarsh.panigrahi@ves.ac.in</p>
        <a href="https://www.linkedin.com/in/adarsh-panigrahi-3192071a9" target="_blank" class="button">Contact</a>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="images/founder3.1.jpeg" alt="Jane" style="height:350px ; width:100%">
      <div class="container">
        <h2>Prathmesh Kesarkar</h2>
        <p class="title">Admin</p>
        <p>Designed front-end and back-end.</p>
        <p>2019prathmesh.kesarkar@ves.ac.in</p>
        <p><a href="https://github.com/Pkesarkar1319" target="_blank" class="button">Contact</a></p>
      </div>
    </div>
  </div>
  
</div>
<?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>