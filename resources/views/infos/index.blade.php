<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos</title>
</head>
<body>
    <h2>Info page</h2>
    <p>{{ $greeting }}</p>
    <ul>
        <li>
            <a href="">
                {{
                    $infos[0]["name"]
                }}
            </a>
        </li>
        <li>
            <a href="">
                {{
                    $infos[1]["name"]
                }}
            </a>
        </li>
        <li>Tufahel Here</li>
    </ul>
</body>
</html>
