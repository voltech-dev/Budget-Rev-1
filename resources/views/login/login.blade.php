<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
    <article class="card-body mx-auto justify-content-center align-items-center" style="max-width: 400px;">

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ url('/user') }}">
            @csrf
            <div class="">
                <div class="form-group input-group">
                    <input class="form-control" placeholder="Username" name="name" type="text" autocomplete="off" required>
                </div>
                <div class="form-group input-group">
                    <input name="password" class="form-control" placeholder="Password" type="password"
                        autocomplete="off" required>
                </div>
                <div class="form-group">
                   
                        <button type="submit" class="btn btn-primary "> Login </button>
                   
                </div>
            </div>
        </form>
    </article>

</div>
<!--container end.//-->

<br><br>
