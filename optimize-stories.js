import sharp from 'sharp';
import fs from 'fs';
import path from 'path';

const inputDir = 'public/images/story';
const outputDir = 'public/images/story/optimized';

if (!fs.existsSync(outputDir)) {
    fs.mkdirSync(outputDir, { recursive: true });
}

fs.readdir(inputDir, (err, files) => {
    if (err) {
        console.error('Error reading directory:', err);
        return;
    }

    files.forEach(file => {
        if (file.match(/\.(jpg|jpeg|png)$/i)) {
            const inputFile = path.join(inputDir, file);
            const outputFile = path.join(outputDir, file);

            sharp(inputFile)
                .resize(1600, 1600, {
                    fit: 'inside',
                    withoutEnlargement: true
                })
                .jpeg({ quality: 80, mozjpeg: true })
                .toFile(outputFile)
                .then(info => {
                    console.log(`Optimized: ${file} (${info.size} bytes)`);
                })
                .catch(err => {
                    console.error(`Error processing ${file}:`, err);
                });
        }
    });
});
