<nav class="main-nav">
    <ul class="main-navbar">
      <li><a href="/home">Home</a></li>
      <li><a href="/cart">Cart</a></li>
      <li><a href="/profile">Profile</a></li>
      @if(Auth::user()->role_id == 2) {
      <li><a href="/account/maintenance">Account Maintenance</a></li>
      }
    </ul>
</nav>