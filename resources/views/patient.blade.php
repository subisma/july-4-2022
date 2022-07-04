<table border="2" cellspacing="2" cell padding="20">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>Date of Birth</td>
        <td>mobile NO</td>
        <td>created_at</td>
        <td>updated_at</td>
        <tr>
@foreach ($a as $b)
<tr>
<td><h2>{{ $b->id}}</h2></td>
<td><h2>{{ $b->name}}</h2></td>
<td><h2>{{ $b->dob}}</h2></td>
<td><h2>{{ $b->mobile}}</h2></td>
<td><h2>{{ $b->created_at}}</h2></td>
<td><h2>{{ $b->updated_at}}</h2></td>
</tr>
@endforeach