<?php
// Read image metadata without modifying the original files.
$images = [];
foreach (glob(__DIR__ . '/../public/images-mist/*') as $file) {
    $size = @getimagesize($file);
    if ($size) {
        $images[basename($file)] = ['width' => $size[0], 'height' => $size[1], 'bytes' => filesize($file)];
    }
}
echo json_encode($images, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
