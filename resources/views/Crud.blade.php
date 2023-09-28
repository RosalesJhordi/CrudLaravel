@extends('layout.app')
@vite('resources/css/styles.css')

@section('titulo')
principal
@endsection

<style>
    .info{
        background-image: url('{{ asset('img/Peru02.jpg') }}');
    }
</style>

@section('contenedor')
    <div class="conte w-full">
        <div class="info flex items-center justify-center flex-col">
            <h1 class="text-6xl font-bold text-white">Bienvenidos</h1>
            <i class="fa-solid fa-location-dot text-white text-3xl p-5"></i>
            <button class="bg-blue-600 text-white p-2 w-48 rounded font-bold text-2xl">Iniciar</button>
        </div>
        
        <div class="texto h-1/2 m-auto mt-36 mb-16 rounded-3xl flex justify-center items-center">
            <div class="bg-white shadow-lg rounded-xl text-black text-xl p-5 m-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, expedita delectus? Odit error tenetur, voluptate quo magnam adipisci vel? Adipisci, itaque facilis eos quasi fuga omnis maxime quibusdam. Quam voluptatibus eveniet voluptatum illo soluta quod esse sequi? Sapiente itaque laudantium fugit. Suscipit molestiae eveniet veritatis, harum perferendis minus temporibus saepe dolorum aperiam nam labore dolore similique ex omnis odit sed eaque numquam illum odio. Nihil, magnam eligendi ab rerum ducimus sed eos facilis, voluptatum praesentium beatae aut voluptate dolore deleniti a corrupti minus autem? Corrupti temporibus, consequuntur illum vitae expedita esse itaque dolor, ipsam maxime error enim necessitatibus minima dignissimos?</div>
            <div class="bg-white shadow-lg rounded-xl text-black text-xl p-5 m-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, expedita delectus? Odit error tenetur, voluptate quo magnam adipisci vel? Adipisci, itaque facilis eos quasi fuga omnis maxime quibusdam. Quam voluptatibus eveniet voluptatum illo soluta quod esse sequi? Sapiente itaque laudantium fugit. Suscipit molestiae eveniet veritatis, harum perferendis minus temporibus saepe dolorum aperiam nam labore dolore similique ex omnis odit sed eaque numquam illum odio. Nihil, magnam eligendi ab rerum ducimus sed eos facilis, voluptatum praesentium beatae aut voluptate dolore deleniti a corrupti minus autem? Corrupti temporibus, consequuntur illum vitae expedita esse itaque dolor, ipsam maxime error enim necessitatibus minima dignissimos?</div>
            <div class="bg-white shadow-lg rounded-xl text-black text-xl p-5 m-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, expedita delectus? Odit error tenetur, voluptate quo magnam adipisci vel? Adipisci, itaque facilis eos quasi fuga omnis maxime quibusdam. Quam voluptatibus eveniet voluptatum illo soluta quod esse sequi? Sapiente itaque laudantium fugit. Suscipit molestiae eveniet veritatis, harum perferendis minus temporibus saepe dolorum aperiam nam labore dolore similique ex omnis odit sed eaque numquam illum odio. Nihil, magnam eligendi ab rerum ducimus sed eos facilis, voluptatum praesentium beatae aut voluptate dolore deleniti a corrupti minus autem? Corrupti temporibus, consequuntur illum vitae expedita esse itaque dolor, ipsam maxime error enim necessitatibus minima dignissimos?</div>
        </div>
    </div>
@endsection