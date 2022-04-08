<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recuperación de contraseña</title>
    </head>

    <body>

        <main>

            <div class="contenedor recovery">

                <form action="../php/recovery_usuario_be.php" method = "POST">
                    <h2>Recupera tu contraseña</h2>
                    <input type="text" placeholder="Email" name = "correo">
                    <input type="text" placeholder="Contraseña actual" name = "contrasena">
                    <button type="submit" value="a" name="boton">Enviar</button>
                    <button type="submit" value="b" name="boton">Volver</button>
                </form>

            </div>

        </main>

    </body>
</html>