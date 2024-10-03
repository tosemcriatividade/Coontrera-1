<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coontrera</title>
    <link rel="stylesheet" href="css/formi.css"> <!-- Link para o arquivo CSS separado -->
</head>
<body>

    <form class="form" id="loginForm" action="logar.php" method="post">
      <h1 class="form-title">Login</h1>
      
      <div class="input-container">
          <input type="email" id="email" name="email" placeholder="Por favor, digite seu email" required>
          <p class="error" id="emailError"></p> <!-- Mensagem de erro -->
      </div>
      
      <div class="input-container" style="position: relative;">
          <input type="password" id="senha" name="senha" placeholder="Por favor, digite sua senha" required autocomplete="current-password">
          <span id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; display: none;">
              <!-- Ícone de olho aberto em SVG -->
              <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"/><circle cx="12" cy="12" r="3"/></svg>

              <!-- Ícone de olho fechado em SVG (inicialmente oculto) -->
              <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off" viewBox="0 0 24 24" style="display: none;"><path d="M17.94 17.94A10.94 10.94 0 0 1 12 20C5 20 1 12 1 12a21.16 21.16 0 0 1 4.56-5.94M10.37 4.37A10.94 10.94 0 0 1 12 4c7 0 11 8 11 8a19.64 19.64 0 0 1-2.08 3.21M9.88 9.88a3 3 0 1 0 4.24 4.24M1 1l22 22"/></svg>
          </span>
          <p class="error" id="senhaError"></p> <!-- Mensagem de erro -->
      </div>

      <div class="controle">
        <button type="submit" id="loginButton" class="botao">Entrar</button>
      </div>
    </form>

    <div id="overlay" class="overlay" style="display: none;">
      <div class="overlay-content">
          <p id="overlayMessage"></p>
          <button id="closeOverlay" class="overlay-button">Fechar</button>
      </div>
    </div>

    <footer class="imagem">
      <img src="img/iconsemfundo.png" alt="icon">
    </footer>

    <script>
      
      // Fecha o overlay ao clicar no botão "Fechar"
      document.getElementById('closeOverlay').addEventListener('click', function() {
        document.getElementById('overlay').style.display = 'none'; // Oculta o overlay
      });

      // Alterna a visibilidade da senha
      document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordField = document.getElementById('senha');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClosed = document.getElementById('eyeClosed');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        // Alterna os ícones
        if (type === 'password') {
          eyeOpen.style.display = 'inline';
          eyeClosed.style.display = 'none';
        } else {
          eyeOpen.style.display = 'none';
          eyeClosed.style.display = 'inline';
        }
      });

      // Exibe o ícone de "ver senha" quando o usuário começa a digitar no campo de senha
      const passwordField = document.getElementById('senha');
      passwordField.addEventListener('input', function() {
        const togglePassword = document.getElementById('togglePassword');
        if (passwordField.value.length > 0) {
          togglePassword.style.display = 'inline'; // Mostra o ícone quando o usuário digita algo
        } else {
          togglePassword.style.display = 'none'; // Esconde o ícone se o campo estiver vazio
        }
      });

    </script>

</body>
</html>
