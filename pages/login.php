<!DOCTYPE html>

<html lang='ES'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>

        <script src="../js/session_start.js"></script>
    </head>
    <body>
        <form id='form-login'>
            <!-- User -->
            <div class="input-field">
                <input id='user' class="inp-reg" type="text" name="user" autocomplete="false" placeholder=" ">
                <label id="lbl-user" for="name">Usuario</label>
            </div>                

            <!-- Password -->
            <div class="input-field">
                <input id='password' class="inp-reg" type="password" autocomplete="false" placeholder=" " name="password">
                <label id="lbl-pass" for="username">Contraseña</label>
            </div>
                                  
            <button>Ingresar</button>
        </form>
    </body>
</html>