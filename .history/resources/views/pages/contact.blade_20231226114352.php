@extends("master.app")

@section("content")

<p></p><p><.
<p></p>
<p></p>
<p></p>
<div id="b"></div>
<form style="width: 700px; margin-left: 25%;">

    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">descreption</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
      </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


<hr>
@endsection
