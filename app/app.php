<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";
    require_once __DIR__."/../src/Contact.php";

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
                    <form action='/job-results' method='get'>
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
                            <label for='phone'>Phone Number</label>
                            <input type='number' name='phone' id='phone' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='address'>Home Address</label>
                            <input type='string' name='address' id='address' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='hair_color'>Hair Color (dirty blond is not a color)</label>
                            <input type='string' name='hair_color' id='hair_color' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='email'>E-mail Address</label>
                            <input type='string' name='email' id='email' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='ssn'>Social Security Number :-)</label>
                            <input type='number' name='ssn' id='ssn' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='bday_month'>Birth Month</label>
                            <input type='number' name='bday_month' id='bday_month' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='bday_day'>Birth Day</label>
                            <input type='number' name='bday_day' id='bday_day' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='bday_year'>Birth Year</label>
                            <input type='number' name='bday_year' id='bday_year' class='form-control'>
                        </div>
                        <button name='submit' class='btn-success'>Submit</button>
                    </form>
                </div>
            </body>
        </html>";
        });

        $app->get("/job-results", function(){

            $yourcontact = new Contact($_GET['phone'], $_GET['address'], $_GET['hair_color'], $_GET['email'], $_GET['ssn'], $_GET['bday_month'], $_GET['bday_day'], $_GET['bday_year']);
            $yourjob = new JobOpening ($_GET['title'], $_GET['descript'], $_GET['pay'], $yourcontact);

            return "<h3>Your SSN is " . $yourjob->getContact()->getSSN() . ".</h3>";

        });


    return $app;
?>
