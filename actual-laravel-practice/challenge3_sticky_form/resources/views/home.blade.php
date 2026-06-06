<h1>{{ $email ?? "Sign up using email" }}</h1>

<form action = "/register" method = "GET">
    <label for = "email">email: </label>
    <input type = "email" name = "email">
    <input type = "submit">
</form>