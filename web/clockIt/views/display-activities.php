<?php ?>
<!DOCTYPE html>
<html lang="en">

    <!--     The head is where you store information about the document.-->

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" media="screen" href="../styling.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width">
        <title>Projects</title>
    </head>

    <!--    The body contains the actual bulk of the content.-->
    <body>
        <main>
            <h1>Projects</h1>

            <!--Dynamically display activities-->
            <?php echo $activitiesList; ?>
            <!-- <ul>
                <li><a href='../index.php'>Work</a></li>
                <li>Service</li>
                <li>Personal Project</li>
            </ul> -->
            <a href="../activities/index.php?action=createActivityView">Create a new Project</a>


        </main>

        <footer>
        </footer>

    </body>

</html>