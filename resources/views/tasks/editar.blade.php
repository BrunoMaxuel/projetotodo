<x-layout page-title="MDM Todo: Editar Tarefa">
  <x-slot:btn>
    <x-button href="{{route('home')}}">Voltar</x-button>
  </x-slot:btn>

  <section id="task_section">

    <h1>Editar Tarefa</h1>

    <form method="POST" action="{{route('task.edit_action')}}">
      @csrf
      <input type="hidden" name="id" value="{{$task->id}}"/>

      <x-form.checkbox_input
        name="is_done"
        label="Tarefa Realizada"
        checked="{{$task->is_done}}"
      />

      <x-form.text_input
        type="text"
        label="Titulo da Tarefa"
        name="title"
        required="required"
        placeholder="Digite o titulo da Tarefa"
        value="{{$task->title}}"
      />

      <x-form.text_input
        label="Data de Realização"
        name="due_date"
        type="datetime-local"
        required="required"
        value="{{$task->due_date}}"
      />

      <x-form.select_input
        label="Categoria"
        name="category_id"
        required="required"
        select-cat="Selecione uma categoria"
      >
        @foreach($categories as $category)
          <option value="{{$category->id}}"
                  @if($category->id == $task->category_id)
                    selected
            @endif
          >{{$category->title}}</option>
        @endforeach

      </x-form.select_input>

      <x-form.textArea_input
        label="Descrição da Tarefa"
        name="description"
        placeholder="Digite uma descrição da Tarefa"
        value="{{$task->description}}"
      />

      <x-form.buttonForm txt-reset="Resetar" txt-submit="Atualizar tarefas"/>

    </form>
  </section>
</x-layout>
