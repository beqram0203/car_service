<!DOCTYPE html>
<html>
<head>
    <title>services</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('admin/') }}">MAIN PANEL</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('admin/service') }}">View All services</a></li>
            <li><a href="{{ URL::to('admin/service/create') }}">Create a service</a>
            </ul>
        </nav>