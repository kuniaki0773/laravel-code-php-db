<!DOCTYPE html>
<html lang="ja">
<head>
    @include('_head_view')
</head>
<body>
    @include('_header_view')
    <main class="container py-4">
        @include('_message_view')
        <div class="row mt-3">
            <div class="col-6">
                <h3>Sign in</h3>
                <hr>
                <form action="{{ route('signin.post') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-secondary">Sign in</button>
                </form>
                <hr>
                <a href="{{ url('signup') }}">Sign up an account</a>
            </div>
        </div>
    </main>
    @include('_footer_view')
</body>
</html>
