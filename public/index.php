<?php

if (!session_id()) {
    session_start();
}

require_once '../app/init.php'; // teknik bootstrapping (panggil semua applikasi dan controller)
// panggil init > init panggil semua class (App dan Controller)

$app = new App();