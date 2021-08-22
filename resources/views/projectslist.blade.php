<h1> Project table </h1>
<table border="1">
   <tr>
      <td> Id </td>
      <td> Project name </td>
      <td> Short description </td>
      <td> Project leader </td>
      <td> Projectbudget </td>
      <td> Total amount spent</td>
      <td> Duration </td>
      <td>Action</td>
      <td>Action</td>


   </tr>
    @foreach ($projects as $item5)
    <tr>
        <td> {{$item5['id']}} </td>
        <td> {{$item5['projectname']}} </td>
        <td> {{$item5['shortdescription']}} </td>
        <td> {{$item5['projectleader']}} </td>
        <td> {{$item5['projectbudget']}} </td>
        <td> {{$item5['totalamountspent']}} </td>
        <td> {{$item5['duration']}} </td>
        <td><a href="/edit5/{{$item5['id']}}">Edit</a></td>
        <td><a href="/delete5/{{$item5['id']}}">Delete</a>
        </td>
        
    </tr> 
   
    @endforeach
</table><h1><a href="/Projectadd">Back</a></h1>
