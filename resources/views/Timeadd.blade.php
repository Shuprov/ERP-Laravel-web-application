<h1> Payment list </h1>
<table border="1">
   <tr>
      <td> Id </td>
      <td> Project Name </td>
      <td> Previously Estimated Time </td>
      <td> New Added Time </td>
      <td>Action</td>
      <td>Action</td>


   </tr>
    @foreach ($timeadd as $item3)
    <tr>
        <td> {{$item3['id']}} </td>
        <td> {{$item3['projectname']}} </td>
        <td> {{$item3['previoustime']}} </td>
        <td> {{$item3['newaddedtime']}} </td>
        <td><a href="/edit3/{{$item3['id']}}">Edit</a></td>
        <td><a href="/delete3/{{$item3['id']}}">Delete</a>
        </td>
        
    </tr> 
   
    @endforeach
</table><h1>
<a href="/Timeandexpence">Back</a></h1>