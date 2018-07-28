<!DOCTYPE html>
<html>
    <head>
        <title>Login form</title>
    </head>
        <body>
            <form method="post">
                @csrf
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit">
            </form>
        </body>
</html>