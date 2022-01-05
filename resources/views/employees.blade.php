<table>
<tr>
<td>Név</td>
<td>Cég</td>
</tr>
@foreach($employees as $employee)
<tr>
<td>{{ $employee['name'] }}</td>
<td>{{ $employee['company_name'] }}</td>
</tr>
@endforeach
</table>