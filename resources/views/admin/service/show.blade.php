@include('admin.service.master')
<h1>Showing {{ $service->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $service->name }}</h2>
        <p>
            <strong>service:</strong> <br>
            <img src="{{url($service->URL)}}" alt="dcsdfsdf" srcset="" ><br>
            
        </p>
    </div>

</div>
</body>
</html>