
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="container mt-5">
    <div class="row">
        <div class="offset-md-3 col-md-6">

        <form action="{{ url('/store')}}" method="POST">

        @csrf

  <div class="mb-3">
    <label class="form-label">Name </label>
    <input type="text" class="form-control"  name="name" value="{{ old('name')}}">
    <p class="text-danger">
        @error('name')
            {{ $message }}
        @enderror
    </p>
</div>

  <div class="mb-3">
    <label class="form-label">Age </label>
    <input type="text" class="form-control"  name="age" value="{{ old('age')}}">
    <p class="text-danger">
        @error('age')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Course</label>
    <input type="text" class="form-control"  name="course" value="{{ old('course')}}">
    <p class="text-danger">
        @error('course')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Address </label>
    <input type="text" class="form-control"  name="address" value="{{ old('address')}}">
    <p class="text-danger">
        @error('address')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Date </label>
    <input type="date" class="form-control"  name="dob" value="{{ old('dob')}}">
    <p class="text-danger">
        @error('dob')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Email </label>
    <input type="email" class="form-control"  name="email" value="{{ old('email')}}">
    <p class="text-danger">
        @error('email')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Password </label>
    <input type="password" class="form-control"  name="pass" >
    <p class="text-danger">
        @error('pass')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Confirm Password </label>
    <input type="password" class="form-control"  name="cpass">
    <p class="text-danger">
        @error('cpass')
            {{ $message }}
        @enderror
    </p>
   </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
    </div>
</div>
