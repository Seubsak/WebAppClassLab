<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAB10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        @import url( {{asset('css/style.css')}} );
    </style>
</head>
<body>
    <nav>
        <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/lecturers">Lecturer List</a></li>
        </ul>
    </nav>
    <header>
        <h1>Lecturer Management</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-4">
                @foreach ($edit_lec as $edit)
                <form method="post" action="/lecturers/update">
                    @csrf
                    <h2>Edit Lecturer</h2><br>
                    <p>Lecturer ID:</p>
                    <input type="text" name="id" value="{{ $edit->id }}" readonly><br>
                    <p>Lecturer Name:</p>
                    <input type="text" name="name" value="{{ $edit->lec_name }}"><br>
                    <p>Email:</p>
                    <input type="email" name="email" value="{{ $edit->email }}" required><br>
                    <p>Major:</p>
                    <select class="form-select" name="major" required>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Geo-informatics">Geo-informatics</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Cybersecurity">Cybersecurity</option>
                    </select><br><br>
                    <input type="submit" value="Update Lecturer">
                </form>
                @endforeach
            </div>
            <div class="col-8 ">
                <h2>Lecturer List</h2>
                <a href="/lecturers"><button type="button" class="btn btn-primary">Add Lecturer</button></a>
                <table class="table table-hover" border="1">
                    <thead>
                      <tr>
                        <th scope="col">Lecturer ID</th>
                        <th scope="col">Lecturer Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Major</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher)
                      <tr>
                        <th>{{ $teacher->id }}</th>
                        <td>{{ $teacher->lec_name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->major}}</td>
                        <td><a href="/lecturers/editForm/{{ $teacher->id }}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                        <td><a href="/lecturers/delete/{{ $teacher->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</body>
</html>
