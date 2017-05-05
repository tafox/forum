<!DOCTYPE html>
<html>
    <head>
        <title>Login!</title>
    </head>
    <body>
        <h1>Enter your login info</h1>
        <form action="/auth.php" method="post">
            Username:
            <input type="text" name="userName">
            <br>
            Password:
            <input type="password" name="password">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
