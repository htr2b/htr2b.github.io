<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity6 Preview</title>
</head>
<body>
    <h2>Preview</h2>

    <?php
    if (!empty($_POST['name'])) {
        echo $_POST['name'] . "<br>";
    } else {
        echo "Name: Not provided<br>";
    }

    if (!empty($_POST['uname'])) {
        echo $_POST['uname'] . "<br>";
    } else {
        echo "Username: Not provided<br>";
    }

    if (!empty($_POST['password'])) {
        echo $_POST['password'] . "<br>";
    } else {
        echo "Password: Not provided<br>";
    }

    if (!empty($_POST['address'])) {
        echo $_POST['address'] . "<br>";
    } else {
        echo "Address: Not provided<br>";
    }

    if (!empty($_POST['country'])) {
        $pos = strpos($_POST['country'], '-') + 1;
        $countryName = substr($_POST['country'], $pos);
        echo $countryName . "<br>";
    } else {
        echo "Country: Not provided<br>";
    }

    if (!empty($_POST['zip'])) {
        echo $_POST['zip'] . "<br>";
    } else {
        echo "Zip: Not provided<br>";
    }

    if (!empty($_POST['email'])) {
        echo $_POST['email'] . "<br>";
    } else {
        echo "Email: Not provided<br>";
    }

    if (!empty($_POST['Language'])) {
        foreach ($_POST['Language'] as $lang) {
            echo $lang . "<br>";
        }
    } else {
        echo "Language: Not provided<br>";
    }

    if (!empty($_POST['comment'])) {
        echo $_POST['comment'] . "<br>";
    } else {
        echo "About: Not provided<br>";
    }
    ?>

</body>
</html>