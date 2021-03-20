<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <form action="login.php" method="POST">
        <div class="col-lg-4 mx-auto" id="content">

            <div class="p-3" id="title">
                <p>Login Form</p>
            </div>
            <div class="p-3" id="fields">
                <p>Email</p>
                <input class="form-control" type="text" placeholder="Username" name="username" required>
                <p class="password">Password</p>
                <input class="form-control" type="password" placeholder="Password" name="password" required minlength="6">
                <br>
                <table>
                    <td>Masukkan Captcha</td>
                    <td><img src="captcha.php" alt="gambar" /> </td>

                    <td><input type="text" class="form-control" required id="captcha" name="kodecaptcha"></td>
                </table>
                <br>
                <input type="submit" value="Masuk" class="btn btn-primary container-fluid">
            </div>
        </div>
    </form>
</body>

</html>