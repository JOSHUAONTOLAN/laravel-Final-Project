<html>
<head>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
<body>
    <center><br><br><br><br><br><br><br><br>
        <form method="POST" action="/ageVerifier">
             @csrf
             <p style="color: blue ;">Election Age Verified</label><br><br>
             <label for="inputName">Enter your age: </label>
             <input type="number" id="inputName" name="inputName" required />
             <br><br><button type="submit">Check Age</button>
        </form>
        <br>
            <p style="color: blue;">{{$name}}</p>
    </center>      
</body>

</html>