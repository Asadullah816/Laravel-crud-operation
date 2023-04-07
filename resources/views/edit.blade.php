<h1>Update Profile</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" id="" value="{{$data['id']}}">
    <input type="text" name="name" id="" value="{{$data['name']}}">
    <input type="text" name="email" id="" value="{{$data['email']}}">
    <input type="text" name="address" id="" value="{{$data['address']}}">
    <button type="submit">Update</button>
</form>