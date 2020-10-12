<?php 
        $pagina = isset($_GET['page']) ? strtolower($_GET['page']) : 'inicio';
        
        require_once 'pages/header.php';

        require_once 'pages/'. $pagina . '.php';

        require_once 'pages/footer.php';
        
    ?>