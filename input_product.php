<?php
print_r($_FILES);
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Select Image to Upload</h1>
        <form method='post' action='output.php' enctype='multipart/form-data'>
            <div class="form-group">
                <input type="file" name="image" id="file" multiple>
            </div>
            <div class="form-group">
                <input type='submit' name='submit' value='Upload' class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>