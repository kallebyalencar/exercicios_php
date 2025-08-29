<?php
if (function_exists('pg_connect')) {
    echo "A extensão PostgreSQL está habilitada!";
} else {
    echo "A extensão PostgreSQL NÃO está habilitada!";
}
?>
