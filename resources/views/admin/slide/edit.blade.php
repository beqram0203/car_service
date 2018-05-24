@include('admin.slide.master')
<h1>Edit {{ $slide->headName }}</h1>


{{ Html::ul($errors->all()) }}

{{ Form::model($slide, array('route' => array('slide.update', $slide->id), 'method' => 'PUT','files'=>'true')) }}

    <div class="form-group">
        {{ Form::label('name', 'headName') }}
        {{ Form::text('headName', old('headName'), array('class' => 'form-control',1=>'autofocus')) }}
    </div>
    <div class="form-group">
        {{ Form::label('date', 'date') }}
        {{form::date('date')}}
    </div>
    <div class="jumbotron text-center">
        
        <p>
            <img src="{{URl($slide->URl)}}" alt="dcsdfsdf" srcset=""><br>
              
        </p>
    </div>
    <div class="form-group">
        {{form::label('slide picture','slide picture')}}
        {{form::file('image')}}
    </div>

    {{ Form::submit('Edit the slide!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>