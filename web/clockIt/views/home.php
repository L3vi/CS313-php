<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Clock It</title>
        <link rel="stylesheet" href="styling.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        
        <nav class="navbar navbar-default bg-dark sticky-top">
            <a class="nav-link" href="activities/index.php">Activities</a>
            <a class="nav-link" href="activities/index.php"><?php echo ucfirst($activity_name); ?></a>
            <a class="nav-link" <?php if(isset($_SESSION['userId'])) { echo "href='accounts/index.php?action=account'"; } else { echo "href='accounts/index.php?action=loginView'"; }?>>Account</a>
        </nav>

        <div class='timer'>
            <p>00:00:00</p>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>
        
        <div class='timerButton'>
            <form action="../index.php" method="post">
                <input type="submit" value="Clock In">
                <input type="hidden" value="clockIn">
            </form>
            
        </div>

        <div class='export'>
            <p>23 Hours <img id='shareImg' class="rounded-circle" src='images/share.png'></p>
        </div>

        <!-- Will add navigation bar once it's functional -->
        <!-- <?php echo $weekNav; ?> -->
        <div class='weekContent'>
            <?php echo $timeSheet; ?>
        </div>
        
    </body>
</html>