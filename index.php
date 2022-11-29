<?php

function random_password($passwordLen)
{

    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data), 0, $passwordLen);
}


$newPassword = random_password($_GET['passwordLen']);

var_dump($newPassword);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-STRONG-PASSWORD-GENERATOR</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header id="site_header">
        <div class="title_password_generator text-center">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>
    </header>
    <!-- /#site_header -->

    <main id="site_main">
        <div class="container">
            <section class="password_generator bg-light p-4 mt-5">
                <form action="index.php" method="get">
                    <div class="data mt-4 d-flex justify-content-between p-4">
                        <p>Lunghezza Password:</p>
                        <input class="form-control w-50" type="text" name="passwordLen" id="passwordLen" placeholder="Insert a character to generate a Password">
                    </div>

                    <div class="group_btn d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </section>

            <div class="results mt-5 text-center p-5">
                <p>La nuova password è: <?= $newPassword ?></p>
            </div>
        </div>
    </main>
    <!-- /#site_main -->

    <footer id="site_footer">

    </footer>
    <!-- /#site_footer -->
</body>

</html>