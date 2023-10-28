<!doctype html>
<html lang="en">
  <head>
    <title>Omni - Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <center>
      <div style="width: 90%; margin-top: 10%;">
  
        <form action="<?php echo e(route('register_details_for_human_post_add1')); ?>" method="post">

          <?php echo csrf_field(); ?>
    
          <div class="form-group">
            <input type="text" name="registering_username1" id="registering_username1" class="form-control" placeholder="Enter Your Name">
          </div>
    
          <div class="form-group">
            <input type="text" name="registering_contactnumber1" id="registering_contactnumber1" class="form-control" placeholder="Enter Your Contact Number">
          </div>
    
          <div class="form-group">
            <input type="text" name="registering_country1" id="registering_country" class="form-control" placeholder="Enter Your Country">
          </div>
    
          <div class="form-group">
            <input type="text" name="registering_state1" id="registering_state1" class="form-control" placeholder="Enter Your State">
          </div>
    
          <div class="form-group">
            <input type="text" name="registering_sectorandhousenumber1" id="registering_sectorandhousenumber1" class="form-control" placeholder="Enter Your District,  Sector and House Number">
          </div>
    
          <!-- <div class="form-group">
            <input type="text" name="registering_verify_question1" id="registering_verify_question1" class="form-control" placeholder="Enter Any Question For id Verification.">
          </div>
    
          <div class="form-group">
            <input type="text" name="registering_verify_answer1" id="registering_verify_answer1" class="form-control" placeholder="Enter Answer For id Verification.">
          </div> -->

          <div class="form-group">
            <input type="file" name="human_img" id="human_img" accept="image/*"  onchange='var file = this.files[0]; var reader = new FileReader();
                                                reader.onload = function(e) {
                                                    var src = e.target.result;
                                                    console.log(e.target.result);
                                                    document.getElementById("img1").setAttribute("src", src)
                                                    
                                                    const imgElement = document.querySelector("#img1");

                                                    const canvas = document.createElement("canvas");
                                                    canvas.width = imgElement.width;
                                                    canvas.height = imgElement.height;

                                                    const ctx = canvas.getContext("2d");
                                                    ctx.drawImage(imgElement, 0, 0);

                                                    const encodedImage = canvas.toDataURL();

                                                    console.log(encodedImage);

                                                    document.getElementById("img_base").value = encodedImage;
                                                }
                                                reader.readAsDataURL (file); '>
          </div>
          
    <img
      id="img1"
      alt=""
      src=""
      style="display: none;"
    />

    <input type="hidden" name="img_base" id="img_base" value="">
    
          <button type="submit" class="btn btn-primary">Submit</button>
    
        </form>
  
      </div>
    </center>
    <!-- <script>
      const fileInput = document.getElementById("human_img");

      var file = fileInput.files[0]; 
      var reader = new FileReader();
      reader.onload = function(e) {
          var src = e.target.result;
          console.log(e.target.result);
          var video = document.getElementById("videop"); 
          var source = document.getElementById("video");
          source.setAttribute("src", src);
      }
      reader.readAsDataURL(file); 

    </script> -->


    <script>
    // const imgElement = document.querySelector('#img1');

    // const canvas = document.createElement('canvas');
    // canvas.width = imgElement.width;
    // canvas.height = imgElement.height;

    // const ctx = canvas.getContext('2d');
    // ctx.drawImage(imgElement, 0, 0);

    // const encodedImage = canvas.toDataURL();

    // console.log(encodedImage);

    // document.getElementById("img_base").value = encodedImage;
  </script>
  </body>
</html><?php /**PATH C:\xampp2\htdocs\Service_Provider2\resources\views/register_details_for_human.blade.php ENDPATH**/ ?>