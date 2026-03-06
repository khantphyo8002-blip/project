<?php
    session_start();
    include("db.php");
    
    $name = "";   // default

if(isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];
    $getusername = "SELECT * FROM user WHERE user_id = '$id'";
    $res = mysqli_query($conn, $getusername);
    $username = mysqli_fetch_array($res);
    if($username){
        $name = $username['user_name'];
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex">
        <button class="login d-block">login</button>
        <div class="usernamee">
            
        </div>
    </div>


    <?php if(isset($_SESSION['user_id'])){ ?>
        <script>
            document.querySelector('.usernamee').innerHTML = "<h4><?php echo $name; ?></h4></h4> <a href='logout.php'><button>logout</button></a>";
            document.querySelector('.login').classList.remove('d-block');
            document.querySelector('.login').classList.add('d-none');
        </script>
    <?php }else{ ?>
        <script>
            document.querySelector('.login').classList.add('d-block');
            document.querySelector('.login').classList.remove('d-none');
        </script>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>