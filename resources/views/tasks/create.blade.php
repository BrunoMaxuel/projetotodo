<x-layout page-title="MDM Todo: Criar Tarefa">

  <x-slot:btn>
    <x-button href="{{route('home')}}">Voltar</x-button>
  </x-slot:btn>

  <section id="task_section">

    <h1>Criar Tarefa</h1>

    <form method="POST" action="{{route('task.create_action')}}">
      @csrf
      <x-form.text_input
        label="Titulo da Tarefa"
        name="title"
        required="required"
        placeholder="Digite o titulo da Tarefa"
      />

      <x-form.text_input
        label="Data de Realização"
        name="due_date"
        type="datetime-local"
        required="required"
        placeholder="Digite o titulo da Tarefa"
      />

      <x-form.select_input
        label="Categoria"
        name="category_id"
        required="required"
        select-cat="Selecione uma categoria"
      >
        @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach

      </x-form.select_input>

      <x-form.textArea_input
        label="Descrição da Tarefa"
        name="description"
        placeholder="Digite uma descrição da Tarefa"
      />

      <x-form.buttonForm txt-reset="Resetar" txt-submit="Criar tarefas" />

    </form>
  </section>
</x-layout>

