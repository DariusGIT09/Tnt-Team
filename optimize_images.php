<?php

// Script to convert images in public/images to WebP

$directory = __DIR__ . '/public/images';
$count = 0;
$totalSizeSaved = 0;

function convertToWebp($source, $destination, $quality = 80)
{
    $info = getimagesize($source);
    $mime = $info['mime'];

    switch ($mime) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            imagepalettetotruecolor($image);
            imagealphablending($image, true);
            imagesavealpha($image, true);
            break;
        default:
            return false;
    }

    // Convert to webp
    imagewebp($image, $destination, $quality);
    imagedestroy($image);

    return true;
}

function processDirectory($dir)
{
    global $count, $totalSizeSaved;

    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..')
            continue;

        $path = $dir . '/' . $file;

        if (is_dir($path)) {
            processDirectory($path);
        } else {
            $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
            if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $webpPath = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $path);

                if (!file_exists($webpPath)) {
                    echo "Converting: $path\n";
                    if (convertToWebp($path, $webpPath)) {
                        $originalSize = filesize($path);
                        $newSize = filesize($webpPath);
                        $saved = $originalSize - $newSize;
                        $totalSizeSaved += $saved;
                        $count++;
                        echo "  -> Created: $webpPath (Saved: " . round($saved / 1024, 2) . " KB)\n";
                    } else {
                        echo "  -> Failed to convert.\n";
                    }
                }
            }
        }
    }
}

echo "Starting image optimization...\n";
processDirectory($directory);
echo "Optimization complete!\n";
echo "Converted $count images.\n";
echo "Total space saved: " . round($totalSizeSaved / 1024 / 1024, 2) . " MB\n";
