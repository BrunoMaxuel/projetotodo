<x-layout>
    {{--  header --}}
    <x-slot:btn>
    <x-button href="{{route('logout')}}">Sair</x-button>
  </x-slot:btn>
  @if($authUserIslogout)
    <x-slot:nameLogin>
      Bem-vindo,
      {{$authUser->name}}
    </x-slot:nameLogin>
  @endif
  Aqui temos pagina de outros
  nome: {{$name}}
</x-layout>