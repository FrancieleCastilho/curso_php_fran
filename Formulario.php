<form action="CadastrarAluno.php" method="POST">
    <label> Nome </label><br>
    <input type="text" name="nome"/><br>
    <label> Sobrenome </label><br>
    <input type="text" name="sobrenome"/><br>
    <label> Turma </label><br>
    <input type="text" name="turma"/><br>
    <label> período</label><br>
    <input type="radio" name="periodo" value="Manha"/> Manhã
    <input type="radio" name="periodo" value="Tarde"/> Tarde
    <input type="radio" name="periodo" value="Noite"/> Noite <br>  
    <input type="submit" value ="Salvar"/><br>
</form>