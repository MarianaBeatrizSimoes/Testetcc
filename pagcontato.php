<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | EcoBriEduque </title>
    <link rel="stylesheet" href="pagcontato.css">
</head>
<body>

    <!-- Verifica se a mensagem foi enviada e mostra a mensagem de confirmação ou erro -->
    <?php if (isset($mensagem_enviada) && $mensagem_enviada): ?>
        <p style="color: green; font-size: 20px;">Sua mensagem foi enviada! A EcoBriEduque agradece pelo contato.</p>
    <?php elseif (isset($erro_envio) && $erro_envio): ?>
        <p style="color: red; font-size: 20px;">Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.</p>
    <?php else: ?>

    <!-- Formulário -->
    <form action="enviar_email.php" method="POST" enctype="multipart/form-data" id="formContato">
        <fieldset>
            <div class="container">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="tel">Telefone:</label>
                    <input type="tel" name="tel" id="tel" required>
                </div>
                <div>
                    <label for="msg">Mensagem:</label>
                    <textarea name="msg" id="msg" placeholder="Escreva a sua mensagem aqui" required></textarea>
                </div>
                <div>
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </fieldset>
    </form>

    <?php endif; ?>
</body>
</html>
