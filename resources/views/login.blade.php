<x-layout pageTitle="TodoDiaSoft Login">
  <x-slot:btn>
    <x-button  href="{{route('register')}}" >Cadastrar - se</x-button>
  </x-slot:btn>

  <section id="task_section">

    <h1>Fazer login</h1>

    @if($errors->any())
      <ul class="alert alert-error">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    <form method="POST" action="{{route('user.login_action')}}">
      @csrf

      <x-form.text_input
        label="Email"
        name="email"
        type="email"
        required="required"
        placeholder="Seu email"
      />
      <x-form.text_input
        label="Senha"
        name="password"
        type="password"
        required="required"
        placeholder="Sua senha"
      />

      <x-form.buttonForm txt-reset="Limpar" txt-submit="Entrar" />

    </form>
  </section>
</x-layout>
