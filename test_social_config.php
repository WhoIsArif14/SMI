<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->boot();

echo "Testing social media configuration:\n";
echo "Facebook: " . $app['config']->get('social.facebook') . "\n";
echo "Instagram: " . $app['config']->get('social.instagram') . "\n";
echo "LinkedIn: " . $app['config']->get('social.linkedin') . "\n";
echo "Contact Email: " . $app['config']->get('social.contact.email') . "\n";
echo "Contact Phone: " . $app['config']->get('social.contact.phone') . "\n";
