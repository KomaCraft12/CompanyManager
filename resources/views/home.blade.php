<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div#form {
    width: 100%;
    padding-left: 25%;
    padding-right: 25%;

}
</style>


<div id="form">
<form method="post">
<label>Cég</label><br>
<select>
@foreach($companies as $company)
<option value="{{ $company['company_id'] }}">{{ $company['company_name'] }}</option>
@endforeach
</select>
<br>
<label>Név</label><br>
<input type="text" name="name"><br>
<label>Fizetés</label><br>
<input type="text" name="salery"><br>
<input type="submit" name="submit" value="submit">
</form>
</div>