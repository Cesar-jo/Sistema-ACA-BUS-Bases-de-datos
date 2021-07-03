

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style-login.css">
    
    </head>

    <body>

        <form autocomplete='off' action="logica/logear-admin.php" method="POST" class='form' >
            <div class='control'>
                <h1>
                  Iniciar sesion como Administrador
                </h1>
            </div>
            <div class='control block-cube block-input'>
                <input name='usuario' required placeholder='Username' type='text'>
                <div class='bg-top'>
                    <div class='bg-inner'></div>
                </div>
                <div class='bg-right'>
                    <div class='bg-inner'></div>
                </div>
                <div class='bg'>
                    <div class='bg-inner'></div>
                </div>
            </div>
            <div class='control block-cube block-input'>
                <input name='contraseña' placeholder='Password' type='password' require>
                <div class='bg-top'>
                    <div class='bg-inner'></div>
                </div>
                <div class='bg-right'>
                    <div class='bg-inner'></div>
                </div>
                <div class='bg'>
                    <div class='bg-inner'></div>
                </div>
            </div>
            <button class='btn block-cube block-cube-hover' type='submit'>
    <div class='bg-top'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg-right'>
      <div class='bg-inner'></div>
    </div>
    <div class='bg'>
      <div class='bg-inner'></div>
    </div>
    <div class='text'>
      Entrar
    </div>
  </button>
  <div class='credits'>
    <a href='https://informatica-with-c3sar.000webhostapp.com/' target='_blank'>
      Desarrollado por César_JO
    </a>
  </div>
</form>

        

      


        