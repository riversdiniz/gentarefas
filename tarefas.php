<?php session_start(); ?>
<html>

<html>
<head>
<title>Gerenciador de Tarefas</title>
</head>
<body>
<h1>Gerenciador de Tarefas</h1>
<!-- Aqui irá o restante do código -->

<form>
<fieldset>
<legend>Nova tarefa</legend>
<label>
Tarefa:
<input type="text" name="nome" />
</label>
<input type="submit" value="Cadastrar" />
</fieldset>
</form>

</form>

<?php
    if (isset($_GET['nome'])) {
        $_SESSION['lista_tarefas'][] = $_GET['nome'];
        }
        $lista_tarefas = array();
        if (isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
}
?>

<table>
<tr>
<th>Tarefas</th>
</tr>

<?php foreach ($lista_tarefas as $tarefa) { ?>

    <tr>
        <td><?php echo $tarefa; ?> </td>
    </tr>

<?php } ?>
</table>


</body>
</html>