<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
<div class="form-group">

  <form  action="{{route('fill_data.update', $covid19)}}" method="post" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
  <br>
  <h1 >Edit COVID-19 infotamtion</h1>

    <div class="form-group">
      <label for="country">Country</label><br>
      <input type="text" name="country" class="form-control" value="{{$covid19->country}}">
    </div>
    @error('country')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Cases</label><br>
      <input type="number" name="cases" value="{{$covid19->cases}}" class="form-control">
    </div>
    @error('cases')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Today Cases</label><br>
      <input type="number" name="todayCases" value="{{$covid19->todayCases}}" class="form-control">
    </div>
    @error('todayCases')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Deaths</label><br>
      <input type="number" name="deaths" value="{{$covid19->deaths}}" class="form-control">
    </div>
    @error('deaths')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Today Deaths</label><br>
      <input type="number" name="todayDeaths" value="{{$covid19->todayDeaths}}" class="form-control">
    </div>
    @error('todayDeaths')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Recovered</label><br>
      <input type="number" name="recovered" value="{{$covid19->recovered}}" class="form-control">
    </div>
    @error('recovered')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Active</label><br>
      <input type="number" name="active" value="{{$covid19->active}}" class="form-control">
    </div>
    @error('active')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Critical</label><br>
      <input type="number" name="critical" value="{{$covid19->critical}}" class="form-control">
    </div>
    @error('critical')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Cases Per One Million</label><br>
      <input type="number" name="casesPerOneMillion" value="{{$covid19->deathsPerOneMillion}}" class="form-control">
    </div>
    @error('casesPerOneMillion')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Deaths Per One Million</label><br>
      <input type="number" name="deathsPerOneMillion" value="{{$covid19->casesPerOneMillion}}" class="form-control">
    </div>
    @error('deathsPerOneMillion')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Total Tests</label><br>
      <input type="number" name="totalTests" value="{{$covid19->totalTests}}" class="form-control">
    </div>
    @error('totalTests')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <div class="form-group">
      <label>Tests Per One Million</label><br>
      <input type="number" name="testsPerOneMillion" value="{{$covid19->testsPerOneMillion}}" class="form-control">
    </div>
    @error('testsPerOneMillion')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <button type="submit" class="btn btn-success">Save</button>

  </form>
</div>

</body>
</html>
