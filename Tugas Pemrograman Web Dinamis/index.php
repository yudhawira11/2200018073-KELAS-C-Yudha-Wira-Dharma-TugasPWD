<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
</head>
<body>

    <?php
        if (isset($_GET['error'])) {
            echo "<script>alert('Username atau password salah!');</script>";
        }
    ?>

    <form name="FormLogin" method="post" action="auth.php">
        <table>
            <tr bgcolor="#dfe9ff">
                <td width="73" height="18">
                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;User</font>
                </td>
                <td width="948">
                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">:
                        <input name="TxtUserID" type="text" size="10" maxlength="30">
                    </font>
                </td>
            </tr>
            <tr bgcolor="#dfe9ff">
                <td height="18">
                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;Password</font>
                </td>
                <td>
                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">:
                        <input name="TxtPassID" type="password" size="10" maxlength="30">
                    </font>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
                        <input type="submit" name="TbLogin" value="Login">
                    </font>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>
</body>
</html>