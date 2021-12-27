<!--Toont de gegevens die de gebruiker net heeft ingegeven-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="assets/css/style.css">
        <title>User Data</title>
    </head>
    <body>
        <div class="container">
                <?php
                    include "DataBase/indexDB.php";

                    $users = $DataBaseKenny->getQuery("SELECT * from Users where Id = (select max(Id) from Users);");

                    foreach($users as $user){
                        ?>
                        <h1 class="titel">
                            User data from: <?php echo $user['firstname'];?>
                        </h1>

                        <br>
                        <br>

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

                        <br>
                        <br>

                        <?php
                    }
                ?> 

                <a href="index.php">
                    <button class="button">
                        Home
                    </button>

                <a href="putinhouse.php">
                    <button class="button">
                        Put people in a house
                    </button>
                </a>
         </div>
    </body>
</html>