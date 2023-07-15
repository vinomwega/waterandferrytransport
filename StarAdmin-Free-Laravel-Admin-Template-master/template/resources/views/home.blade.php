@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            l<div class="card">
                <div class="card-header">{{_('Dashbord') }}</div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ _('you are logged in!')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
