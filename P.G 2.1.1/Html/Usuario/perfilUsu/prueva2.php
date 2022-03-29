<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin: auto;
            width: 450px;
            border: 2px dotted #000;
        }
    </style>
</head>
<body>
    <form action="prueva.php" method="post" enctype="multipart/form-data">

        <table>
            <tr>
                <td>
                    <label for="imagen"> documento</label>
                    <input type="text" placeholder='documento' name='docum' >
                </td>
                <td>
                    <input type="file" name="img" >
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                <button name="submit" class="btn btn-primary">Cargar Imagen</button>
            </tr>
        </table>

    </form>
    <div>
        <h1> <a href="Perfil.php">ver</a> </h1>
    </div>
</body>
</html>