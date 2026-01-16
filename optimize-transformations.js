import sharp from 'sharp';
import fs from 'fs';
import path from 'path';

const inputDir = 'public/images/results';
const outputDir = 'public/images/results_optimized';

if (!fs.existsSync(outputDir)) {
    fs.mkdirSync(outputDir, { recursive: true });
}

console.log(`Starting optimization from ${inputDir} to ${outputDir}...`);

fs.readdir(inputDir, (err, files) => {
    if (err) {
        console.error('Error reading directory:', err);
        return;
    }

    let processedCount = 0;

    // Filter for image files only
    const imageFiles = files.filter(file => file.match(/\.(jpg|jpeg|png|webp)$/i));

    if (imageFiles.length === 0) {
        console.log("No images found to optimize.");
        return;
    }

    console.log(`Found ${imageFiles.length} images.`);

    imageFiles.forEach(file => {
        const inputFile = path.join(inputDir, file);
        const outputFile = path.join(outputDir, file);

        sharp(inputFile)
            .resize(1200, 1200, {
                fit: 'inside',
                withoutEnlargement: true
            })
            .jpeg({ quality: 80, mozjpeg: true })
            .toFile(outputFile)
            .then(info => {
                processedCount++;
                const originalSize = fs.statSync(inputFile).size;
                const savings = ((originalSize - info.size) / originalSize * 100).toFixed(2);
                console.log(`[${processedCount}/${imageFiles.length}] Optimized: ${file} (${(info.size / 1024).toFixed(2)} KB) - Saved ${savings}%`);
            })
            .catch(err => {
                console.error(`Error processing ${file}:`, err);
            });
    });
});
