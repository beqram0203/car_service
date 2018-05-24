@include('admin.service.master')
        
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
            @foreach($service as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
        
                    
                    <td>
        
                        <a class="btn btn-small btn-success" href="{{ URL('admin/service/' . $value->id) }}">Show this service</a>
        
                        
                        <a class="btn btn-small btn-info" href="{{ URL('admin/service/' . $value->id . '/edit') }}">Edit this service</a>
                        
                            {{ Form::open(array('url' => 'admin/service/' . $value->id, 'class' => 'pull-right')) }}
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