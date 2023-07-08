<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/style.css">
</head>

<body>
    <div class="card">
        <h3>
            Silahkan Login
        </h3>
        <div class="card-body">
            <div class="container-fluid">
                <div class="form">
                    <form action="Log/login" method="post">
                        <ul style="list-style: none;">
                            <li>
                                <div class="mb-1 col-8">
                                    <input type="username" class="form-control" name="username" id="username" placeholder="Masukan Username" required>
                                </div>
                            </li>
                            <li>
                                <div class="mb-1 col-8">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
                                </div>
                            </li>
                            <li>
                                <button type="submit" name="login" id="login" class="btn btn-primary mb-1 col-8">Login</button>
                            </li>
                            <li>
                                <a name="registrasi" id="registrasi" class="btn btn-primary" href="Registrasi" role="button">Registrasi</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../public/assets/jquery/dist/jquery.min.js"></script>
    <script src="../public/assets/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>