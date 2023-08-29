<div class="taks {{$data['is_done'] ? 'task_done' : 'task_pending'}}">
  <div class="title">
    <input class="checkBox" type="checkbox" onchange="taskUpdate(this)" data-id="{{$data['id']}}"
           @if($data && $data['is_done'])
             checked
      @endif
    />
    <div class="tasks_title">{{$data['title'] ?? ''}}</div>
  </div>
  <div class="priority">
    <div class="sphere"></div>
    <div>{{$data['description'] ?? ''}}</div>
  </div>
  <div class="action">
    <a href="{{route('task.edit', ['id' => $data['id']])}}">
      <img src="/assets/images/icon-edit.png" alt="">
    </a>
    <a href="{{route('task.delete', ['id' => $data['id']])}}">
      <img src="/assets/images/icon-delete.png" alt="">
    </a>
  </div>
</div>





{{--<script>--}}
{{--  async function taskUpdate(element) {--}}
{{--    let status = element.checked;--}}
{{--    let taskId = element.dataset.id;--}}
{{--    let url = '{{ route('task.update')}}'--}}
{{--    let rawResult = await fetch(url, {--}}
{{--      method: 'POST',--}}
{{--      headers: {--}}
{{--        'Content-Type': 'application/json',--}}
{{--        'accept': 'application/json'--}}
{{--      },--}}
{{--      body: JSON.stringfy({status, taskId})--}}
{{--    });--}}
{{--    await result = rawResult.json();--}}
{{--    console.log(result);--}}
{{--  }--}}
{{--</script>--}}


