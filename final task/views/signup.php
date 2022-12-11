<?php 
    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <title>Signup Page</title>
</head>
<body>
        <form method="post" action="../controllers/regCheck.php">
            <fieldset>
                <legend>Signup</legend>
                <table>
                <tr>
                        <td>Id</td>
                        <td><input type="text" name="id" value="" reqired></td>
                    </tr>
                    
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""reqired></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="cpwd" value=""reqired></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value=""reqired></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value=""reqired></td>
                    </tr>
                    <tr>
                        <td>User Type<i>[User/Admin]</i></td>
                       <td><select name="utype" id="utype" reqired>
                          <option>users</option>
                          <option>Admin</option></td>
                        </select>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"><a href="login.php">login</td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>