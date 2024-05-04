<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <form action="{{ route('submit-form') }}" method="post">
        @csrf
        <?php $username = "John Doe"; ?>
        <input type="text" name="username" value="<?php echo $username; ?>">
        <input type="submit" value="Submit">
    </form>
</body>

</html>