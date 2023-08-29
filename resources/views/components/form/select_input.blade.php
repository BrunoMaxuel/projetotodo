<div class="input_area">
  <label for="{{$name}}">
    {{$label ?? ''}}
  </label>
  <select name="{{$name}}" id="{{$name}}" {{empty($required) ? 'required': ''}}>
    <option value="" selected disabled>{{$selectCat}}</option>
    {{$slot}}
  </select>
</div>
