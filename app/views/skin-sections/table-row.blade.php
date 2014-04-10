@foreach ($elements as $element)
    <tr>
        <td class="element-row">
            <a href="/skins-content/{{$element->skin->id}}/{{$element->filename}}{{$element->ishd == 1 ? "@2x" : ""}}.{{$element->extension}}" class="fancybox element-filename">{{$element->filename}}</a>
        </td>
        <td>
            <!-- attributions -->
            @if(in_array($element->extension, array("jpg","jpeg","png")))
                <span class="label label-success label-margin">Sprite</span>
            @elseif(in_array($element->extension, array("mp3","ogg","wav")))
                <span class="label label-evenmoresuccess label-margin">Sound</span>
            @endif
            {{$element->issequence == 1 ? "<span class='label label-warning'>Animation</span>" : ""}}
            {{$element->ishd == 1 ? "<span class='label label-info'>HD</span>" : ""}}


        </td>
        <td>{{Helpers::formatSizeUnits($element->size)}}</td>
        @if (Auth::check() && Auth::user()->id == $element->skin->user->id)
            <td><a href="#" onclick="deleteRow(this,{{$element->id}})">Delete</a></td>
        @endif
    </tr>
@endforeach