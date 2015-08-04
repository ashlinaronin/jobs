<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "<h1><a href='/Jobs-for-sale'>Want to exploit the underclass?  Click here!</a></h1>";
    });

    $app->get("/Jobs-for-sale", function() {
        return
        "
        <DOCTYPE>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Jobs for sale</title>
        <body>
            <div class='container'>
                <h1>Employ Someone Today!</h1>
                    <div class='form-group'>
                        <label for='title'>Title</label>
                        <input type='string' name='title' id='title' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='discript'>Job Description</label>
                        <input type='string' name='descript' id='descript' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='pay'>Pay</label>
                        <input type='number' name='pay' id='pay' class='form-control'>
                    </div>


                    <div class='form-group'>
                        <label for='phone'>phone</label>
                        <input type='number' name='phone' id='phone' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='address'>address</label>
                        <input type='string' name='address' id='address' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='hair_color'>hair_color</label>
                        <input type='string' name='hair_color' id='hair_color' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='email'>email</label>
                        <input type='string' name='email' id='email' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='ssn'>ssn</label>
                        <input type='number' name='ssn' id='ssn' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='bday_month'>bday_month</label>
                        <input type='number' name='bday_month' id='bday_month' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='bday_day'>bday_day</label>
                        <input type='number' name='bday_day' id='bday_day' class='form-control'>
                    </div>
                    <div class='form-group'>
                        <label for='bday_year'>bday_year</label>
                        <input type='number' name='bday_year' id='bday_year' class='form-control'>
                    </div>
                </div>
            </body>
        </html>";


    });

    return $app;
?>
