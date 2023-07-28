<input type="{{$type}}" {{$required}} class="{{$classes}} @error($names) is-invalid @enderror" id="{{$names}}"
       placeholder="{{$placeholder}}" name="{{$names}}" wire:model="{{$names}}" value="{{$value??old($names)}}">
<label class="ps-4" for="{{$names}}">
    {{$slot}}
    @if($required=='required')
    <span class="text-danger">*</span>
    @endif
</label>
<x-jet-input-error for="{{$names}}"/>
