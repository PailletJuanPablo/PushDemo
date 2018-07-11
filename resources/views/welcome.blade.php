
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Stars Wars Push Sender </a>
     
    </div>
  </nav>

  <div class="container"> 
<div class="row">
<div class="card"> 
<form class="col s12" action="{{route('/send')}}" method="POST">
{{ csrf_field() }}

<h3>Enter Notification Title and Body and press send</h3>
<h4> Will be sended to the stars wars app instant</h4>



      <div class="input-field col s12">
        <input id="title" type="text" name="title" class="validate" required>
        <label for="title">Notification Title</label>
      </div>



      <div class="input-field col s12">
        <input id="body" type="text"  name="body"  class="validate" required>
        <label for="body">Notification Text</label>
      </div>


  <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </form>




  </div>
  @if (session('response'))
  <div class="row">
    <div class="col s12 m5">
      <div class="card-panel blue lighten-3">
  
    <div class="alert alert-success">
        {{ session('response') }}
    </div>

      </div>
    </div>
  </div>
  @endif
</div>
</div>
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    </body>
  </html>
        