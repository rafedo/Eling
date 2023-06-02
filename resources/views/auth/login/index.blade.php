@include('templates.auth.header')

<body>

    <div class="center">
        @if (session()->has('loginError'))
            <p style="color: red; margin-top: 10px; margin-left:150px">{{ session('loginError') }}</p>
        @endif
        <h1>Login Administrator</h1>
        <form action="/login" method="post">
            @csrf
            <div class="txt_field">
                <input type="email" name="email" id="email" autofocus value="{{ old('email') }}"required>
                <span></span>
                <label for="email">Email addresss</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" id="password" required>
                <span></span>
                <label for="password">Password</label>
            </div>
            <input type="submit" value="Login">
            <div class="signup_link">
                {{-- Not a Administrator? <a href="/register">Register Now!</a> --}}
            </div>
        </form>

</body>

</html>
