@include('admin.service.master')
        <h1>Edit  {{ $service->name }}</h1>


{{ Html::ul($errors->all()) }}

{{ Form::model($service, array('route' => array('service.update', $service->id), 'method' => 'PUT','files'=>'true')) }}

    <div class="form-group">
        {{ Form::label('name', 'name') }}
        {{ Form::text('name', old('name'), array('class' => 'form-control',1=>'autofocus')) }}
    </div>
  
    <div class="jumbotron text-center">
        
        <p>
            <img src="{{URl($service->URL)}}" alt="dcsdfsdf" srcset="" width="50px"><br>
              
        </p>
    </div>
    <div class="form-group">
        {{form::label('image','service picture')}}
        {{form::file('image')}}
    </div>

    {{ Form::submit('Edit the service!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>