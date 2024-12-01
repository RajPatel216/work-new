<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
      <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h4>Php - Ajax - Curd </h4>
                    </div>
                    <div class="card-body">
                       <table class="table table-bordered table-striped22q   ">
                          <thead>
                            <tr>
                                <td>id</td>
                                <td>name</td>
                                <td>email</td>
                                <td>Action</td>
                            </tr>
                          </thead>
                          <tbody class="studentdata">
                            <tr>
                                <td>1</td>
                                <td>Dhoon</td>
                                <td>d@gmail.com</td>
                                <td>
                                    <a href="" class="badge text-bg-success ">View</a>
                                    <a href="" class="badge text-bg-primary">Edit</a>
                                    <a href="" class="badge text-bg-danger">Delete</a>
                                </td>
                            </tr>
                          </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
      </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     
<script>
      $(document).ready(function(){
     
      })
         function getdata(){
             $.ajax({
              type:"GET",
              url:"url",
              success:function(response){

              }
        
             });
        }
        
</script>

</body>
</html>


