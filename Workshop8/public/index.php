<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE_URL', '/Workshop8/public');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../db.php';

use Jenssegers\Blade\Blade;

$views = __DIR__ . '/../app/views';
$cache = __DIR__ . '/../cache/views';

$blade = new Blade($views, $cache);

require_once __DIR__ . '/../app/controllers/StudentController.php';

$controller = new StudentController($conn, $blade);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        if ($id) {
            $controller->edit($id);
        }
        break;
    case 'update':
        if ($id) {
            $controller->update($id);
        }
        break;
    case 'delete':
        if ($id) {
            $controller->delete($id);
        }
        break;
    default:
        $controller->index();
        break;
}
?>