{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Bảng quản lý thông tin
                    <div class="text-muted pt-2 font-size-sm">Bảng quản lý Items</div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{route('groups.create')}}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <circle fill="#000000" cx="9" cy="15" r="6"/>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Tạo mới</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">
            @foreach($groups as $groupParent)
            <div style="width: 50%;margin-top: 5px">
                 <div class="bg-success text-white py-2 px-4">{{$groupParent->title}}
                     <div style="float: right">
                         <a href="{{route("groups.edit",$groupParent->id)}}">
                             <i class="fas fa-edit" style="color: white"></i>
                         </a>
                         <i class="far fa-trash-alt" style="color: white" onclick="delete_group()" data-url="{{route("groups.destroy",$groupParent->id)}}"></i>
                     </div>
                 </div>
            @include('backend.child-menu',['groupParent'=>$groupParent])

            </div>
            @endforeach
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
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function delete_group(){
            var url = event.target.getAttribute("data-url");
            console.log(url)
            if (confirm('Bạn có muốn xoá Product này không?')) {
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

@endsection
