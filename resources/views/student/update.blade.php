<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<h1 class="text-center">Update Student</h1>

<div class="container mt-5">
    <div class="row">
        <div class="offset-md-3 col-md-6">

        <form action="{{ url('/student/update',$st->id)}}" method="POST">

        @csrf

  <div class="mb-3">
    <label class="form-label">Name </label>
    <input type="text" class="form-control"  name="name" value="{{ $st->stname }}">
    <p class="text-danger">
        @error('name')
            {{ $message }}
        @enderror
    </p>
</div>

  <div class="mb-3">
    <label class="form-label">Age </label>
    <input type="text" class="form-control"  name="age" value="{{ $st->age}}">
    <p class="text-danger">
        @error('age')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Course</label>
    <input type="text" class="form-control"  name="course" value="{{ $st->course}}">
    <p class="text-danger">
        @error('course')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Address </label>
    <input type="text" class="form-control"  name="address" value="{{ $st->address}}">
    <p class="text-danger">
        @error('address')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Date </label>
    <input type="date" class="form-control"  name="dob" value="{{ $st->dob }}">
    <p class="text-danger">
        @error('dob')
            {{ $message }}
        @enderror
    </p>
   </div>
   <div class="mb-3">
    <label class="form-label">Amount </label>
    <input type="number" class="form-control"  name="amount" value="{{ $st->amount }}">
    <p class="text-danger">
        @error('amount')
            {{ $message }}
        @enderror
    </p>
   </div>
  <div class="mb-3">
    <label class="form-label">Email </label>
    <input type="email" class="form-control"  name="email" value="{{ $st->email }}">
    <p class="text-danger">
        @error('email')
            {{ $message }}
        @enderror
    </p>
   </div>

   <input type="hidden" name="pass" value="{{ $st->password}}">
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

        </div>
    </div>
</div>


