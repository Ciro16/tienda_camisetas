<?php
$url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/tienda_camisetas/';

define("base_url", $url);
define("controller_default", "productoController");
define("action_default", "index");
