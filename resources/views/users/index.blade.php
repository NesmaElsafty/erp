@extends ('../welcome')


@section ('content')
<?php 
    $pagename = 'Users';
?>
<!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><strong>All Users</strong></h3>
                    <div class="col-md-1" style="float:right;">
                        <a href="{{route('addUser')}}">
                        
                            <button type="button" title="Add User" class="btn btn-block btn-danger">
                                    <i class="fa fa-plus"></i>
                            </button>
                        </a>
                    </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Created at</th>
                            <th>Control</th>
                            <!-- <th></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        @if ($user->id == 1)
                        <?php echo ''; ?>
                        @else
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>
                                <a href="{{ route('users.show',$user->id) }}">
                                    {{$user->name}}
                                </a>
                            </td>
                            <td>{{$user->email}}</td>
                            <td>User</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                                    <a class="btn btn-primary" title="Edit" href="{{ route('users.edit',$user->id) }}">
                                    <i class="fa fa-pen"></i>
                                    </a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="Delete" class="btn btn-danger">
                                    <i class="fa fa-ban"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->
@endsection