<x-app-layout>
    <div class="card">
        <div class="card-body">
            <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}">Back</a>
            </div>
        </div><br>
        
        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
        <div class="">

            <div class="row mg-b-20">
                <div class="parsley-input col-md-6" id="fnWrapper">
                    <label>UserName : <span class="tx-danger">*</span></label>
                    {!! Form::text('name', null, array('class' => 'form-control','required')) !!}
                </div>
                
                <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                    <label>Email : <span class="tx-danger">*</span></label>
                    {!! Form::text('email', null, array('class' => 'form-control','required')) !!}
                </div>
            </div>
            
        </div>
        
    
        <div class="row mg-b-20">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User Role</strong>
                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple'))
                    !!}
                </div>
            </div>
        </div>
        <div class="mg-t-30">
            <button class="btn btn-main-primary pd-x-20" type="submit">Update</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>  
</x-app-layout>