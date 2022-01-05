<style>


</style>


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