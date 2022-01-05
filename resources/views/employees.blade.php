<style>
body {
    background-color: 	#DCDCDC;
}
#employees {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#employees td, #employees th {
  border: 1px solid #ddd;
  padding: 8px;
  width: 50%;
  background-color: white;
}

#employees tr:nth-child(even){background-color: #f2f2f2;}

#employees tr:hover {background-color: #ddd;}

#employees th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #808080;
  color: white;
}
div#table {
    width: 100%;
    padding-left: 25%;
    padding-right: 25%;
}
div#cim {
    font-size: 24pt;
    color: black;
    text-align: center;
    margin-bottom: 15px;
}
</style>

<div id="cim">Alkalmazottak listája</div>
<div id="table">
<table id="employees">
<tr>
<th id='name'>Név</th>
<th id='company'>Cég</th>
</tr>
@foreach($employees as $employee)
<tr>
<td>{{ $employee['name'] }}</td>
<td>{{ $employee['company_name'] }}</td>
</tr>
@endforeach
</table>
<a href="home">Alkalmazott hozzáadása</a>
</div>