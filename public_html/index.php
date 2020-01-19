<?php
require 'ImplementandoBD.php';
$obj = new ImplementandoBD();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="rg">rg</label>
    <input type="text" name="rg" id="rg" placeholder="0.000-000" data-mask="0.000-000" minlength="7" maxlength="7" autocomplete="off">
    <button type="submit">Enviar</button>
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['rg'])){
        $user = test_input($_POST['rg']);
        $obj->setcadastro($user);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

</body>
</html>