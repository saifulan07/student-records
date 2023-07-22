<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Upload from file</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="file" class="form-control-file">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-block">Upload</button>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-secondary btn-block">Cancel</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Level</th>
                            <th>Parent Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- List of files will be dynamically generated here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
