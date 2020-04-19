<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
<html lang = "en">


   <head>

      <link href = "css/bootstrap.min.css" rel = "stylesheet">

      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color:YELLOW;
         }

         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #GREEN;
         }

         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }

         .form-signin .checkbox {
            font-weight: normal;
         }

         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }

         .form-signin .form-control:focus {
            z-index: 2;
         }


            form-signin input[type="geslo"] {
               margin-bottom: 10px;
               border-top-left-radius: 0;
               border-top-right-radius: 0;
               border-color:#017572;
         }

         h2{
           text-align: center;
           color: #017572;
        }

      </style>

   </head>

   <body>

      <h2>Uprabnisko ime in Geslo</h2>
      <div class = "container form-signin">

         <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['uprabnisko ime '])
               && !empty($_POST['geslo'])) {

               if ($_POST['uprabnisko ime '] == '' &&
                  $_POST['geslo'] == '') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['uprabnisko ime '] = '';

                  echo 'You have entered valid uporabnisko ime and geslo';
               }else {
                  $msg = 'Wrong uprabnisko ime or geslo';
               }
            }
         ?>
      </div> <!-- /container -->

      <div class = "container">

         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
               name = "uporabnisko ime" placeholder = "urabnisko ime "
               required autofocus></br>
            <input type = "" class = "form-control"
               name = "geslo" placeholder = " geslo " required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Prijava</button>
         </form>

          <a href = "logout.php" tite = "logout">

      </div>

   </body>
</html>
