@extends("layouts.main")

@section("content")

<div class="container mt-4">
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary text-center"> <i class="bi bi-whatsapp mr-2"></i>Order via whatsapp</button>
        </div>
      </form>
</div>

  @endsection