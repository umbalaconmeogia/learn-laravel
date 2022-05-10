<!DOCTYPE html>
<head>

@isset($title)
<title>{{ $title }} - 株式会社○○</title>
@else
<title>株式会社○○</title>
@endisset

<link rel="stylesheet" href="{{  asset('css/style.css') }}" />
</head>