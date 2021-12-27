<!--Controleert of de user al bestaat, zo niet wordt de user toegevoegd aan de database-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="assets/css/style.css">
        <title>User added to database</title>
    </head>
    <body>
        <?php
            //connectie naar de database
            include "DataBase/index.php";

            //variabelen voor de input
            $firstname = $_GET['firstname'];
            $lastname = $_GET['lastname'];
            $Gender = $_GET['Gender'];
            $Email = $_GET['Email'];
            $phonenumber = $_GET['phonenumber'];

            $sqlGet = "SELECT * from Users where firstname like '$firstname' and lastname like '$lastname';";
            $users = $DataBaseKenny->getQuery($sqlGet);

            if(sizeof($users) > 0 )
            {
                ?>
                <script>
                    alert ("Sorry, this user already exists, pleas choose another username");
                </script>
                <?php
            } 
            else 
            {
                $sqlInsert = "INSERT INTO Users(firstname, lastname, Gender, Email, phonenumber) VALUES ('$firstname', '$lastname', '$Gender', '$Email', '$phonenumber');";
                $DataBaseKenny->insertQuery($sqlInsert);

                ?>

                <div class="container">
                    <h1 class="titel">  
                        User: <?php echo $_GET['firstname'].", ";?> added to database!
                    </h1>

                    <br>
                    <br>

                    <div>
                        <img src="assets/img/user.png" alt="user" class="user-image">
                    </div>

                    <br>

                    <div>
                        <h3 class="Center-text">
                            Welcome, <?php echo $_GET['firstname']." ".$_GET['lastname']; ?>!
                        </h3>
                    </div>

                    <br>
                    <br>

                    <a href="userdata.php">
                        <button class="button">
                            Show my details
                        </button>

                    <a href="putinhouse.php">
                        <button class="button">
                            Put people in a house
                        </button>
                    </a>
                </div>

                <?php
            }
        ?>

        
                    
    </body>
</html>