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
@include('components.menu')
<div >
  <h1>Área de clientes</h1>
</div>
</x-layout>
