<h1> Recivable list </h1>
<table border="1">
   <tr>
    <td> Id </td>
      <td> Name </td>
      <td> User-Name</td> 
      <td> Password </td>
      <td> Gmail </td>
      <td> Receivable </td>
      <td>Action</td>
      <td>Action</td>
   <tr>

    @foreach ($receivables as $item1)
    <tr>
        <td> {{$item1['id']}} </td>
        <td> {{$item1['name']}} </td>
        <td> {{$item1['uname']}} </td> 
        <td> {{$item1['password']}} </td>
        <td> {{$item1['gmail']}} </td>
        <td> {{$item1['receivable']}} </td>
        <td><a href="/edit1/{{$item1['id']}}">Edit</a></td>
        <td><a href="/delete1/{{$item1['id']}}">Delete</a>
    </tr> 
    @endforeach
</table>

<h1>
    <a href="Accountsreceivables">Back</a></h1>