<!DOCTYPE html>
<html>
<head>
    <title>Menu do Usuário</title>
    
    <link rel="stylesheet" href="../assests/css/menu.css">
</head>
<body>
    <div class="menu1">
        <div class="user-info dropdown">
            <div class="user-photo">
                <img src="../assets/imagens/imgusuario.png" alt="Foto do Usuário">
            </div>
            <div class="user-name">Nome do Usuário</div>
            <div class="dropdown-content">
                <!-- Conteúdo do dropdown -->
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="#">Configurações</a>
                <a class="dropdown-item" href="#" onclick="logout()">Sair</a>
            </div>
        </div>
        <button class="logout-button" onclick="logout()">Sair</button>
    </div>
    <script>
        function logout() {
        // Aqui você pode adicionar lógica para encerrar a sessão, por exemplo:
        // session_start();
        <?php session_destroy(); ?>

        // Redireciona para a página de login
        window.location.href = 'login.php';
    }
    </script>
</body>
</html>
