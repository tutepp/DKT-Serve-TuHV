{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">{{__('Bảng quản lý bài viết')}}</h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="{{route("home.create")}}" class="btn btn-primary font-weight-bolder">
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
                </span>{{__('Tạo mới')}}</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">
        {{--Search Detail--}}
        <form style="margin-bottom: 20px" method="get" action="{{route('search')}}">
            <div class="row" style="margin-bottom: 5px">
                <div class="col-lg-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping" style="background-color: #e6e6ff "><i class="fas fa-book-reader"></i></span>
                        <input type="text" class="form-control" placeholder="{{__('Title')}}" aria-label="Tiêu đề" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping" style="background-color: #e6e6ff"><i class="far fa-newspaper"></i></span>
                        <select class="form-control form-control-solid" name="group_id">
                            @foreach($groups as $group)
                                <option>{{__('Danh mục bài viết')}}</option>
                                <option value="{{$group->id}}">{{$group->title}}</option>
                                @if($group->child)
                                    @foreach($group->child as $gr)
                                        <option value="{{$gr->id}}">--- {{$gr->title}} ---</option>
                                    @endforeach
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping" style="background-color: #e6e6ff"><i class="fas fa-toggle-on"></i></span>
                        <select class="form-control form-control-solid" name="status">
                            <option value="1">{{__('Hoạt động')}}</option>
                            <option value="0">{{__('Tạm ngừng')}}</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping" style="background-color: #e6e6ff ">
                            <i class="fas fa-thumbtack"></i>
                        </span>
                        <select class="form-control form-control-solid" name="position">
                            <option value="">{{__('Vị trí đặt')}}</option>
                            <option value="head-banner">head-banner</option>
                            <option value="intro-banner">intro-banner</option>
                            <option value="business-banner">business-banner</option>
                            <option value="enviroment-banner">enviroment-banner</option>
                            <option value="vision-banner">vision-banner</option>
                            <option value="manager-banner">manager-banner</option>
                            <option value="partner-banner">partner-banner</option>
                            <option value="recent_post-banner">recent_post-banner</option>
                            <option value="contact-banner">contact-banner</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping" style="background-color: #e6e6ff ">
                            <i class="far fa-calendar-alt">    {{__('Từ')}}</i>
                        </span>
                        <input type="date" class="form-control"  aria-label="from" aria-describedby="addon-wrapping" name="from">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping" style="background-color: #e6e6ff " >
                            <i class="far fa-calendar-alt">    {{__('Tới')}}</i>
                        </span>
                        <input type="date" class="form-control"  aria-label="to" aria-describedby="addon-wrapping" name="to">
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center" style="margin-top: 10px">
                <button type="submit" class="btn btn-success mr-2">{{__('Tìm kiếm')}}</button>
            </div>
        </form>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>{{__('STT')}}</th>
                    <th>{{__('Tiêu đề')}}</th>
                    <th>{{__('Danh mục bài viết')}}</th>
                    <th>{{__('Trạng thái')}}</th>
                    <th>{{__('Tác giả')}}</th>
                    <th>{{__('Ảnh')}}</th>
                    <th>{{__('Vị tri đặt')}}</th>
                    <th>{{__('Tác vụ')}}</th>
                </tr>
                </thead>
                <tbody id="listItems">
                @foreach($items as $key => $item)
                <tr>
                    <td>{{++$key}}</td>
                    <td style="text-overflow: Ellipsis;max-width: 200px;max-height: 50px;overflow: hidden;white-space: nowrap;">
                        <a href="{{$item->url}}">
                        {{$item->title}}
                        </a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success">{{$item->group[0]->title}}</button></td>
                    <td>
                        <?php
                        if($item->status == 1){
                          $status = "Hoạt động";
                          $color ="success";
                        }
                        else{
                          $status = "Tạm dừng";
                          $color ="dark";
                        }
                        ?>
                            <span class="label label-{{$color}}  label-pill label-inline mr-2">{{$status}}</span>
                    </td>
                    <td>{{$item->user->name}}</td>
                    <td><img src="{!! $item->image !!}" style=" max-height: 70px" class="d-flex justify-content-center"></td>
                    <td>{{$item->position}}</td>
                    <td>
                        <a href="{{route("home.edit",$item->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>

                        <i class="fas fa-trash" style="margin-left: 5px" data-token="{{ csrf_token() }}"  onclick="delete_item()" data-url="{{route("home.destroy",$item->id)}}"></i>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $items->links('vendor.pagination.simple-bootstrap-4') !!}
            </div>
        </div>

    </div>

@endsection

{{-- Styles Section --}}
@section('styles')
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>

    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')

    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
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
                    success: function(res) {
                       alert(res)
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
