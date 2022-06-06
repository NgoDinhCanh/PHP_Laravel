<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!-- Normal .php -->
    <!-- <header>
        <h1>HEADER</h1>
        <h2><?php echo $title; ?></h2>
    </header>
    <main>
        <h1>Noi dung</h1>
        <h2><?php echo $content; ?></h2>
    </main> -->
    <!-- .blade.php -->
    <header>
        <h1>HEADER</h1>
        <h2>{{$title}}</h2>
    </header>
    <main>
        <h1>Noi dung</h1>
        <h2>{{$content}}</h2>
    </main>
</body>
</html>