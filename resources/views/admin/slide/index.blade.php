@include('admin.slide.master')
        
        <h1>All the slides</h1>
        
        
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
            @foreach($slides as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->headName }}</td>
        
                    
                    <td>
        
                        <a class="btn btn-small btn-success" href="{{ URL('admin/slide/' . $value->id) }}">Show this Slide</a>
        
                        
                        <a class="btn btn-small btn-info" href="{{ URL('admin/slide/' . $value->id . '/edit') }}">Edit this Slide</a>
                        
                            {{ Form::open(array('url' => 'admin/slide/' . $value->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete this slide', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                        
                        
                        
        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        
        </div>
        </body>

</body>
</html>