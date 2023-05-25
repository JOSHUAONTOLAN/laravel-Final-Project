<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conditional Page</title>
</head>
<body>
      <h1>This is the condition Page</h1>
      @if(strlen($name) > 0)
           True: The length of Jhon Wick > 0.
      @else
           False:
      @endif
</body>
</html>


