<html>
<head>
     <title>Election Age Verifier</title>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
<body>
    <center><br><br><br><br><br><br><br><br>
        <h1>Election Age Verifier</h1>
        <form method="POST" action="/char">
             @csrf
             <label for="inputAge">Enter your age: </label>
             <input type="number" min="1" id="age" name="age" autofocus required />
             <button type="submit" name="submit_button">Check Age</button>
        </form>
        <br>
        <p style="color:blue:font-family: Arial;font-size:20px">age:{{$age}}</p>
        @if($age == 0)
        Please enter number!
        @elseif($age <=14)
        You are not Eligible to vote!
        @elseif($age <18)
        You are eligible to vote in SK Election!
        @else
        You are Eligible to vote National Election!
        @endif
    </center>      
</body>

</html>