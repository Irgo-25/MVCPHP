<div class="card">
    <h3>
        Registrasi
    </h3>
    <div class="card-body">
        <div class="form">
            <form action="" method="POST" autocomplete="off">
                <ul style="list-style: none;">
                    <li>
                        <div class="mb-1 col-9">
                            <div class="form-group has-feedback">
                                <input type="username" class="form-control" name="username" id="username" placeholder="Masukan Username" required>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mb-1 col-9">
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mb-1 col-9">
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password" required>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button type="submit" name="register" class="btn btn-primary mb-1 col-9" onclick="register()">Register</button>
                    </li>
                    <li>
                        <a name="login" id="login" class="btn btn-primary" href="Login" role="button">Login</a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>