<?php ?>
<!DOCTYPE html>
<html lang="en">

    <!--     The head is where you store information about the document.-->

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" media="screen" href="../styling.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width">
        <title>Create Activity</title>
    </head>

    <!--    The body contains the actual bulk of the content.-->
    <body>
        <main>
            <h1>Create a new Activity</h1>

            <form action="../activities/index.php" method="post">
                Activity Name
                <br/>
                <input type="text" name="activityName" required>
                <br/><br/>
                <input type="submit" value="Create Activity">
                <input type="hidden" name="action" value="createActivity">
            </form>
            <br/>
            <a href="../activities/index.php">Cancel</a>
        </main>

        <footer>
        </footer>

    </body>

</html>