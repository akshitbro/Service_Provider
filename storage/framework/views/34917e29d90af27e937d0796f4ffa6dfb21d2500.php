<!doctype html>
<html lang="en">
  <head>
    <title>Verification</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="<?php echo e(url('/')); ?>/edit_detail/?id=<?php echo e($id); ?>" method="get">
        <?php echo csrf_field(); ?>
        <h2><?php echo e($question1); ?> : </h2>
        <input type="text" name="answer" id="answer" placeholder="answer">
        <button type="button" name="" id="" class="btn btn-primary" onclick="
            if (document.getElementById('answer').value == <?php echo $answer1; ?>) {
                window.location.href = '<?php echo url('/'); ?>/edit_detail/?id=<?php echo $id; ?>';
            } else {
                document.write('Answer Incorrect.')
            }
        " >Submit</button>
    </form>
  </body>
</html><?php /**PATH C:\xampp2\htdocs\omni\resources\views/edit_id_verification.blade.php ENDPATH**/ ?>