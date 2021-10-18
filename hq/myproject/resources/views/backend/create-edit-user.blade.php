{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">HTML Table
                    <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div>
                </h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>

        <div class="card-body">
        <?php
        if(isset($user)){
            $action = route("users.update",$user->id);
        }
        else{
            $action = route("users.store");
        }
        ?>

        <!--begin::Search Form-->

            <div class="card card-custom">
                <form class="form" method="post" action="{{$action}}">
                    @if(isset($user))
                        @method('PUT')
                    @endif
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control"  id="name" placeholder="Tên" name="name" value="{{$user->name ?? ""}}"/>
                            </div>

                            <div class="form-group" >
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{$user->email ?? ""}}"/>
                            </div>

                            <div class="form-group" >
                                <label>Password</label>
                                <input type="password" class="form-control"  placeholder="Mật khẩu" name="password" value="{{$user->password ?? ""}}"/>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label>Image</label>
                                    <div>
                                        <button type="button" id="ckfinder-popup-1" class="btn btn-success">Browse Server</button>
                                        <input value ="{{$user->image ?? ""}}" id="ckfinder-input-1" class="form-control" type="text" style="width:60%; display: inline-block" name="image">
                                    </div>
                                </div>
                                <div class="col" style="margin-top: 35px">
                                    <img src="{{$user->image ?? ""}}" id="image_result" style="width: 400px;height: 300px">
                                </div>
                            </div>

                            <div class="d-flex justify-content-center" style="margin-top: 50px">
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script>
        var button1 = document.getElementById( 'ckfinder-popup-1' );
        button1.onclick = function() {
            selectFileWithCKFinder( 'ckfinder-input-1' );
        };
        function selectFileWithCKFinder( elementId ) {
            CKFinder.modal( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        var output = document.getElementById( elementId );
                        output.value = file.getUrl();
                        document.getElementById('image_result').src =file.getUrl();
                    } );

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( elementId );
                        output.value = evt.data.resizedUrl;
                    } );
                }
            } );
        }
    </script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@endsection
