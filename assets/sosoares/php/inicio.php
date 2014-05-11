<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['nome']) && !empty($_POST['mail'])) {
        $data = array('nome' => $_POST["nome"], 'email' => $_POST["mail"]);

        echo "<script>$('#mensagem').slideDown(); document.getElementById('mensagem').innerHTML = 'Registado com sucesso!'; document.getElementById('mensagem').style.padding='0 0 10px 0';</script>"; 

        $this->db->insert('newsletter', $data);
    } else {
        echo "<script>$('#mensagem').slideDown(); document.getElementById('mensagem').innerHTML = 'Erro!<br><br>Tem de preencher os campos Nome e Email.'; document.getElementById('mensagem').style.padding='0 0 10px 0';</script>"; 
    }
}
?>