<form action="{{ route('user.search') }}" method="get">
    <p>User_id:</p>
    <input type="number" name="user_id" value="">
    <p>Name:</p>
    <input type="text" name="name" value="">
    <p>Class:</p>
    <input type="text" name="class" value="">
    <br>
    <button type="submit" name="search">Search</button>

</form>