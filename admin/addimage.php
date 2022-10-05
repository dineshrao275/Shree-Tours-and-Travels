<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Image</title>
</head>
<body>
    <form name="mine" action="addimage1.php" method="post" enctype="multipart/form-data">
    <table border="1" cellpadding=10 cellspacing=0 align="center">

        <tr>
            <td colspan='2' align="center">Add Image</td>
        </tr>
        <tr>
            <td>
                 Choose Image
            </td>
            <td>
                <input type="file" name="picture" value="" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="Submit" value="Submit">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>