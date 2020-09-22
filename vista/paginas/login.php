<head>
    <!--Custom styles-->
    <title>Login Page</title>

    <?php require_once("diseño/head1.php") ?>

</head>
<br><br><br><br><br>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3>Sign In</h3>
                </center>

            </div>
            <div class="card-body">
                <form method="POST" action="?clase=login&&funcion=login2">
                    <br>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="img/us.png" alt="" width="100%" height="100%"></span>
                        </div>
                        <input type="text" class="form-control" name="username" placeholder="username" required>

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="img/can.png" alt="" width="100%" height="100%"></span>
                        </div>
                        <input type="password" class="form-control" name="pass" placeholder="password" required>
                    </div>
                    <br>

                    <div class="form-group">

                        <button id="button" type="submit">LOGIN</button>
                        <button id="button" type="button" onclick="history.go(-1);">ATRAS</button>


                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Bienvenido, ingresa los datos
                </div>
                <div class="d-flex justify-content-center">

                </div>
            </div>
        </div>
    </div>
</div>