{
    "cols": [
        {"id":"","label":"Priority","pattern":"","type":"string"},
        {"id":"","label":"Count","pattern":"","type":"number"}
    ],
    "rows": [
    @foreach($slices as $slice)
        {
            "c":[{"v":"Priority {{ $slice->priority_id }}",
            "f":null},
            {"v":{{$slice->total}} ,
            "f":null}]},
    @endforeach
    ]
}
