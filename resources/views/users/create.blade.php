@extends ('../welcome')


@section ('content')

<body class="hold-transition register-page">
<div class="register-box">
 

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Add new membership</p>

      <form  action="{{ route('addUser') }}" method="POST">
      @csrf
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full name" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" require>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input class="form-control" placeholder="Password" type="password" name="password" required
                    autocomplete="new-password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password"  type="password"
                    name="password_confirmation" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <input name='role_id' type="hidden" value="user">
        <!-- <select name='role_id'>
                <option value="user"></option>
                <option value="sup-admin"></option>
            </select> -->
          <!-- /.col -->
          <div class="col-6" style="float:right;">
            <button type="submit" class="btn btn-primary">Add Member</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
</body>

@endsection