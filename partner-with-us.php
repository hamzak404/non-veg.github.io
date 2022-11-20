<?php include 'admin/config.php'; ?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="img/icons/fevicon.png" type="image/x-icon">
  <title>Mansahari</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/main1.css">
  <link rel="stylesheet" href="css/join.css">
  <link rel="stylesheet" href="css/footer.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <nav id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
      <div class="navbar-header "><a class="area">MANSAHARI</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-menubuilder">
        <ul class="nav navbar-nav navbar-right">

          <li><a href="index.html">Home</a>
          </li>
          <li><a href="outlet.html">Outlet</a>
          </li>
          <!--  <li><a href="price_locetor.html">Locator</a>
                </li> -->
          <li><a href="products.html">Gallery</a>
          </li>
          <li><a href="partner-with-us.php">Partner with us</a>
          </li>
          <li><a href="about.html">About Us</a>
          </li>
          <!-- <li><a href="contact.html">Contact Us</a>
                </li> -->
          <!--  <li class="area"> <p data-toggle="modal" data-target="#myModaljoin">Deal of the day!</p></li> -->
        </ul>
      </div>
    </div>
  </nav>

  <div class="green" style="z-index: -1;">
    <img src="imgs/partner.jpg" class="img-responsive">
    <div class="red">
      <h1>Partner with us</h1>
    </div>
  </div>

  <!-- Partner -->
  <style>
    .green {

      position: relative;
    }

    .red {

      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    h1 {
      font-size: 6em;
      color: #ffffff;
      font-family: 'Ubuntu-Regular';
    }
  </style>

  <style>
    .get-in-touch {

      margin: 0 auto;
      padding: 30px;
      max-width: 700px;
      border-radius: 2px;
      background: rgb(255, 255, 255) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAGCAYAAACFIR03AAAAV0lEQVR42tXOMRWAQAwE0RWFDRTg5d47Jeg4Q9gI06RbqlwKil/P6LpXbDCf85AxEBtMGjKG/jyPUHUerfP4nEeoOo/Wedj5pOo8Wudh55Oq82idh51PLxpvled7kLAXAAAAAElFTkSuQmCC) repeat-x;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .get-in-touch input[type=text],
    .get-in-touch input[type=email],
    .get-in-touch textarea {
      background: rgb(235, 241, 245);
      color: rgb(36, 39, 41);
    }

    .get-in-touch input:focus,
    .get-in-touch textarea:focus {
      outline: 0;
      background: #FFF;
    }
  </style>
  <?php
  $name = $email = $cont_no = $proposed_loc = $Envestment_capa = $address = $city = $district = $state = $shop_is_redy = $area_sq_fit = $own_rented = $remark = null;
  if (isset($_POST['btn_submit'])) {
    extract($_POST);

    $query_string = "INSERT INTO `partner_with_outlet`(`name`, `email`, `cont_no`, `proposed_loc`, `Envestment_capa`,`address`,`city`,`district`,`state`,`shop_is_redy`,`area_sq_fit`,`own_rented`,`remark`) VALUES ('$name','$email','$cont_no','$proposed_loc','$Envestment_capa','$address','$city','$district','$state','$shop_is_redy','$area_sq_fit','$own_rented','$remark')";

    // echo $query_string;
    $query_insert = mysqli_query($con, $query_string);
    if ($query_insert) {
    } else {
      echo "<br />Affs.. Error : " . mysqli_error($con);
    }

    //$Outlet_enquiry=$_POST['Outlet_enquiry'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cont_no = $_POST['cont_no'];
    $proposed_loc = $_POST['proposed_loc'];
    $Envestment_capa = $_POST['Envestment_capa'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $shop_is_redy = $_POST['shop_is_redy'];
    $area_sq_fit = $_POST['area_sq_fit'];
    $own_rented = $_POST['own_rented'];
    $remark = $_POST['remark'];


    // $p_name=$row['p_name'];
    // $k_email=$row['k_email'];

    include 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'server.Inalphabettech.in';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'priyanka.wagh@Inalphabettechs.in';                 // SMTP username
    $mail->Password = 'priyanka@2017';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;

    $msg = '<html><body><h1>&nbsp;</h1>';
    $msg .= '<table border="6" cellpadding="1" cellspacing="1" style="width:500px"><tbody><tr><td>';
    $msg .= '<p>Enquiry for outlet ,</p>';
    $msg .= '<p>Name: ' . $name . '</p>';
    $msg .= '<p>Email: ' . $email . '</p>';
    $msg .= '<p>Contact no: ' . $cont_no . '</p>';
    $msg .= '<p>Propose location: ' . $proposed_loc . '</p>';
    $msg .= '<p>Envestment capacity: ' . $Envestment_capa . '</p>';
    $msg .= '<p>Address: ' . $address . '</p>';
    $msg .= '<p>City: ' . $city . '</p>';
    $msg .= '<p>District: ' . $district . '</p>';
    $msg .= '<p>State: ' . $state . '</p>';
    $msg .= '<p>Shop in ready: ' . $shop_is_redy . '</p>';
    $msg .= '<p>Area Square ft: ' . $area_sq_fit . '</p>';
    $msg .= '<p>' . $own_rented . '</p>';
    $msg .= '<p>remark: ' . $remark . '</p>';
    $msg .= '</td></tr></tbody></table><p>&nbsp;</p></body></html>';

    $mail->setFrom($email, $name);
    $mail->addAddress('priyanka.wagh@Inalphabettechs.in', 'Mansahari');     // Add a recipient

    //, 

    $mail->isHTML(true);

    $mail->Subject = 'Joining to Mansahari';
    $mail->Body    = $msg;

    if (!$mail->send()) {
  ?><script>
        alert('Message could not be sent.');
      </script><?php
                echo 'Mailer Error: ' . $mail->ErrorInfo;
              } else {
                ?><script>
        alert('Thanks for applying for Mansahari Business Partnership ..We will contact you soon.');
      </script><?php

                echo "<script>window.location='partner-with-us.php'</script>";
              }
            }


                ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <button type="button" class="btn btn-warning ribbon" style="width: 100%; color: black;">JOIN US</button>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 15px;">
    <div class="row">
      <div class="col-md-8">

        <div class="get-in-touch">
          <h3 class="text-center">
            Get in Touch</h3>
          <h4>Business Interest :</h4>
          <div class="row">
            <div class="col-md-3">
              <input type="radio" name="Outlet_enquiry" value="<?= $Outlet_enquiry ?>" onclick="$('#outenc').show();$('#supp').hide();$('#addver').hide();">
              Outlet enquiry
            </div>
            <div class="col-md-3">
              <input type="radio" name="Outlet_enquiry" value="" onclick="$('#supp').show();$('#outenc').hide();$('#addver').hide();">Supply item
            </div>
            <div class="col-md-3">
              <input type="radio" name="Outlet_enquiry" value="" onclick="$('#addver').show();$('#outenc').hide();$('#supp').hide();">Advertisement
            </div>
          </div>
          <form action="#" method="post" class="form" id="outenc">
            <div class="form-group">
              <input type="text" name="name" value="<?= $name ?>" class="form-control" id="name" placeholder="Name" required />
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" name="email" value="<?= $email ?>" class="form-control" id="" placeholder="Email" required />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="cont_no" value="<?= $cont_no ?>" id="" placeholder="Contact no" required />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="proposed_loc" value="<?= $proposed_loc ?>" id="" placeholder="Proposed location" required />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="Envestment_capa" value="<?= $Envestment_capa ?>" class="form-control" id="" placeholder="Investment capacity" required />
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="address" value="<?= $address ?>" rows="3" placeholder="Address" required></textarea>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="City" name="city" value="<?= $city ?>" required />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="District" name="district" value="<?= $district ?>" required />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="State" name="state" value="<?= $state ?>" required />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  Shop in ready :
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="radio" id="" name="shop_is_redy" value="Yes" onclick="$('#ys').show();" />Yes
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="radio" id="" name="shop_is_redy" value="No" onclick="$('#ys').hide();" />No
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="height: 100px;width: 220px;" id="ys" hidden>
              <div class="panel-heading"> Area Square fit :
                <input type="text" id="" name="area_sq_fit" value="<?= $area_sq_fit ?>" />
              </div>
              <div class="panel-body">
                <input type="radio" name="own_rented" value="Own">Own
                <input type="radio" name="own_rented" value="Rented">Rented
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Remark" name="remark" value="<?= $remark ?>" required />
            </div>
            <button type="submit" name="btn_submit" class="btn btn-danger btn-sm btn-block">Submit</button>

          </form>

          <?php
          $Name = $Email = $Contact_no = $Chicken = $see = $Mutton = $Eggs = $City = $District = $State = $Address = $supply_capacity = $expected_price = $rdo1 = $remark = null;
          if (isset($_POST['btn_send'])) {
            extract($_POST);

            $query_string = "INSERT INTO `partner_with_supply`(`Name`, `Email`, `Contact_no`, `Chicken`,`see`,`Mutton`,`Eggs`,`City`,`District`,`State`,`Address`,`supply_capacity`,`expected_price`,`rdo1`,`remark`) VALUES ('$Name','$Email','$Contact_no','$Chicken','$see','$Mutton','$Eggs','$City','$District','$State','$Address','$supply_capacity','$expected_price','$rdo1','$remark')";

            echo $query_string;
            $query_insert = mysqli_query($con, $query_string);
            if ($query_insert) {
            } else {
              echo "<br />Affs.. Error : " . mysqli_error($con);
            }

            // $Supply_item=$_POST['Supply_item'];
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Contact_no = $_POST['Contact_no'];
            $Chicken = $_POST['Chicken'];
            $see = $_POST['see'];
            $Mutton = $_POST['Mutton'];
            $Eggs = $_POST['Eggs'];
            $City = $_POST['City'];
            $District = $_POST['District'];
            $State = $_POST['State'];
            $Address = $_POST['Address'];
            $supply_capacity = $_POST['supply_capacity'];
            $expected_price = $_POST['expected_price'];
            $rdo1 = $_POST['rdo1'];
            $remark = $_POST['remark'];


            // $p_name=$row['p_name'];
            // $k_email=$row['k_email'];

            include 'PHPMailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'server.Inalphabettech.in';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'priyanka.wagh@Inalphabettechs.in';                 // SMTP username
            $mail->Password = 'priyanka@2017';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;

            $msg = '<html><body><h1>&nbsp;</h1>';
            $msg .= '<table border="6" cellpadding="1" cellspacing="1" style="width:500px"><tbody><tr><td>';
            $msg .= '<p>Enquiry for supply item,</p>';
            $msg .= '<p>Name: ' . $Name . '</p>';
            $msg .= '<p>Email: ' . $Email . '</p>';
            $msg .= '<p>Contact no: ' . $Contact_no . '</p>';
            $msg .= '<p>Supply items: ' . $Chicken . '</p>';
            $msg .= '<p> ' . $see . '</p>';
            $msg .= '<p> ' . $Mutton . '</p>';
            $msg .= '<p> ' . $Eggs . '</p>';
            $msg .= '<p>Address: ' . $Address . '</p>';
            $msg .= '<p>City: ' . $City . '</p>';
            $msg .= '<p>District: ' . $District . '</p>';
            $msg .= '<p>State: ' . $State . '</p>';
            $msg .= '<p>Supply Capacity: ' . $supply_capacity . '</p>';
            $msg .= '<p>expected price: ' . $expected_price . '</p>';
            $msg .= '<p>Delivery Van: ' . $rdo1 . '</p>';
            $msg .= '<p>remark: ' . $remark . '</p>';
            $msg .= '</td></tr></tbody></table><p>&nbsp;</p></body></html>';

            $mail->setFrom($Email, $Name);
            $mail->addAddress('priyanka.wagh@Inalphabettechs.in', 'Mansahari');     // Add a recipient

            //, 

            $mail->isHTML(true);

            $mail->Subject = 'Joining to Mansahari';
            $mail->Body    = $msg;

            if (!$mail->send()) {
              //echo 'Message could not be sent.';

          ?><script>
                alert('Message could not be sent.');
              </script><?php

                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                      } else {
                        ?><script>
                alert('Thanks for applying for Mansahari Business Partnership ..We will contact you soon.');
              </script><?php
                        echo "<script>window.location='partner-with-us.php'</script>";
                      }
                    }

                        ?>

          <form action="#" method="post" class="form" id="supp" hidden>
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="Name" value="<?= $Name ?>" placeholder="Name" required />
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" id="" placeholder="Email" name="Email" value="<?= $Email ?>" required />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="" name="Contact_no" value="<?= $Contact_no ?>" placeholder="Contact no" required />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <input type="checkbox" id="" name="Chicken" value="Chicken" />Chicken
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="checkbox" id="" name="see" value="Sea Foods" />Sea Foods
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="checkbox" id="" name="Mutton" value="Mutton" />Mutton
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="checkbox" id="" name="Eggs" value="Eggs" />Eggs
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="3" name="Address" value="<?= $Address ?>" placeholder="Address" required></textarea>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="" name="City" value="<?= $City ?>" placeholder="City" required />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="" name="District" value="<?= $District ?>" placeholder="District" required />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="" name="State" value="<?= $State ?>" placeholder="State" required />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Supply capacity" name="supply_capacity" value="<?= $supply_capacity ?>" required />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Expected price" name="expected_price" value="<?= $expected_price ?>" required />
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  Delivery van
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="radio" id="" name="rdo1" value="Yes" />Yes
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="radio" id="" name="rdo1" value="No" />No
                </div>
              </div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Remark" name="remark" value="<?= $remark ?>" required />
            </div>
            <button type="submit" name="btn_send" class="btn btn-danger btn-sm btn-block">Submit</button>

          </form>
        </div>
      </div>
      <!--  <div class="col-md-1"></div> -->
      <div class="col-md-4">
        <img src="imgs/k1.png">
        <p>
        <h4 style="font-family:  Times New Roman">For those who are interested and have love and are crazy for non-vegetairan food here is a golden opportunity for you to become the franchiser of<b> Mansahari – the one stop non-vegetairan store.</b>
          <h4>
            </p>
      </div>
    </div>
  </div>
  <br />
  <!-- rebin -->
  <style>
    button {
      margin: 20px 0;
      line-height: 34px;
      position: relative;
      cursor: pointer;
      user-select: none;
      outline: none !important;

    }

    button:active {

      outline: none;
    }

    button.ribbon {

      outline: none;
      outline-color: transparent;
    }

    button.ribbon:before,
    button.ribbon:after {
      top: 5px;
      z-index: -10;
    }

    button.ribbon:before {
      border-color: #53dab6 #53dab6 #53dab6 transparent;
      left: -25px;
      border-width: 17px;
    }

    button.ribbon:after {
      border-color: #53dab6 transparent #53dab6 #53dab6;
      right: -25px;
      border-width: 17px;
    }

    button:before,
    button:after {
      content: '';
      position: absolute;
      height: 0;
      width: 0;
      border-style: solid;
      border-width: 0;
      outline: none;
    }

    button.btn-default:before {
      border-color: #757575 #757575 #757575 transparent;
    }

    button.btn-default:after {
      border-color: #757575 transparent #757575 #757575;
    }



    button.btn-primary:before {
      border-color: #2e6da4 #2e6da4 #2e6da4 transparent;
    }

    button.btn-primary:after {
      border-color: #2e6da4 transparent #2e6da4 #2e6da4;
    }


    button.btn-success:before {
      border-color: #398439 #398439 #398439 transparent;
    }

    button.btn-success:after {
      border-color: #398439 transparent #398439 #398439;
    }


    button.btn-info:before {
      border-color: #269abc #269abc #269abc transparent;
    }

    button.btn-info:after {
      border-color: #269abc transparent #269abc #269abc;
    }


    button.btn-warning:before {
      border-color: #d58512 #d58512 #d58512 transparent;
    }

    button.btn-warning:after {
      border-color: #d58512 transparent #d58512 #d58512;
    }


    button.btn-danger:before {
      border-color: #ac2925 #ac2925 #ac2925 transparent;
    }

    button.btn-danger:after {
      border-color: #ac2925 transparent #ac2925 #ac2925;
    }
  </style>
  <!-- end rebin -->



  <!-- end tab -->
  <footer class="footerBottom">
    <div class="container">
      <div class="row">
        <div class="col-md-5">

          <h5><b><span class="glyphicon glyphicon-phone-alt" style="margin:5px; "></span>8830475124</b></h5>
          <h5><b><span class="glyphicon glyphicon-envelope" style="margin:5px; "></span>inalphabet.corporation@outlook.com</b></h5>
          <br />
          <h5 style="color: #ffffff;"><b>2017 Inalphabet. All rights reserved</b></h5>
        </div>
        <div class="col-md-5">
          <h3><strong>Address :</strong></h3>
          <b>Inalphabet Corporation , Pune</b>
        </div>
        <div class="col-md-2">
          <img src="imgs/prawns.png" alt="">
        </div>
        <!-- <div class="copyright">&copy; 2017 Inalphabet. All rights reserved</div> -->
      </div>
    </div>
  </footer>
</body>

</html>