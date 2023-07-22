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
        <hr />
        <div class="row">
            <div class="col-md-12">
                <a href="{{ asset('student_records.xlsx') }}">Download Excel Template</a>
            </div>
        </div>
        <hr />
        <form method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <input type="file" name="studentExcel" class="form-control-file">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-block">Upload</button>
                </div>
                <div class="col-md-6">
                    <button type="reset" class="btn btn-danger btn-block">Cancel</button>
                </div>
            </div>
        </form>
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
                        @forelse($students as $index => $student)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->class }}</td>
                            <td>{{ $student->level }}</td>
                            <td>{{ $student->parent_contact }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5"><center>No records</center></td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
