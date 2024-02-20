<?php 
require_once('./db/DB_connection.php');
require_once('./db/DB_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,instal-scale=1.0">
    <title>kasir pak kusir</title>
    <link rel="stylesheet"href="./assets/style/login.css">

</head>
<body>
    <div class="container">
        <img style="width: 100px; margin-bottom: 2rem;"src="./assets/images/ikhsan.png" alt="shopiria logo">        
        <form method="POST">
            <?php if (isset($error_message)):?>
                <div class="error*massager"><?php echo $error_massage; ?></div>
                <?php endif; ?>
            <div>
                <label for="username">username</label>
                <input id="username" name="username" type="text" placeholder="username" required>
            </div>

            <div>
                <label for="password">password</label>
                <input id="password" name="password" placeholder="*****" required> 
            </div>
            <div>
                <button type="submit">sign in</button>
            </div>
            <div class ="text-center mt-4">
                <p>don't have an account? <a href="./pages/register.php">register here</a></p>   
            </div>
            </from>
            </di>
            </body>
            </html>

                                    


           




