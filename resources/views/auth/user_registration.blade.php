<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <form action="{{ url('/registration_save') }}" method="POST">
            @csrf
            <div class="form-group input-group">
                <input class="form-control" placeholder="Full name" name="name" type="text" autocomplete="off">
            </div>
            <div class="form-group input-group">
                <input name="email" class="form-control" placeholder="Email address" type="email" autocomplete="off">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <input name="password" class="form-control" placeholder="Create password" type="password">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <select name="company" class="form-control">
                    <option selected>--Select Company--</option>
                    @foreach ($company as $comp)
                        <option value="{{ $comp->id }}">{{ $comp->company_name }}</option>
                    @endforeach
                </select>
            </div> <!-- form-group end.// -->

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <input type="checkbox" class="form-check-input" name="admin" value="Admin">
                    <label class="form-check-label" for="exampleCheck1">Admin</label><br>
                    <input type="checkbox" class="form-check-input" name="user" value="User">
                    <label class="form-check-label" for="exampleCheck1">User</label>
                </div>
            </div>
            <div class="form-group input-group">
                <input class="form-control" placeholder="Contact" name="contact" type="text" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Register </button>
            </div> <!-- form-group// -->
            <p class="text-center">Have an account? <a href="{{ url('/login') }}">Log In</a> </p>
        </form>
    </article>

</div>
<!--container end.//-->

<br><br>
