<x-layout page-title="MDM Todo: Login" name-btn="Registre-se">
  <x-slot:btn>
    <x-button  href="{{route('register')}}" >Não Possui conta? Faça o Registo</x-button>
  </x-slot:btn>

  <section id="task_section">

    <h1>Logar-se</h1>

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
        placeholder="Seu Email"
      />
      <x-form.text_input
        label="Senha"
        name="password"
        type="password"
        required="required"
        placeholder="Sua Senha"
      />

      <x-form.buttonForm txt-reset="Limpar" txt-submit="Logar" />

    </form>
  </section>
</x-layout>
