<!--Gegevens van de user ingeven en doorsturen naar de adduser.php file-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="assets/css/style.css">
        <title>Create User</title>
    </head>
    <body>
        <div class="container">

            <h1 class="titel">Create account</h1>

            <form action="adduser.php" method="GET">

                <div class="input-field">
                    <label for="firstname" class="input-label">
                        <br>
                        Firstname
                        <br>
                    </label>
                    <input type="text" name="firstname" id="firstname" class="input" placeholder="Enter your firstname" required>

                    <br>
                </div>

                <div class="input-field">
                    <label for="lastname" class="input-label">
                        <br>
                        Lastname
                        <br>
                    </label>
                    <input type="text" name="lastname" id="lastname" class="input" placeholder="Enter your lastname" required>

                    <br>
                </div>

                <div class="input-field">
                    <label for="Gender" class="input-label">
                        <br>
                        Gender
                        <br>
                    </label>

                    <br>

                    <label for="Gender" class="radio">
                        <input type="radio" name="Gender" id="Gender" class="input" value="Male" required>
                        <div class="radio__radio"></div>
                        Male
                    </label>

                    <label for="Gender" class="radio">
                        <input type="radio" name="Gender" id="Gender" class="input" value="Female" required> 
                        <div class="radio__radio"></div>
                        Female
                    </label>

                    <label for="Gender" class="radio">
                        <input type="radio" name="Gender" id="Gender" class="input" value="No Input" required> 
                        <div class="radio__radio"></div>
                        I'd rather not say
                    </label>
                    
                    <br>
                </div>

                <div class="input-field">
                    <label for="Email" class="input-label">
                        <br>
                        Email
                        <br>
                    </label>
                    <input type="email" name="Email" id="Email" class="input" placeholder="Enter your Email-adress" required>

                    <br>
                </div>

                <div class="input-field">
                <label for="phonenumber" class="input-label">
                        <br>
                        Phone Number
                        <br>
                    </label>
                    <input type="number" name="phonenumber" id="phonenumber" class="input" placeholder="Enter your phonenumber" required>

                    <br>
                </div>

                <br>

                <button id="button" class="button" name="create account">
                        Create account
                </button>

            </form>

            <div>
            <a href="index.php">
                <button class="button">
                    Home
                </button>
            </a>
            </div>    

        </div>
    </body>
</html>