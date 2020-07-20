<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/show-style.css') }}" />
</head>
<body>

<div class="information">
  <table class="table">
    <tr>
      <th scope="col">Country</th>
      <th scope="col">Cases</th>
      <th scope="col">Today Cases</th>
      <th scope="col">Deaths</th>
      <th scope="col">Today Deaths</th>
      <th scope="col">Recovered</th>
      <th scope="col">Active</th>
      <th scope="col">Critical</th>
      <th scope="col">Cases Per One Million</th>
      <th scope="col">Deaths Per One Million</th>
      <th scope="col">Total Tests</th>
      <th scope="col">Tests Per One Million</th>
    </tr>
    <tr>
      <td scope="row" >{{$covid19->country}}</td>
      <td scope="row">{{$covid19->cases}}</td>
      <td scope="row">{{$covid19->todayCases}}</td>
      <td scope="row">{{$covid19->deaths}}</td>
      <td scope="row">{{$covid19->todayDeaths}}</td>
      <td scope="row">{{$covid19->recovered}}</td>
      <td scope="row">{{$covid19->active}}</td>
      <td scope="row">{{$covid19->critical}}</td>
      <td scope="row">{{$covid19->casesPerOneMillion}}</td>
      <td scope="row">{{$covid19->deathsPerOneMillion}}</td>
      <td scope="row">{{$covid19->totalTests}}</td>
      <td scope="row">{{$covid19->testsPerOneMillion}}</td>
    </tr>
  </table>
  <br><br>
  <a href="{{route('fill_data.edit', $covid19)}}" class="btn btn-primary"> Update </a>
</div>