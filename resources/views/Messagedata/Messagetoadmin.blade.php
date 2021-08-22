<h1> Message to Admin </h1>
<table border="1">
   <tr>
      <td> Id </td>
      <td> Name </td>
      <td> Email </td>
      <td> Subject </td>
      <td> Message </td>
      <td>Action</td>
      <td>Action</td>


   </tr>
    @foreach ($messages as $item2)
    <tr>
        <td> {{$item2['id']}} </td>
        <td> {{$item2['name']}} </td>
        <td> {{$item2['email']}} </td> 
        <td> {{$item2['subject']}} </td>
        <td> {{$item2['message']}} </td>
        <td><a href="/edit2/{{$item2['id']}}">Edit</a></td>
        <td><a href="/delete2/{{$item2['id']}}">Delete</a>
        </td>
    </tr> 
    @endforeach
</table>
<h1><a href="Connectwithadmin">Back</a></h1>