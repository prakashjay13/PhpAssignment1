<!DOCTYPE html>
<html>
    <style>
        #hero {
  width: 100%;
  height: calc(100vh - 110px);
  background: url("images/hero-bg.jpg") top center;
  background-size: cover;
  position: relative;
}
#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color:chartreuse;
}
  #hero .container {
    padding-top: 40px;
  }
 h4{
     font-size: 25px;
     color: darkturquoise;
 }
  p{
      font-size: 20px;
      
  }


    </style>
    <body>
        

        <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative">
    <h1>Welcome user you are successfully registered!.</h1>
        <h4>Your registered id is <?php echo $_GET['uid'];?></h4>
        <p> For go to login page <a href="index.php">click here</a> </p>
    </div>
  </section>

     
    </body>
</html>