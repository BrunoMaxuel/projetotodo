<x-layout pageTitle="TodoDiaSoft Registrar-se">
  <x-slot:btn>
    <x-button  href="{{route('login')}}" >Fazer Login</x-button>
  </x-slot:btn>

  <section class="container-register">
    <h1>Registrar-se</h1>
    @if($errors->any())
      <ul class="alert alert-error">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    <form method="POST" action="{{route('user.register_action')}}">
      @csrf
      <x-form.text_input
        label="nome"
        name="name"
        required="required"
        placeholder="Seu Nome"
      />

      <x-form.text_input
        label="Email"
        name="email"
        type="email"
        required="required"
        placeholder="Seu Email"
      />
      <x-form.text_input
        label="Senha"
        name="password"
        type="password"
        required="required"
        placeholder="Sua Senha"
      />
      <x-form.text_input
        label="Confirmar Senha"
        name="password_confirmation"
        type="password"
        required="required"
        placeholder="Confirmar Senha"
      />
      <x-form.buttonForm txt-reset="Limpar" txt-submit="Registrar-se" />
    </form>
  </section>
</x-layout>
