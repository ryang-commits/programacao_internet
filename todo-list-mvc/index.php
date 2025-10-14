<?php 
require_once __DIR__ ."/app/controllers/tarefacontroller.php";

$controller = new tarefacontroller();

$action = $_GET['action'] ?? 'index';

switch($action) {
    case "criar":
        $controller->criar();
        break;
    case "excluir":
        $controller->excluir();
        break;
    default:
        $controller->index();
        break;
}
?>