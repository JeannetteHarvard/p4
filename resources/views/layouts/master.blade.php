<!DOCTYPE html>
  <html lang="en">
      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <!-- Optional theme -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

          <link href="/css/styles.css?v=<?=time();?>" type='text/css' rel='stylesheet'>

    <title>
        {{-- Yield the title if it exists, otherwise default to 'Alliances Management System' --}}
        @yield('title','Alliances Management System')
    </title>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>


      <header class=bgimage>
          <a href="/" id="bckgr-img-link">Home Page</a>
      </header>

      @if(Session::get('flash_message') != null))
          <div class='flash_message'>{{ Session::get('flash_message') }}</div>
      @endif
      @if(Session::get('flash_message_red') != null))
          <div class='flash_message_red'>{{ Session::get('flash_message_red') }}</div>
      @endif


      <div class="container">
        <div  class="col-xs-12">
        <div class="col-lg-6"> <!-- left menu div -->
          @if(Route::current()->getName() != 'HomePage')
            <a href="{{ route('HomePage') }}">Home</a>

            @if(strpos(Route::current()->getName(),'partners') === 0)
              / <a href="{{ route('partners.index') }}">Partners</a>
            @endif
            @if(strpos(Route::current()->getName(),'technologies') === 0)
              / <a href="{{ route('technologies.index') }}">Technologies</a>
            @endif
            @if(strpos(Route::current()->getName(),'contacts') === 0)
              / <a href="{{ route('contacts.index') }}">Contacts</a>
            @endif

            <br><br>
          @endif
        </div>
        <div class="col-lg-6"  align='right'> <!-- right menu div -->

                  @if(Auth::check())
                      Logged in User: <b><?php echo ucwords(Auth::user()->name); ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
                      <a href='/partners'>My Partners</a> /
                      <a href='/logout'>Log out</a>
                  @else
                      <a href='/login'>Log in</a> /
                      <a href='/register'>Register</a>
                  @endif

        </div>
      </div>
      </div>

      <div class="container">

              {{-- Main page content will be yielded here --}}
              @yield('content')

      </div>


      <br>

      <div class="container">
          @if(Route::current()->getName() != 'HomePage')
                <script>
                  document.write('<a href="' + document.referrer + '"><< Back</a>');
                </script>
          @endif
          <br><br>
          <footer>
              &copy; {{ date('Y') }} by Jeannette DuVal
          </footer>
      </div>
          <!-- Latest compiled and minified JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

      </body>
      </html>
