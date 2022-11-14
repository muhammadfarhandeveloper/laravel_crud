<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="container mt-5">

    
    <table class="table">
        <thead>
            <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Course</th>
      <th scope="col">Address</th>
      <th scope="col">DOB</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($st as $item)
      
    <tr>
        <td>{{ $item['st_id'] }}</td>
        <td>{{ $item['stname'] }}</td>
        <td>{{ $item['age'] }}</td>
        <td>{{ $item['course'] }}</td>
        <td>{{ $item['address'] }}</td>
        <td>{{ $item['dob'] }}</td>
        <td>{{ $item['email'] }}</td>
        
    </tr>

    @endforeach
    
</tbody>
</table>
</div>