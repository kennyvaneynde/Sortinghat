<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="assets/css/style.css">
        <title>Put people in a house</title>
    </head>
    <body>
        <div class="container">
            <?php
                include "DataBase/index.php";   
                $users = $DataBaseKenny->getQuery("SELECT * from Users where Id = 1;"); 
            ?>

            <h1 class="titel">
                Put people in a house
            </h1>

            <br>

            <?php
                foreach($users as $user){
                    ?>
                        <div>
                            <h3 class="Center-text">
                                <table border="1">
                                    <tr>
                                        <th>
                                            User number
                                        </th>
                                        <th>
                                            <?php echo $user['Id'];?>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Firstname
                                        </th>
                                        <th>
                                            <?php echo $user['firstname'];?>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Lastname
                                        </th>
                                        <th>
                                            <?php echo $user['lastname'];?>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Gender
                                        </th>
                                        <th>
                                            <?php echo $user['Gender'];?>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Email address
                                        </th>
                                        <th>
                                            <?php echo $user['Email'];?>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Phone number
                                        </th>
                                        <th>
                                            <?php echo $user['phonenumber'];?>
                                        </th>
                                    </tr>
                                </table>
                            </h3>
                        </div>
                    <?php
                }
            ?>

            <br>
            <br>

            <button class="button-house">
                Gryffindor!
            </button>
            
            <button class="button-house">
                Slytherin!
            </button>

            <button class="button-house">
                Ravenclaw!
            </button>
            
            <button class="button-house">
                Hufflepuff!
            </button>

            <a href="index.php">
                <button class="button">
                    Home
                </button>
            </a>

        </div>                
    </body>
</html>