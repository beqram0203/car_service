@include('admin.slide.master')

<h1>Showing {{ $slide->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $slide->headName }}</h2>
        <p>
            <strong>slide:</strong> <br>
            <img src="{{URl('images/slide')}}/{{$slide->name}}" alt="dcsdfsdf" srcset="" width="500px"><br>
            <strong>date:</strong><p>{{$slide->date}}</p>
        </p>
    </div>

</div>
</body>
</html>