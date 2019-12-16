<form action="{{ route('user.search02') }}" method="get">
    <p>User_id:</p>
    <input type="number" name="user_id" value="">
    <p>phone:</p>
    <input type="text" name="phone" value="">
    <p>role_name:</p>
    <input type="text" name="role_name" value="">
    <br>
    <button type="submit" name="search">Search</button>

</form>