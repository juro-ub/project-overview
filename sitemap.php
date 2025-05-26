<?php
require_once 'init.php';
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';

// Pfad zum Root-Verzeichnis (wo die index.php liegt)
$basePath = __DIR__;

// Base-URL ermitteln
$baseUrl = rtrim(getBaseUrl(), '/') . '/';

// Nur Projekt Verzeichnisse listen (ausgenommen einige system-/meta-Verzeichnisse)
$ignoreDirs = ['.', '..', 'vendor', 'css', 'js', 'assets'];

// Alle Einträge im aktuellen Verzeichnis
$entries = scandir($basePath);

// Nur gültige Projekt-Verzeichnisse filtern
$projectDirs = array_filter($entries, function ($entry) use ($basePath, $ignoreDirs) {
    return is_dir($basePath . '/' . $entry) && !in_array($entry, $ignoreDirs) && file_exists($basePath . '/' . $entry . '/index.php');
});
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Hauptseite -->
    <url>
        <loc><?= $baseUrl ?></loc>
    </url>

    <!-- Projekt-Unterverzeichnisse -->
<?php foreach ($projectDirs as $dir): ?>
        <url>
            <loc><?= $baseUrl . htmlspecialchars($dir) ?>/</loc>
            <lastmod><?= date('Y-m-d', filemtime($basePath . '/' . $dir . '/index.php')) ?></lastmod>
        </url>
<?php endforeach; ?>
</urlset>