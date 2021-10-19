@if($groupParent->child->count())
    @foreach($groupParent->child as $groupChild)
        <div style="margin-left: 50px;margin-top: 5px">
            <div class="bg-warning text-white py-2 px-4">--- {{$groupChild->title}} ---
                <div style="float: right">
                    <a href="{{route("groups.edit",$groupChild->id)}}">
                        <i class="fas fa-edit" style="color: white"></i>
                    </a>
                    <i class="far fa-trash-alt" style="color: white" onclick="delete_group()" data-url="{{route("groups.destroy",$groupChild->id)}}"></i>
                </div>
            </div>
        </div>
    @endforeach
@endif
