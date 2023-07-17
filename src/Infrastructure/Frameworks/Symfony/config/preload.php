<?php

require_once dirname(__DIR__, 3) . '/config/app.php';

if (file_exists(APP_DIR .'/var/cache/prod/App_KernelProdContainer.preload.php')) {
    require APP_DIR .'/var/cache/prod/App_KernelProdContainer.preload.php';
}
