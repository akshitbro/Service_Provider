<!doctype html>
<html lang="en">
  <head>
    <title>Omni - Edit</title>
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
  
        <form action="<?php echo e(url('/')); ?>/editing_details/?id=<?php echo e($id); ?>" method="post">

          <?php echo csrf_field(); ?>
    
          <div class="form-group">
            <input type="text" name="edit_registering_username1" id="edit_registering_username1" class="form-control" placeholder="Enter Your Name" value="<?php echo e($name); ?>">
          </div>
    
          <div class="form-group">
            <input type="text" name="edit_registering_contactnumber1" id="edit_registering_contactnumber1" class="form-control" placeholder="Enter Your Contact Number" value="<?php echo e($contact_number); ?>">
          </div>
    
          <div class="form-group">
            <input type="text" name="edit_registering_country1" id="edit_registering_country" class="form-control" placeholder="Enter Your Country" value="<?php echo e($country); ?>">
          </div>
    
          <div class="form-group">
            <input type="text" name="edit_registering_state1" id="edit_registering_state1" class="form-control" placeholder="Enter Your State" value="<?php echo e($state); ?>">
          </div>
    
          <div class="form-group">
            <input type="text" name="edit_registering_sectorandhousenumber1" id="edit_registering_sectorandhousenumber1" class="form-control" placeholder="Enter Your District,  Sector and House Number" value="<?php echo e($sectorandhousenumber); ?>">
          </div>
    
          <button type="submit" class="btn btn-primary">Edit</button>
    
        </form>
  
      </div>
    </center>
  </body>
</html><?php /**PATH C:\xampp2\htdocs\omni\resources\views/edit_detail.blade.php ENDPATH**/ ?>