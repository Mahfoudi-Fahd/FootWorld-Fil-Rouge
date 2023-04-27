<x-app-layout>
        <div class="row">
            <div class="col-md-12">
                <div class="card mg-b-20">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            <div class="pull-right">
                                <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}">Back</a>
                            </div>
                        </div>
                        <div class="row">
                            <!-- col -->
                            <div class="col-lg-4">
                                <ul id="treeview1">
                                    <li><a href="#">{{ $role->name }}</a>
                                        <ul>
                                            @if(!empty($rolePermissions))
                                            @foreach($rolePermissions as $v)
                                            <li>{{ $v->name }}</li>
                                            @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- /col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>