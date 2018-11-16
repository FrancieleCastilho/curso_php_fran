<?php
require_once("vereficar_sessao.php");

    $id = $_GET["id"];

    if($id > 0){
        
      require_once("conexao.php");
     
        $sql = "SELECT * FROM `curso_php`.`tarefas` WHERE `tarefas`.`id` = ".$id;
        
        $result = $conn->query($sql);
        if($result->num_rows > 0){

            $row = $result->fetch_assoc();
            $id = $row["id"];
            $nome = $row["nome"];
            $detalhes = $row["detalhes"];
            $status = $row["status"];
        }else{
            echo "Não existe tarefa com o ID".$id."<br><br>";
            echo "<a href='index.php'>Voltar</a><br><br>";
            die();
        }
        
    }
?>

<form action="gravar_tarefa.php" method="POST">
    <label>Tarefa</label>
    <input type="text" name="nome" value="<?php echo $nome; ?>"/><br><br>

    <label>Detalhes</label>
    <textarea name="detalhes"><?php echo $detalhes; ?></textarea><br><br>

    <input type="checkbox" name="status" <?php if($status==1){echo"checked";};?>/><label>Concluida</label><br><br>
    
    <input type="submit"  value="Salvar"/>
    <input type="hidden" name ="id" value = "<?php echo $id; ?>"/>
</form>