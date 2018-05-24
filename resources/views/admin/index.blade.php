<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">                   
    <title>admin</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
    <style>
        #ds,.ds{
            float:right;
        }
    </style>
    <div class="container">
        
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL('admin/') }}">PANEL</a>
            </div>
            <ul class="nav navbar-nav ">
                <li><a href="#">hello</a></li>
                
            </ul>
            <ul class="nav navbar-nav ds">
                
                <li id="ds">
                    
                        <a class="item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         log out
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
            
            </li>
        
            </ul>
        </nav>
    </div>
    <div class="container jumbotron text-center">
    <main>
    <a href="{{URL('/admin/slides')}}" class="btn btn-info">{{$sub}}<br>Subscribers</a>
    <a href="{{URL('/admin/service')}}" class="btn btn-info">{{$s}}<br>services</a>
    <a href="{{URL('/admin/slide')}}" class="btn btn-info">{{$sld}}<br>slides</a>
    <a href="{{URL('/admin/social')}}" class="btn btn-info">{{$ds}}<br>Social Links</a>
    </main>
    </div>
</body>
</html>