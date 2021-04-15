<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</head>
<body>
    <section style="padding-top:80px">
        <div class="container">
            <div class="rows">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Edit Student <a style="float:right" href="/all-students" class="btn btn-primary">Back</a>                              
                        </div>

                        <div class="card-body">
                        @if (Session::has('student_updated'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('student_updated')}}
                            </div>  
                        @endif

                            <form method="POST" action="{{route('student.updated')}}" enctype="multipart/form-data" >
                            @csrf 
                                <input type="hidden" name="id" value="{{$student->id}}"/>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value ="{{$student->name}}"class="form-control" />

                                </div>       

                                <div class="form-group">
                                    <label for="file">Choose Profile Image</label>
                                    <input type="file" name="file" class="form-control" onchange="prefiewFile(this)"/><br>
                                    <img id="previewImg" alt="profile image" src="{{asset('images')}}/{{$student->profileimage}}" style="max-width:160px"/>
                                </div >      
                                <button style="float:right" type = "submit" class="btn btn-primary">Submit</button>   
                                
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

  

    
</body>
</html>