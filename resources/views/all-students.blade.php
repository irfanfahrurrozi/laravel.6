<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</head>
<body>
    <section style="padding-top:80px">
        <div class="container">
            <div class="rows">
                <div class="col-md-6 ">
                    <div class="card">
                        <div class="card-header">
                            Add Student <a href="/add-student" class="btn btn-primary" style="float:right"> Add new </a>
                        </div>

                        <div class="card-body">

                        @if (Session::has('student_deleted'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('student_deleted')}}
                            </div>  
                        @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Profile Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{$student->name}}</td>
                                            <td><img src="{{asset('images')}}/{{$student->profileimage}}" style="max-width:60px;"/></td>
                                            <td>
                                                <a href="/edit-student/{{$student->id}}" class="btn btn-info">Edit</a>
                                                <a href="/delete-student/{{$student->id}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

   

    
</body>
</html>