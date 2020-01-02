@extends('app')

@section('title', 'Contact')

@section('content')

<h1>Contact Form</h1>

<!--Forms-->
<form action="process.php" method="POST">
    <div>
        <label>Name</label>
        <input type="text" name="first-name" placeholder="First Name">
    </div>
    <br>

    <div>
        <label>Email</label>
        <input type="email" name="email">
    </div>
    <br>

    <div>
        <label>Message</label>
        <textarea type="Message"></textarea>
    </div>
    <br>

    <input type="submit" name="submit" value="Submit">
</form>

@endsection