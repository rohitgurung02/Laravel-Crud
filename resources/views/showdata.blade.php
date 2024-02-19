<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Records</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

		<div class="box-section">
          <div class="container">
            <div class="row justify-content-center mt-3">
				<div class="col-md-6">
					 @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                    <div class="table-content">
                  		<table class="table table-bordered border-primary">
		                    <thead>
		                      <tr class="text-center">
		                        <th scope="col">Id</th>
		                        <th scope="col">Name</th>
		                        <th scope="col">Email</th>
		                        <th scope="col">Password</th>
		                        <th scope="col">Edit</th>
		                        <th scope="col">Delete</th>
		                        <th scope="col">Back</th>
		                      </tr>
		                    </thead>
		                    <tbody>
		                      @foreach($user as $item)
		                      <tr>
		                        <th>{{ $item->id }}</th>
		                        <td>{{ $item->name }}</td>
		                        <td>{{ $item->email }}</td>
		                        <td>{{ $item->password }}</td>
		                        <td><a href="{{ route('edit', $item->id) }}" class="btn btn-success">Update</a></td>
		                        <td><a href="{{ route('destroy', $item->id) }}" class="btn btn-danger">Delete</a></td>
            								<td><a href="{{ route('index') }}" class="btn btn-warning" style="color:#fff">Back</a></td>
		                      </tr>
		                      @endforeach 
		                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>