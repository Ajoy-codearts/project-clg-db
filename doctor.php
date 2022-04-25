<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Care Point Doctor Page</title>
</head>
<body>
<!-- header section -->

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="header_icon">
                    <a href="#"><img id="header_icon" src="images/white_logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-6">
                <nav class="header_menu">
                    <ul class="menu d-flex align-items-center">
                        <li class="menu_item"><a href="index.html">home</a></li>
                        <li class="menu_item"><a href="#">about us</a></li>
                        <li class="menu_item"><a href="#">services</a></li>
                        <li class="menu_item"><a href="#">contact us</a></li>
                        <li class="menu_item"><a href="doctor.html">doctors</a></li>
                        
                    </ul>
                </nav>
                <div class="nav_icon">
                  <img id="navicon" onclick="show_nav_menu()" src="images/menu.png" alt="">
                </div>
            </div>
        </div>
        <span class="nav_menu">
          <div class="nav_menu_inner" id="nav_menu_inner">
            <ul class="nav_menu_items">
              <div class="header_icon">
                <a href="#"><img id="header_icon" src="images/logo.png" alt=""></a>
              </div>
              <li class="nav_menu_item"><a id="sample" href="#">home</a></li>
              <li class="nav_menu_item"><a href="#">about us</a></li>
              <li class="nav_menu_item"><a href="#">services</a></li>
              <li class="nav_menu_item"><a href="#">contact us</a></li>
              <li class="nav_menu_item"><a href="#">doctors</a></li>
            </ul>
          </div>
        </span>
    </div>
</header>


<!-- doc_list section -->
    <div class="doc_section">
        <div class="container">
          <h2>Find your Best Doctors Here</h2>
            <div class="doc_wraper d-center">
                <div class="doc_search">
                    <input type="text" id="search_box" placeholder="search.." onkeyup="arrange()" >
                </div>
                <div class="doc_list_wraper">

                <?php 
                    $con = mysqli_connect('localhost','root','','care-point') or die('connection failed.');
                    $sql = 'select d_specialization,d_name, clinic_address, clinic_phn from  doctor_table';
                    $result = mysqli_query($con, $sql) or die('query unsuccesfull');

                    if(mysqli_num_rows($result)){
                ?>
                <table class="doc_list" id="doc_list">
                <tr class="header_tr">
                        <th>Specialization</th>
                        <th>Doctor's Name</th>
                        <th>Clinic Location</th>
                        <th>Clinic Contact no.</th>
                    </tr>
                  <tbody>

                  <?php 
                    while($row = mysqli_fetch_assoc($result)){ 
                  ?>
                  <tr>
                    <td><?php echo $row['d_specialization']; ?></td>
                    <td><?php echo $row['d_name']; ?></td>
                    <td><?php echo $row['clinic_address']; ?></td>
                    <td><?php echo $row['clinic_phn']; ?></td>
                  </tr>
                  <?php } ?>

                    </tbody>
                </table>

                <?php } ?>
                  
                </div>
            </div>
        </div>
    </div>
   
<!-- footer part -->

<footer class="footer">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-6 full_w">
        <div class="portion">
          <h4>Get in Touch</h4>
          <a href="#"><img src="images/envelop.png" alt="">free@hospital.com</a>
          <a href="#"><img src="images/gps.png" alt="">10 -B GT Road, Country </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-6 full_w">
        <div class="portion">
          <h4>Quick Links</h4>
          <a href="#"><img src="images/footerarrow.png" alt="">About us</a>
          <a href="#"><img src="images/footerarrow.png" alt="">Blog</a>
          <a href="#"><img src="images/footerarrow.png" alt="">Contact us</a>
          <a href="#"><img src="images/footerarrow.png" alt="">FAQ</a>
          <a href="#"><img src="images/footerarrow.png" alt="">Insurance</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-6 full_w">
        <div class="portion">
          <h4>Our Services</h4>
          <a href="#"><img src="images/footerarrow.png" alt="">Work Injuries</a>
          <a href="#"><img src="images/footerarrow.png" alt="">Sport Injuries</a>
          <a href="#"><img src="images/footerarrow.png" alt="">Cold Laser Therapy</a>
          <a href="#"><img src="images/footerarrow.png" alt="">Message Therapy</a>
          <a href="#"><img src="images/footerarrow.png" alt="">Physicherrypy</a>
          <a href="#"><img src="images/footerarrow.png" alt="">Chiropractic Therapy</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-6 full_w">
        <div class="portion">
          <h4>Enquery Form</h4>
          <input type="text" placeholder="Name">
          <input type="text" placeholder="Phone">
          <input type="text" placeholder="Message" id="msginput">
          <input type="submit" value="SUBMIT" id="frmsubmit">
      </div>
      </div>
    </div>
  </footer>
    <script src="js/app.js"></script>
</body>
</html>