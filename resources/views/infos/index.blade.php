<x-layout>
    <h2>Info page</h2>
    <ul>

        @foreach($infos as $info)
            <li>
                <x-card href="/getInfos/{{$info['id']}}">
                    <h3>{{$info['name']}}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>