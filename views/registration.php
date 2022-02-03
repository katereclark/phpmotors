<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register | PHP Motors</title>
        <link rel="stylesheet" href="/phpmotors/css/styles.css" type="text/css" media="screen">
    </head>
    <body>
        <header>
           <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'; ?>
        </header>
        <nav>
            <?php //require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/nav.php'; 
            echo $navList; ?>
        </nav>
        <main>
            <h1>Register</h1>
            <?php if (isset($message)) {echo $message;} ?>
            <form action="/phpmotors/accounts/index.php" method="POST">
                <label for="clientFirstname">First Name
                    <input name="clientFirstname" id="clientFirstname" type="text">
                </label>
                
                <label for="clientLastname">Last Name
                    <input name="clientLastname" id="clientLastname" type="text">
                </label>

                <label for="clientEmail">Email
                    <input name="clientEmail" id="clientEmail" type="email">
                </label>

                <p id="password-notice">Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter, and 1 special character.</p>

                <label for="clientPassword">Password
                    <input name="clientPassword" id="clientPassword" type="password">
                </label>

                <p>All fields are required.</p>

                <button type="submit">Register</button>
                <!-- <input type="submit" name="submit" id="regbtn" value="Register"> -->
                <input type="hidden" name="action" value="registration">
            </form>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
        </footer>
    </body>
</html>