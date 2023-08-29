<div class="input_area">
  <label for="{{$name}}">
    {{$label ?? ''}}
  </label>
  <input
    type="checkbox"
    name="{{$name}}"
    id="{{$name}}"
    value="1"
    {{$checked ? 'checked' : ''}}
  />
</div>
