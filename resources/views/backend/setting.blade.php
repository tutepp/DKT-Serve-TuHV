{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <form action="{{route("setting.update",'---')}}" method="POST">
        @method('PUT')
        @csrf
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Cấu hình hệ thống</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary font-weight-bolder">
                        <i class="flaticon2-check-mark"></i>{{__('Cập nhật')}}</button>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <div class="example-preview">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home">
																	<span class="nav-icon">
																		<i class="flaticon2-chat-1"></i>
																	</span>
                                <span class="nav-text">Thông tin website</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile">
																	<span class="nav-icon">
																		<i class="flaticon2-layers-1"></i>
																	</span>
                                <span class="nav-text">Email</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" aria-controls="contact">
																	<span class="nav-icon">
																		<i class="flaticon2-rocket-1"></i>
																	</span>
                                <span class="nav-text">Mã nhúng script</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            @foreach($settings as $setting)
                                @if($setting->type == 'info')
                                    <div class="form-group">
                                        <label for="{{$setting->name}}"> {{__($setting->name)}} </label>
                                        <input type="text" name="{{$setting->name}}" id="{{$setting->name}}" class="form-control" value="{{$setting->val}}" placeholder="{{__($setting->name)}}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Tab content
                            2
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Tab content
                            3
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function delete_item(){
            var url = event.target.getAttribute("data-url");
            console.log(url)
            if (confirm('Bạn có muốn xoá Item này không?')) {
                $.ajax({
                    type: 'delete',
                    url: url,
                    success: function(response) {
                        alert('Delete  success!')
                        window.location.reload();
                    },
                })
            }
        }

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('keyup','#keyword',function () {
                var keyword = $(this).val();
                $.ajax({
                    type:"get",
                    url:"/search",
                    data:{
                        keyword:keyword
                    },
                    dataType:"json",
                    success:function (response) {
                        $('#listItems').html(response);
                    }
                })

            })
        })

    </script>
@endsection
