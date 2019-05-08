<!--
страница регистрации

добавить имена и значения элементам формы
-->

<!DOCTYPE html>
<html>
    <head>
        <link href="includes/styles.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body class="textStyle main">
        <header>
            <h1>Регистрация</h1><hr><br>
        </header>
        
        <article>
            <form method="post" action="db/dbReg.php">
                <table style="margin: auto;" cellpadding="5">
                    <tr>
                       <td>
                            Имя пользователя:
                        </td>
                        <td>
                            <input type="text" name="name" required>
                        </td>
                    </tr>
                    <tr>
                       <td>
                            Логин:
                        </td>
                        <td>
                            <input type="text" name="login" required>
                        </td>
                    </tr>
                    <tr>
                       <td>
                            Пароль:
                        </td>
                        <td>
                            <input type="password" name="paswd" required>
                        </td>
                    </tr>
                    <tr>
                       <td colspan="2">
                            <input type="submit" value="Создать новый аккаунт!">
                        </td>
                    </tr>
                </table>
            </form>
        </article>
        
        <footer>
            <br><hr>
        </footer>
    </body>
</html>