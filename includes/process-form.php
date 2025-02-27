<?php
// Processamento do formulário de contato

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
    
    // Validação básica
    $errors = [];
    
    if (empty($nome)) {
        $errors[] = "O nome é obrigatório";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "E-mail inválido";
    }
    
    if (empty($mensagem)) {
        $errors[] = "A mensagem é obrigatória";
    }
    
    // Se não houver erros, processar o envio
    if (empty($errors)) {
        // Configurações para envio de e-mail
        // Nota: Em produção, substitua por configurações reais
        $destinatario = "contato@horustabacaria.com.br";
        $assunto = "Contato pelo Site - Horus Tabacaria";
        
        // Conteúdo do e-mail
        $corpo_email = "Nome: {$nome}\n";
        $corpo_email .= "E-mail: {$email}\n\n";
        $corpo_email .= "Mensagem:\n{$mensagem}";
        
        // Headers
        $headers = "From: {$email}" . "\r\n" .
                   "Reply-To: {$email}" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        
        // Tentativa de envio (comentado para evitar erros em ambiente de teste)
        // $enviado = mail($destinatario, $assunto, $corpo_email, $headers);
        
        // Simulando sucesso para demonstração
        $enviado = true;
        
        if ($enviado) {
            // Redirecionar com mensagem de sucesso
            header("Location: ../index.php?status=success#contato");
            exit;
        } else {
            // Redirecionar com mensagem de erro
            header("Location: ../index.php?status=error#contato");
            exit;
        }
    } else {
        // Redirecionar com erros
        $erro_string = implode(",", $errors);
        header("Location: ../index.php?status=error&msg={$erro_string}#contato");
        exit;
    }
} else {
    // Se não for POST, redirecionar para a página inicial
    header("Location: ../index.php");
    exit;
}
