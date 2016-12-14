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
      </header>


      <div class="container">
          @if(Route::current()->getName() != 'HomePage')
            <a href="{{ route('HomePage') }}">Home</a>


            @if(is(Route::current()->getName(), 'partners.*'))
              / <a href="{{ route('partners.index') }}">Partners</a>
            @endif

            <br><br>
          @endif
      </div>

      <div class="container">

              {{-- Main page content will be yielded here --}}
              @yield('content')

      </div>


      <br><br>

      <div class="container">
          <footer>
              &copy; {{ date('Y') }} by Jeannette DuVal
          </footer>
      </div>
          <!-- Latest compiled and minified JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      </body>
      </html>
