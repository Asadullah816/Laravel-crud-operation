<form action="/add" method="POST">
    @csrf
    <input type="text" name="name" id="" placeholder="Name"><br><br>
    <input type="email" name="email" id="" placeholder="Email"><br><br>
    <input type="Text" name="address" id="" placeholder="Address"><br><br>
    <button type="submit">Add member</button><br><br>
</form>