<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Info Network</h1>
            <a href="/getInfos">
                All Infos
            </a>
            <span> | </span>
            <a href="/getInfos/create">
                Create New Info
            </a>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>
</body>
</html>