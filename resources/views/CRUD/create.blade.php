<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
<div class="form-group">
  <form action="{{route('fill_data.store')}}" method="post" enctype="multipart/form-data">
  @csrf

  <br>
  <h1>Insert information about COVID-19 </h1>
    <div class="form-group">
      <label >Country</label><br>
      <input type="text" name="country" class="form-control" >
    </div>
    @error('country')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Cases</label><br>
      <input type="number" name="cases" class="form-control" >
    </div>
    @error('cases')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Today Cases</label><br>
      <input type="number" name="todayCases" class="form-control">
    </div>
    @error('todayCases')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Deaths</label><br>
      <input type="number" name="deaths" class="form-control">
    </div>
    @error('deaths')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Today Deaths</label><br>
      <input type="number" name="todayDeaths" class="form-control">
    </div>
    @error('todayDeaths')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Recovered</label><br>
      <input type="number" name="recovered" class="form-control">
    </div>
    @error('recovered')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Active</label><br>
      <input type="number" name="active" class="form-control">
    </div>
    @error('active')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Critical</label><br>
      <input type="number" name="critical" class="form-control">
    </div>
    @error('critical')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Cases Per One Million</label><br>
      <input type="number" name="casesPerOneMillion" class="form-control">
    </div>
    @error('casesPerOneMillion')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Deaths Per One Million</label><br>
      <input type="number" name="deathsPerOneMillion" class="form-control">
    </div>
    @error('deathsPerOneMillion')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Total Tests</label><br>
      <input type="number" name="totalTests" class="form-control">
    </div>
    @error('totalTests')
    <span style="color:red">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label>Tests Per One Million</label><br>
      <input type="number" name="testsPerOneMillion" class="form-control">
    </div>
    @error('testsPerOneMillion')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <button type="submit" style="margin-left:auto;margin-right:auto;display:block;" class="btn btn-primary">Submit</button>
    <br>
  </form>
</div>