@include('admin.slide.master')
        
        <h1>All the slides</h1>
        
        
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>email</td>
                    <td>date</td>
                </tr>
            </thead>
            <tbody>
            @foreach($slide as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        
        </div>
        </body>

</body>
</html>