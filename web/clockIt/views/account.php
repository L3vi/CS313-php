<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <!--     The head is where you store information about the document.-->

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" media="screen" href="../styling.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width">
        <title>Account</title>
    </head>

    <!--    The body contains the actual bulk of the content.-->

    <body>
        <main>
            <h1>Your Account</h1>
            <br/>
            <?php
            echo "Email address: <br/>" . $_SESSION['email'] . "<br/>";
            echo "User ID: " . $_SESSION['userId'] . "<br/>";
            ?>
            <br/>
            <form action="../accounts/index.php" method="post">
                <input type="submit" value="Logout">
                <input type="hidden" name="action" value="logout">
            </form>
            <br/>
            <a href="../index.php">Clock It!</a>
        </main>

        <footer>
        </footer>

    </body>

</html>