<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        h1{
            text-align:center;
        }

        table{
            margin-top:5.2rem;
            border: 2px solid;
            background:#eee;
        }

        td{
            margin:0;
            padding:1.4rem;
        }
        th{
            border-bottom:2px solid;
            background:#ddd;
        }
    </style>
</head>
<body>
    <h1>ADMIN ONLY</h1>
    <form action="welcome.php" method="post">
        <table align="center">
            <tr>
                <th colspan="2" align="center"><h2>LOGIN</h2></th>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pwd" required></td>
            </tr>

            <tr>
                <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>