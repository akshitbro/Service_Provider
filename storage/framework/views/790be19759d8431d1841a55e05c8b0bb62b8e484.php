<!doctype html>
<html lang="en">
  <head>
    <title>Service Provider</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>

        body{
          margin: 0px;
          padding: 0px;
        }

        .service_bg{
          background-size: cover;
          background-image: url("https://i.pinimg.com/originals/93/67/19/9367194e684832cad5c0f2ad9b3c6ffb.jpg");
          width: 100%;
          height: 90vh;
          display: flex;
          align-items: baseline;
          justify-content: center;
        }

        .services_div1{
          background-color: #ebebeb;
          width: 100%;
          height: 650px;
          margin-top: 10px;
          padding: 30px;
          text-align: center;
          align-items: center;
          justify-content: center;
          display: flex;
          flex-direction: column;
        }

        .service_container{
          background-color: #ffca00;
          width: 230px;
          height: 230px;
          position: relative;
          box-shadow: 0px 0px 30px;
        }

        .service_td{

        }
        
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="service_bg" id="service_bg">
        <h1 style="position: relative; top: 30%;">Welcome To Service Provider</h1>
    </div>
    <div class="services_div1" id="services_div1">
        <h2 style="">Our Services</h2>
        <table style="margin-top: 50px;">
          <tr>
            <td class="service_td" id="service_td">
              <a href="<?php echo e(route('qrcode1')); ?>" style="text-decoration: none;">
                <div class="service_container" id="service_container">
                  <h4>Protect Your Pet</h4>
                </div>
              </a>
            </td>
            
            <td>
              <a href="<?php echo e(route('qrcode1')); ?>" style="text-decoration: none;">
                <div class="service_container" id="service_container" style="margin-right: 100px; margin-left: 100px;">
                  <h4>Call Scam Help</h4>
                </div>
              </a>
            </td>
            
            <td>
              <a href="<?php echo e(route('human_help')); ?>" style="text-decoration: none;">
                <div class="service_container" id="service_container">
                  <h4>Missing Human</h4>
                </div>
              </a>
            </td>
          </tr>
        </table>
        
        <!-- <table style="margin-top: 50px;">
          <tr>
            <td class="service_td" id="service_td">
              <a href="<?php echo e(route('qrcode1')); ?>" style="text-decoration: none;">
                <div class="service_container" id="service_container">
                  <h4>Chat Bot</h4>
                </div>
              </a>
            </td>
          </tr>
        </table> -->
    </div>
  </body>
</html><?php /**PATH C:\xampp2\htdocs\Service_Provider2\resources\views/index.blade.php ENDPATH**/ ?>