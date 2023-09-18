<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="https://formsubmit.co/cabral.nicolas@tecnica7.edu.ar" method="POST">
        <input type="text" name="name" required>
        <input type="email" name="email" required>
        <input type="text" name="_subject" value="Valide su usuario">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_template" value="table">
        <input type="hidden" name="_next" value="http://localhost/enviarCorreo/index.php?Send=1">
        <button type="submit" name="Send" value="Send">Send</button>
    </form>

    <?php
        if(isset($_GET['Send'])){
            echo "Correo enviado";
        }
    ?>
</body>

</html>