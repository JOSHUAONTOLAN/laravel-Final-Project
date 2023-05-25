<html>
<head>
    <title>Election Verifier</title>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
<body>
    <center><br><br><br><br><br><br><br><br>
    <h1>Election Age Verifier</h1><br>
        <form method="POST" action="/ageVerifier">
             @csrf
             <label for="inputName">Enter your age: </label>
             <input type="number" id="AgeVerifier" name="inputAge" required />
             <br><br><button type="submit">Check Age</button>
        </form>
        <br>
            <p style="color: blue;">{{$age}}</p>
    </center>      
</body>

</html>