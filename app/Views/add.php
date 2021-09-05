<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter 4 Watermark Image Example Tutorial - XpertPhp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5" style="max-width: 500px">
       <h2 class="mb-4 text-center">Codeigniter 4 Image Upload with Text Watermark Example</h2>
        <form method='post' action='<?php echo site_url('student/store'); ?>'
            enctype='multipart/form-data'>
            <div class="form-group">
                <label for="formFileLg" class="form-label">Select image :</label>
                <input class="form-control form-control-lg" type="file" name="image" />
            </div>
            <div class="d-grid mt-3">
                <input type="submit" value="Upload" class="btn btn-outline-primary" />
            </div>
        </form>
    </div>
</body>
</html>


