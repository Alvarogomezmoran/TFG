<!-- Modal de perfil -->
<?php 

    $status = session_status();
    if($status == PHP_SESSION_NONE){
        session_start();
    }

?>
<div id="perfil" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('perfil')">&times;</span>
        <img class="avatar" src="../../../public/img/avatar/<?php echo $_SESSION['avatar']; ?>" />
            <?php 
                $facultad = str_replace("_", " ", $_SESSION['facultad']);
                echo'<h2>', $_SESSION['usuario'], '</h2>';
                echo'<p>', $_SESSION['puntos'], ' puntos</p>';
                echo'<p>', $facultad, '</p>';
            ?>
            <button id="login" onclick="closeModal('perfil'), openModal('editProfileModal')">Editar Perfil</button>
            <button id="login" onclick="closeModal('perfil'), openModal('deleteUserModal')">Eliminar Cuenta</button>
            <a href=../../../app/view/includes/logout.php>Logout</a>
    </div>
</div>

