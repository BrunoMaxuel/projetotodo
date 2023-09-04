<x-layout pageTitle="TodoDiaSoft Login">
  <x-slot:btn>
    <x-button btn="btn-white" href="{{route('register')}}" >Registre-se</x-button>
  </x-slot:btn>

  <section class="container-login">
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
          <x-form.buttonForm txtReset="Limpar" txtSubmit="Entrar" />
    </form>
  </section>
</x-layout>
