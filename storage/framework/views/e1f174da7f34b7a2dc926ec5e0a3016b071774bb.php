<!doctype html>
<html lang="en">
  <head>
    <title>About your id</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    Your id is <?php echo e($id); ?>. Keep in mind that this id should not be leaked anywhere.Here's your qr code.

    
    <img style="pointer-events: none;" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2F<?php echo e(url('/')); ?>/show_information1/<?php echo e($id); ?>/%2F&choe=UTF-8" title="Link to musicalchair.in" />
  </body>
</html><?php /**PATH C:\xampp2\htdocs\omni\resources\views/after_add_register_for_qr_code1.blade.php ENDPATH**/ ?>