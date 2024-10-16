
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
  body {
    width: 100%;
    /* height: 100vh; */
    background-image: url('image/login.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

}
  .form {
    width: 900px;
    padding:20px;
    color: black;
  }

  .span {
    padding-bottom: 20px;
  }
  .glass-effect {
    margin-top: 15px;
  background-color: rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(10px);
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  }
  select{
    margin-top: 10px;
    padding: 8px;
    border-radius: 10px;
    border: none;
  }

</style>

<body>
  <div class="container d-flex justify-content-center align-items-center ">
    <form class="shadow p-5 form glass-effect" action="{{ route('registers')}} " method="post" >
      @csrf
      <div class="text-center">

        <h1>Signup</h1>
      </div>

      <div class="row mt-3">
      <div class="col-6">

        <div class="mb-2 mt-2">
          <label for="exampleInputEmail1" class="form-label"> Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          <div class="f_col_w"><span class="number" style="color: red">{{ $errors->first('email') }}</span></div>
        </div>

        <div class="mb-2">
          <label for="exampleInputPassword1" class="form-label">password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="">
          <div class="f_col_w"><span class="number" style="color: red">{{ $errors->first('password') }}</span></div>
        </div>

        <div class="mb-2 mt-4">
          <label for="exampleInputfathername" class="form-label">Father Name</label>
          <input type="text" class="form-control" id="exampleInputfathername" name="name" value="">
          <div class="f_col_w"><span class="number" style="color: red">{{ $errors->first('name') }}</span></div>

        </div>


</div>
        <div class="mb-2 mt-4 form-check">

          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" class="btn btn-primary mb-3 mt-5" >sign up</button><br>
        <span class="span">already have an account? <a href="{{route('login')}}">Log in</a>
        </span>
        </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
