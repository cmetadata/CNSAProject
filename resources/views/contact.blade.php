@extends ('layout.header')

@section ('content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <h1 class="content-header grey-back">Contact Information</h1>

  <div class="object-div grey-back">
    <table width="35%">
    	<tr>
    		<td width="10%"><a href=#><b>Phone Number:</b></a></td>
    		<td width="10%"><a href=#>(999) 123-4567</a></td>
    	</tr>
    	<tr>
    		<td width="10%"><a href=#><b>Email:</b></a></td>
    		<td width="10%"><a href=#>example@placeholder.com</a></td>
    	</tr>
    </table>
  </div>

  <br/>

  <a href="https://twitter.com/intent/tweet?screen_name=CNSA&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @CNSA</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  <div class="fb-share-button" data-href="https://www.facebook.com/CNSA/?ref=br_rs" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FCNSA%2F%3Fref%3Dbr_rs&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">CNSA</a></div>


@endsection