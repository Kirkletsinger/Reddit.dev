<!DOCTYPE html>
@if(session()->has('SUCCESS_MESSAGE'))
  <div class="alert alert-success">
      <p>{{session('SUCCESS_MESSAGE')}}</p>
    </div>
  @endif
<html lang="en">
<head>
    <title>Reddit</title>
</head>
<body>
    @yield('content')
</body>
</html>
