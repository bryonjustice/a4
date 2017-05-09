{
    "cols": [
        {"id":"","label":"Name","pattern":"","type":"string"},
        {"id":"","label":"Count","pattern":"","type":"number"}
    ],
    "rows": [
    @foreach($slices as $slice)
        {
            "c":[{"v":"{{ $slice->name }}",
            "f":null},
            {"v":{{ $slice->total }} ,
            "f":null}]},
    @endforeach
    ]
}
