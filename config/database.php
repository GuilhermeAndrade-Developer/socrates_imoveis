<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=socrates', 'root', 'C00rdmcinf.');
    // Definindo para o PDO lançar exceções em caso de erros
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Em caso de erro, exibir mensagem de erro e finalizar o script
    die('Erro ao conectar com o banco de dados: ' . $e->getMessage());
}
?>
