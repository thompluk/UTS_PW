<?php
    session_start();
    session_destroy();
    echo
        '<script>
        alert("Logout Telah berhasil");
        window.location="../page/loginPage.php"
        </script>'
?>