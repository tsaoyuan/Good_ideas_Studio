<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        list-style: none;
    }
    section{
        margin: 10px;
    }
    input{
        margin: 10px;
        padding-bottom: 10px;
    }
</style>
<body>
    <section>
        <h2>Sign up</h2>
        <form action="connect.php" method="POST">
            <ul>
                <li>
                    <input type="text" name="name" placeholder="Full Name">
                </li>
                
                <li>
                    <input type="text" name="email" placeholder="Email">
                </li>
                
                <li>
                    <input type="text" name="uid" placeholder="User Name">
                </li>
                
                <li>
                    <input type="password" name="pwd" placeholder="Passward">
                </li>
                
                <li>
                    <input type="password" name="repeat_pwd" placeholder="Repeat Passward ">
                </li>
            </ul>
           
            <button type="submit" name="submit">Sign up</button>
        </form>

    </section>
</body>
</html>