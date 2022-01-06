<style>
body {
    background-color: 	#DCDCDC;
}
input[type=text], input[type=number], select {
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

div#form {
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

<!-- Cim kiirása -->
<div id="cim">
<img src="https://web.komaweb.eu/employees.png" width="256px">
<br>
Alkalmazott felvétele
</div>

<!-- Form - alkalmazott adatainak felvétele -->
<div id="form">
    <form action="homes" method="post">
        @csrf
        <label>Cég</label><br>
        <select name="company_id">
        @foreach($companies as $company)
        <option value="{{ $company['company_id'] }}">{{ $company['company_name'] }}</option>
        @endforeach
        </select>
        <br>
        <label>Név</label><br>
        <span style="color: red;">@error('name'){{$message}}@enderror</span><br>
        <input type="text" name="name"><br>
        <label>Fizetés</label><br>
        <span style="color: red;">@error('salary'){{$message}}@enderror</span><br>
        <input type="number" name="salary"><br>
        <input type="submit" name="submit" value="Felvétel!">
    </form>
    <a href="employees">Alkalmazottak</a>
</div>

<!-- Értesités a sikeres adat hozzáadásról -->
@if(isset($_GET['alert']))
    <script>alert('<?php print $_GET['alert']; ?>'); window.location.href="home";</script>
@endif