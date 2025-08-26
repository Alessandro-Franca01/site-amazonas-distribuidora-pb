<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Mensagem de Contato</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { width: 80%; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9; }
        .header { background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { padding: 20px; }
        .content p { margin-bottom: 10px; }
        .footer { text-align: center; margin-top: 20px; font-size: 0.8em; color: #777; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nova Mensagem de Contato</h2>
        </div>
        <div class="content">
            <p>Você recebeu uma nova mensagem através do formulário de contato do site:</p>
            <p><strong>Nome:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            @if(isset($data['phone']))
                <p><strong>Telefone:</strong> {{ $data['phone'] }}</p>
            @endif
            <p><strong>Mensagem:</strong></p>
            <p>{{ $data['message'] }}</p>
        </div>
        <div class="footer">
            <p>Esta é uma mensagem automática, por favor não responda.</p>
        </div>
    </div>
</body>
</html>