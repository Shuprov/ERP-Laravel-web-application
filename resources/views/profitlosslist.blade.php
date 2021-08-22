<h1> Profit loss list </h1>
<table border="1">
   <tr>
      <td> Id </td>
      <td> Project Name </td>
      <td> Profit </td>
      <td> Loss </td>
      <td> Date </td>
      <td>Action</td>
      <td>Action</td>


   </tr>
    @foreach ($profitloss as $item4)
    <tr>
        <td> {{$item4['id']}} </td>
        <td> {{$item4['projectname']}} </td>
        <td> {{$item4['profit']}} </td>
        <td> {{$item4['loss']}} </td>
        <td> {{$item4['date']}} </td>
        <td><a href="/edit4/{{$item4['id']}}">Edit</a></td>
        <td><a href="/delete4/{{$item4['id']}}">Delete</a>
        </td>
        
    </tr> 
   
    @endforeach
</table><h1><a href="/Profitloss">Back</a></h1>
