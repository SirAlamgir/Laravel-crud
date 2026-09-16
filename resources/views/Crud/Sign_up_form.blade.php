<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
</head>
<body>
    <h3>Sign up form</h3>

    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="course" placeholder="Enter your Course">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>