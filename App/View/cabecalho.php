<div class = "top-bar">
    <ul class="dropdown menu">
        <li class="menu-text">Educando</li>
        <li><a href="pageProvaPorInstituicao.php"  style="color: black">Questões por Instituição</a></li>
        <li><a href="pageProvaPorTema.php" style="color: black">Questões por Tema</a></li>
        <li><a href="pageJogosQuestoesAleatorias.php" style="color: black">Jogo - Questões Aleatorias</a></li>
            <?php
            session_start();
            $valor = isset($_SESSION['login']) ? 'S' : 'N';
            if ($valor == 'N') {
                echo '<li><a href="../../Public/index.php"  style="color: black">Tela de login</a></li>';
            } else {
                echo '<li><a href="../Controller/ServicosLogout.php"  style="color: black">Logout</a></li>';
            }
            ?>
    </ul>
</div>
