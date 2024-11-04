<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
    <div class="container">
    <h1>{{$title}}</h1>
<!---<form action="{{url('/')}}/customer" method="post">-->
    <form action="{{$url}}" method="post">
      @csrf

      <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="" value="{{$customer->name ?? ''}}" >
          <div id="emailHelp" class="text-danger">
              @error('name')
              {{message}}
              @enderror
          </div>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="" value="{{$customer->email ?? ''}}">
          <div id="" class="text-danger">
              @error('email')
              {{message}}
              @enderror
          </div>
        </div>

        <div class="mb-3">
          <label for="Password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="" value="{{$customer->password ?? ''}}">
          <div id="" class="text-danger">
              @error('password')
              {{message}}
              @enderror
          </div>
        </div>

        <div class="mb-3">
          <label for="Password" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password" id="" value="{{$customer->password ?? ''}}">
          <div id="" class="text-danger">
              @error('confirm_password')
              {{message}}
              @enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Address</label>
          <input type="text" class="form-control" name="address" id="" value="{{$customer->address ?? ''}}">
          <div id="" class="text-danger">
              @error('address')
              {{message}}
              @enderror
          </div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">State</label>
          <input type="text" class="form-control" name="state" id="" value="{{$customer->state ?? ''}}">
          <div id="" class="text-danger">
              @error('state')
              {{message}}
              @enderror
          </div>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Country</label>
          <input type="text" class="form-control" name="country" id="" value="{{$customer->country ?? ''}}">
          <div id="" class="text-danger">
              @error('country')
              {{message}}
              @enderror
          </div>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">DOB</label>
          <input type="date" class="form-control" name="dob" id="" value="{{$customer->dob ?? ''}}" >
          <div id="" class="text-danger">
              @error('dob')
              {{message}}
              @enderror
          </div>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">gender</label>
        M<input type="radio" class="" name="gender" id="" value="M" {{ ($customer->gender ?? '') == "M" ? "checked" : "" }}>
          F<input type="radio" class="" name="gender" id="" value="F" {{ ($customer->gender ?? '') == "F" ? "checked" : "" }}>
          O<input type="radio" class="" name="gender" id="" value="O" {{ ($customer->gender ?? '') == "O" ? "checked" : "" }}>
          <div id="" class="text-danger">
              @error('gender')
              {{message}}
              @enderror
          </div>
        </div>






    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<div>
</body>
</html>