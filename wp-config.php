<?php

if (file_exists(__DIR__.'/wp-config-production.php')) {
	require_once __DIR__ . '/wp-config-production.php';
} else {
	require_once __DIR__ . '/wp-config-local.php';
}