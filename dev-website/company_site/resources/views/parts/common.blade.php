<!DOCTYPE html>
<html lang="ja">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	@isset($title)
	<title>{{ $title }} - 株式会社○○</title>
	@else
	<title>株式会社○○</title>
	@endisset

	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />

	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

</head>