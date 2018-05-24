@include('admin.service.master')
            
            <h1>Create a service</h1>
            
            
            {{ Html::ul($errors->all()) }}
            
            {{ Form::open(array('url' => 'admin/service','files'=>'true')) }}
            
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', old('name'), array('class' => 'form-control',1=>'autofocus')) }}
            </div>
            
            <div class="form-group">
                {{form::label('service picture','service picture')}}
                {{form::file('image')}}
            </div>
            
            
            {{ Form::submit('Create the service!', array('class' => 'btn btn-primary')) }}
            
            {{ Form::close() }}
            
        </div>
    </body>
    </html>