<html>
    <head>
        <title>data insert</title>
    </head>
    <body>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <form method="POST" action="/students">
            {{csrf_field()}}
            <input type="text" name="fname" placeholder="fname"><br>
            <input type="text" name="lname" placeholder="lname"><br>
            <input type="text" name="gender" placeholder="gender"><br>
            <input type="date" name="DOB" placeholder="DOB"><br>
            <input type="text" name="age" placeholder="age"><br>
            <input type="text" name="Semester" placeholder="Semester"><br>
            <input type="text" name="Registration_No" placeholder="Registration_No"><br>
            <input type="text" name="PIN" placeholder="PIN"><br>
            <input type="date" name="Course_Period" placeholder="Course_Period"><br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="text" name="phone" placeholder="phone"><br>
            <input type="text" name="address" placeholder="address"><br>
            <input type="text" name="nationality" placeholder="nationality"><br>
            <input type="text" name="image" placeholder="image"><br>
            <button type="submit" >submit</button>
        </form>
    </body>
</html>