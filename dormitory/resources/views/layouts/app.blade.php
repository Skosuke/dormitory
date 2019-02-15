<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>シェアハウス</title>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> --}}
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <nav class="nav">
      </nav>
    </header>
    <main>
      @yield('child')
      <div class="box-container" style="width: 300px; height: 300px; background: gray; margin-bottom: 10px;">
        <div class="bg-primary text-center w-50 h-25">box</div>
      </div>
      <div class="box-container" style="width: 300px; height: 300px; background: gray;">
        <div class="bg-info text-center w-50 h-25">info</div>
      </div>
    </main>
    <footer>
    </footer>
  </div>
</body>
</html>