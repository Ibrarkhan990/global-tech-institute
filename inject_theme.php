<?php
$files = glob("*.php");
$exclude = ['database.php', 'functions.php', 'submit_application.php', 'submit_message.php'];

foreach ($files as $file) {
    if (in_array($file, $exclude) || is_dir($file) || strpos($file, 'admin') !== false) continue;

    $content = file_get_contents($file);

    if (strpos($content, 'theme.js') === false && strpos($content, '<head>') !== false) {
        $content = preg_replace('/(<head>)/i', "$1\n    <script src=\"assets/js/theme.js\"></script>", $content);
        file_put_contents($file, $content);
        echo "Injected theme.js into $file\n";
    }
}
?>
