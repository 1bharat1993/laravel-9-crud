<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
    
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Dob</th>
        <th>State</th>
        <th>Country</th>
        <th>Status</th>
        
    </thead>
<tbody>
   @foreach ($customers as $customer)
    <tr>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->gender}}</td>
        <td>{{$customer->dob}}</td>
        <td>{{$customer->state}}</td>
        <td>{{$customer->country}}</td>
        <td>{{$customer->status}}
        @if($customer->status=="1")
      <a href=""> <span> Active</span></a>
        @else 
        <a href=""> <span>  Passive </span></a>
        @endif
        </td>
        <td>
            
            
            <!--<a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}" class="btn btn-danger">
            Delete
            </a >--->
            
            <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}  " class="btn btn-danger">
                Delete
                </a >
              
            <a href="{{route('customer.edit',['id'=>$customer->customer_id])}}">
                Edit
            </a >
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</body>
</html>