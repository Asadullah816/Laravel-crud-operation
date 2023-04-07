<h1>User data</h1>
<table border=1>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Operation</td>
        <td>Update</td>
    </tr>
    @foreach($members as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['address']}}</td>
        <td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
        <td><a href='edit/{{ $user->id }}'>Edit</a></td>
    </tr>
    @endforeach
</table>

<button><a href="/add">Add new member</a></button>