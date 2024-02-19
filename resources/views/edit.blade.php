<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FirstApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .alert.alert-success {
         padding: 9px 10px;
      }

      .alert p {
        margin: 0;
        font-weight: 500;
      }
    </style>
  </head>
  <body>

        <div class="box-section">
          <div class="container">
            <div class="row justify-content-center mt-3">

              <div class="col-md-5">
                  <div class="box-content">
                    <h2 class="text-center text-success">Edit Form</h2>

                      
                      <form action="{{ route('edit', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                          <label for="name" class="">Name</label>
                          <input type="text" class="form-control" value="{{ $user->name }}" name="name">
                        </div>

                        <div class="mb-3">
                          <label for="email" class="">Email</label>
                          <input type="text" class="form-control" value="{{ $user->email }}" name="email" id="">
                          
                        </div>

                        <div class="mb-3">
                          <label for="password" class="">Password</label>
                          <input type="text" class="form-control" value="{{$user->password}}" name="password" id="">
  
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                  </div>
              </div>

            </div>
          </div>
        </div>
    
  </body>
</html>