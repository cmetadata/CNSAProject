@extends ('layout.header')

@section ('content')

  <!--This page needs work... and idk why things are different sizes-->
  <h1 class="content-header grey-back">[Team1] vs [Team2]</h1>
  <br/>
	<p>[Date]<br/>
  <a href=#>[Stadium]</a></p><br/>

  <table width="100%">
  	<tr>
  		<td width="50%"><a href=#>{{$teamName1->teamName}}</a></td>
  		<td width="50%"><a href=#>{{$teamName2->teamName}}</a></td>
  	</tr>
  	<tr>
  		<td width="50%"><a href=#>[Player 1]</a></td>
  		<td width="50%"><a href=#>[Player 2]</a></td>
  	</tr>
  </table>

@endsection