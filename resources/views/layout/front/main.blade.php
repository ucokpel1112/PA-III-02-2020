<!DOCTYPE html>
<html>
<head>
    @include('layout.front.includes.head')
</head>
<body>
@include('layout.front.includes.header')

@yield("content")
@include('layout.front.includes.footer')
@include('layout.front.includes.modal')
@include('layout.front.includes.script')
</body>
</html>
