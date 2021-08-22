<h1> Payment list </h1>
<table border="1">
   <tr>
      <td> Id </td>
      <td> Name </td>
      <td> User-Name</td> 
      <td> Password </td>
      <td> Gmail </td>
      <td> Payable </td>
      <td>Action</td>
      <td>Action</td>


   </tr>
    @foreach ($payables as $item)
    <tr>
        <td> {{$item['id']}} </td>
        <td> {{$item['name']}} </td>
        <td> {{$item['uname']}} </td> 
        <td> {{$item['password']}} </td>
        <td> {{$item['gmail']}} </td>
        <td> {{$item['payable']}} </td>
        <td><a href="/edit/{{$item['id']}}">Edit</a></td>
        <td><a href="/delete/{{$item['id']}}">Delete</a>
        </td>
    </tr> 
    @endforeach
</table><br>
<h1>
<a href="Accountspayables">Back</a></h1>