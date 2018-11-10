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

    <label>Matérias</label><br>
    <select name="materias[]" size="3" multiple>
        <option value="L">Lógica</option>
        <option value="P">PHP</option>
        <option value="H">HTML</option>
        <option value="C">CSS</option>
        <option value="A">Arquitetura</option>
        <option value="R">Redes</option>
        <option value="E">Engenharia de Software</option>
    </select><br>

    <input type="submit" value ="Salvar"/><br>
</form>