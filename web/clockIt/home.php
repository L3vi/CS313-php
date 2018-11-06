<?php ?>

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
            <a class="nav-link" href="#">Projects</a>
            <a class="nav-link" href="#">Work</a>
            <a class="nav-link" href="#">Account</a>
        </nav>

        <div class='timer'>
            <p>00:00:00</p>

        </div>
        <div class='timerButton'>
            <button>Clock In</button>
        </div>

        <div class='export'>
            <p>23 Hours &#x279f;</p>
        </div>


        <div class='weekNav'>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="#">Monday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Tuesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wednesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Thursday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Friday</a>
                </li>
            </ul>
        </div>
        <div class='weekContent'>
            <table class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col"></th>
                        <th scope="col">Total Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>8:00 AM</td>
                        <td>11:00 AM</td>
                        <td></td>
                        <td>3 Hours</td>
                    </tr>
                    <tr>
                        <td>11:30 AM</td>
                        <td>3:00 PM</td>
                        <td></td>
                        <td>3.5 Hours</td>
                    </tr>
                    <tr>
                        <td>4:00 PM</td>
                        <td>6:00 PM</td>
                        <td></td>
                        <td>2 Hours</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>