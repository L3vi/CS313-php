<?php
?>
<!DOCTYPE html>
<html lang="en">

    <!--     The head is where you store information about the document.-->

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" media="screen" href="../styling.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width">
        <title>Login</title>
    </head>

    <!--    The body contains the actual bulk of the content.-->

    <body>
        <main>
            <h1>Login</h1>
            
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>

            <form action="../accounts/index.php" method="post">
                Email:<br/><input type="email" name="userEmail" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?> required>
                <br/>
                
                Password:<br/><input type="password" name="userPassword" required />
                <br/><br/>
                <input type="submit" value="Login">
                <input type="hidden" name="action" value="login">
            </form>
            <br/>
            <p>Don't have an account yet? <a href="../accounts/index.php?action=registerView">Create an Account</a></p>
            

        </main>

        <footer>
        </footer>

    </body>

</html>