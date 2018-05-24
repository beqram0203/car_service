
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">                   
    <title>slides</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL('admin/') }}">MAIN PANEL</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL('admin/slide') }}">View All slides</a></li>
                <li><a href="{{ URL('admin/slide/create') }}">Create a slide</a>
            </ul>
        </nav>