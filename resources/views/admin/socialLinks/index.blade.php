<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">                   
    <title>Social Links</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('admin/') }}">MAIN PANEL</a>
            </div>
            </nav>
        
        <h1>All the Social Links</h1>
        
        
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>name</td>
                    <td>URl</td>
                    <td>update</td>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($s as $key => $value)
            {{ Form::open(array('url' => 'admin/social/' . $value->id,'method' => 'PUT')) }}
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{$value->name}}</td>
                    <td><input type="text" name="ds" value='{{ $value->URL}}' ></td>
        
                    
                    <td>
                        {{ Form::submit('update this slide', array('class' => 'btn btn-small btn-info')) }}
                        
                        
                    </td>
                </tr>
                {{ Form::close() }}
            @endforeach
            </tbody>
        </table>
        
        
        </div>
        </body>

</body>
</html>