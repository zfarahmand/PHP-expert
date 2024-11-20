<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <div class="container">
        <?php if(isset($_SESSION["message"]) && $_SESSION["message"]): ?>
            <p class="msg"><?= $_SESSION["message"] // >= php 7 ?></p>
            <?php unset($_SESSION["message"]); ?>
        <?php endif; ?>
        <form method="POST" action="uploader.php">
            <div class="upload-wrapper">
                <span class="file-name">Choose a file...</span>
                <label for="file-upload">Browse
                    <input type="file" id="file-upload" name="uploadedFile" />
                </label>
            </div>
            <input type="submit" name="uploadBtn" value="upload" />
        </form>
    </div>
</body>
</html>