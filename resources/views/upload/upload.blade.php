<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <title>File Upload</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Upload File</h1>
                <form action="/store" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                    <input type="file" name="image">
                    <input type="submit" value="Upload">
                </form>
            </div>
        </div>
    </div>
</body>
</html>