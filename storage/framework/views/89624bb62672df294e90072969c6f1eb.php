<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemkab | ABOUT </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Halaman ABOUT</h1>
    <p>Biodata Diri</p>
    <ul>
        <li>Nama : <?php echo e($name); ?></li>
        <li>Email : <?php echo e($email); ?></li>
        <li>Image : <img src="img/<?php echo e($image); ?>" width="100px" alt=""></li>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH D:\KOMINFO\Laravel Project\pemkab\resources\views/about.blade.php ENDPATH**/ ?>