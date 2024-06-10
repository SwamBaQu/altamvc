<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE_PATH; ?>public/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@550&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Alta</title>
</head>

<body>
    <header>
        <h1> Formulario </h1>
    </header>
    <main>
        <form action="<?= URL_BASE; ?>personas/crear" method="post">
            <article id="anombre">
                <label for="nombre">Usuario:</label>
                <input type="text" id="nombre" name="nombre" autocomplete="on" required>
            </article>
            <article id="aapellido">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </article>
            <article id="acorreo">
                <label for="correo">Corre Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </article>
            <article id="afecha">
                <label for="fecha">Fecha de Nacimiento:</label>
                <input type="date" id="fecha" name="fecha" required>
            </article>
            <article id="atel">
                <label for="tel">Teléfono:</label>
                <input type="tel" id="tel" name="tel" pattern="[0-9]{9}">
            </article>
            <article id="agenero">
                <label for="genero">Género:</label>
                <article id="fmotro">
                    <input type="radio" id="genero" name="genero" value="f" required>
                    <i id="femenino" class="fa-solid fa-venus"></i>
                    <input type="radio" id="genero" name="genero" value="m" required>
                    <i id="masculino" class="fa-solid fa-mars"></i>
                    <input type="radio" id="genero" name="genero" value="otro" required>Otro
                </article>
            </article>
            <article id="apaises">
                <label for="pais">País:</label>
                <input list="paises" name="pais">
                <datalist id="paises">
                    <option value="Argentina">Argentina</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Chile">Chile</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Colombia">Colombia</option>
                </datalist>
            </article>
            <article id="aenviar">
                <input type="submit" id="enviar" value="Enviar Formulario">
            </article>
        </form>
    </main>
</body>

</html>