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

        @foreach($infos as $info)
            <li>
                <p>{{$info['name']}}</p>
                <a href="/getInfos/{{$info['id']}}">View Details</a>
            </li>
        @endforeach
        {{-- <li>
            <a href="/getInfos/{{$infos[0]["id"]}}">
        {{
                    $infos[0]["name"]
                }}
        </a>
        </li>
        <li>
            <a href="/getInfos/{{$infos[1]["id"]}}">
                {{
                    $infos[1]["name"]
                }}
            </a>
        </li>
        <li>Tufahel Here</li> --}}
    </ul>
</body>
</html>
