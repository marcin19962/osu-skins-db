@if (Auth::check() && Auth::user()->id == $skin->user->id)
    <form action="/skins/upload-element/{{$skin->id}}" class="dropzone dz-clickable dropzone-custom" id="my-awesome-dropzone">
        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
    </form>
@endif
<table class="table table-bordered" id="fileslist">
    <tr>
        <th>Element Name</th>
        <th>Attributes</th>
        <th style="width:10%;">Size</th>
        <th style="width:10%;">Options</th>
    </tr>
    @include('/skin-sections/table-row', array('elements' => $skin->SkinElement))
</table>