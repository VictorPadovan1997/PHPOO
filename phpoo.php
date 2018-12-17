<html>
<meta charset="UTF8">
<form action="" method="POST">
<input type="text" name="v1">
    <select name="op" >
    <option value="Somar">Somar</option>
    <option value="Subtracao">Subtracao</option>
    <option value="Multiplicacao">Multiplicação</option>
    <option value="Dividir">Dividir</option>
    </select>
<input type="text" name="v2">
<input type="submit" name="Calcula" value="Calcular">
</html>
</form>

<?php
class calculadora {
    public function calcular() {
    //Caso for enviado alguma operação em Calcular executar:
    //isset — Informa se a variável foi iniciada
    if (isset($_POST['Calcula'])) {
    if ($_POST['op'] == "Somar"){
        $resultado = $_POST['v1'] + $_POST['v2'];
        return $resultado;
    }
    elseif ($_POST['op'] == "Subtracao"){
        $resultado = $_POST['v1'] - $_POST['v2'];
        return $resultado;
    }
    elseif ($_POST['op'] == "Multiplicacao"){
        $resultado = $_POST['v1'] * $_POST['v2'];
        return $resultado;
    } 
    elseif ($_POST['op'] == "Dividir"){
        $resultado = $_POST['v1'] / $_POST['v2'];
        return $resultado;
    }
    }
    }
    }
     # Instancia a classe CALCULADORA()
     $Calcular = new calculadora();
     # Executa a função
     echo  $Calcular->Calcular();
?>