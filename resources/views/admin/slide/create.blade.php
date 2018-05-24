@include('admin.slide.master')
            
            <h1>Create a slide</h1>
            
            
            {{ Html::ul($errors->all()) }}
            
            {{ Form::open(array('url' => 'admin/slide','files'=>'true')) }}
            
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', old('name'), array('class' => 'form-control',1=>'autofocus')) }}
            </div>
            <div class="form-group">
                {{ Form::label('date', 'date') }}
                {{form::date('date')}}
            </div>
            <div class="form-group">
                {{form::label('slide picture','slide picture')}}
                {{form::file('image')}}
            </div>
            
            
            {{ Form::submit('Create the slide!', array('class' => 'btn btn-primary')) }}
            
            {{ Form::close() }}
            
        </div>
    </body>
    </html>