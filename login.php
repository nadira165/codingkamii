<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="login-container">
<form onsubmit="return handleLogin(event)">
<h2>Login</h2>
<input type="email" placeholder="Email" required />
<input type="password" placeholder="Password" required />
<div class="options">
<label><input type="checkbox" /> Remember me</label>
<a href="#">Forgot Password?</a>
</div>
<button type="submit">Login</button>
<p>Don't have an account? <a href="#">Register</a></p>
</form>
</div>
<script>
function handleLogin(event) {
event.preventDefault();
// Di sini bisa ditambahkan logika validasi
window.location.href = "../index.html"; // arahkan ke halaman utama
return false;
}
</script>
</body> </html>