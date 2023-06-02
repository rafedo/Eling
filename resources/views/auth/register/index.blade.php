@include('templates.auth.header')

<body>

    <div class="center">
        <h1>Register as Administrator</h1>
        <form action="/register" method="post">
            @csrf
            <div class="txt_field">
                <input type="name" name="name" id="name" autofocus value="{{ old('name') }}"required>
                <span></span>
                <label for="name">Name</label>
            </div>
            <div class="txt_field">
                <input type="username" name="username" id="username" autofocus value="{{ old('username') }}"required>
                <span></span>
                <label for="username">Username</label>
            </div>
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
            <input type="submit" value="Register">
            <div class="signup_link">
                Already register? <a href="/login">Login</a>
            </div>
        </form>

</body>

</html>
