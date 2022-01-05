<style>
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
}
</style>

<div id="cim">Alkalmazott felvétele</div>

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
        <span style="color: red;">@error('salery'){{$message}}@enderror</span><br>
        <input type="number" name="salary"><br>
        <input type="submit" name="submit" value="Felvétel!">
    </form>
</div>


@if(isset($_GET['alert']))
    <script>alert('<?php print $_GET['alert']; ?>')</script>
@endif

<script>

/*   
function fetch(){
postData('http://localhost/CompanyManager/public/home', { answer: 42 })
  .then(data => {
    console.log(data); // JSON data parsed by `data.json()` call
});
}

async function postData(url = '', data = {}) {
  
  const response = await fetch(url, {
    method: 'GET',
    mode: 'cors',
    cache: 'no-cache',
    credentials: 'same-origin', 
    headers: {
      'Content-Type': 'application/json'

    },
    redirect: 'follow',
    referrerPolicy: 'no-referrer', 
    body: JSON.stringify(data) 
  });
  return response.json(); 
}
*/
</script>