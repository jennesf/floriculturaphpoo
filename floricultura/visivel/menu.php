
    <div class="menu1">
        
        <div class="user-info dropdown">
            <div class="user-photo">
                <img src="../assets/imagens/imgusuario.jpg" alt="Foto do Usuário">
            </div>
        </div>
    </div>
    <script>
        function enviarParaAdmin() {
            document.getElementById('adminForm').submit();
        }


        function voltar() {
            window.history.back(); // Isso retorna para a página anterior no histórico do navegador
        }
    </script>
    <script>
        function enviarParaInicio() {
            document.getElementById('inicioForm').submit();
        }
    </script>
    <script>
        function logout() {
            // Aqui você pode adicionar lógica para encerrar a sessão, por exemplo:
            // session_start();
            // <?php session_destroy(); ?>

            // Redireciona para a página de login
            window.location.href = 'login.php';
        }
    </script>