{
    "cols": [
        {"id":"","label":"State","pattern":"","type":"string"},
        {"id":"","label":"Count","pattern":"","type":"number"}
    ],
    "rows": [
    @foreach($slices as $slice)
        {
            "c":[{"v":"{{ $slice->state }}",
            "f":null},
            {"v":{{ $slice->total }} ,
            "f":null}]},
    @endforeach
    ]
}
