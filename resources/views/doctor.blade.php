Hello world!
<table border="2" cellspacing="2" cell padding="20">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>specialist</td>
        <td>phone</td>
        <td>education</td>
        <tr>
@foreach ($a as $b)
<tr>
<td><h1>{{ $b->id}}</h1></td>
<td><h1>{{ $b->name}}</h1></td>
<td><h1>{{ $b->specialist}}</h1></td>
<td><h1>{{ $b->phone}}</h1></td>
<td><h1>{{ $b->education}}</h1></td>
</tr>
@endforeach