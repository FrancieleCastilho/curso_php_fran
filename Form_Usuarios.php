<!DOCTYPE html>
<html>
    <head>
        <title> Formulário de Usuarios</title>
    </head>
    <body>
        <form action="Usuario.php" method="POST">
            <label>E-mail</label><br>
            <input type="text" name="email"/><br>
            <label>Senha</label><br>
            <input type="password" name="senha"/><br>
            <label>Status</label><br>
            <select name="status">
                <option value="0">Inativo</option>
                <option value="1">Ativo</option>
            </select>
            <br><br>

            <input type="submit" value="Salvar"/>
            
    </body>
</html>