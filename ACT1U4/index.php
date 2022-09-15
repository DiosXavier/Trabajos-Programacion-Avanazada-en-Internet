<!DOCTYPE html>
<html>
    <head>
        <title>
            Prueba
        </title>
        <link rel="stylesheet" href="Public\CSS\main.css">
    </head>
    <body>
        <div class="container">
            <h1>
                INICIO DE SESION:
            </h1>
            <form>
                <fieldset>
                    <legend>
                        Acceso al panel
                    </legend>

                    <label>
                        Correo Electronico
                    </label>
                    <input type="email" v-model="email"><br>
                    <br>
                    <label>
                        Password
                    </label>
                    <input type="password" v-model="password"><br>
                    <br>
                    <button @click="login">
                        Acceder
                    </button>
                </fieldset>
            </form>
        </div>
    </body>
</html>