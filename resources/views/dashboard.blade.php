@extends('layouts.app')

@section('title', 'Dashboard - AirDrip')

@section('content')
    <main class="is-flex">
        <aside class="is-flex is-flex-direction-column is-justify-content-flex-start is-align-items-center">
            <div id="icon-user" class="is-flex is-align-items-center is-justify-content-center is-justify-self-flex-start">
                <img src="" alt="user" srcset="">
            </div>
            <p>Nome: Jorginho</p>
            <nav id="aside-nav">
                <ul class="is-flex is-flex-direction-column" >
                    <li><router-link :to="{name: 'Users'}">Users</router-link></li>
                    <li><router-link to="">Produtos</router-link></li>
                    <li><router-link to="">Vendas</router-link></li>
                    <li><router-link to="">Entrada</router-link></li>
                    <li><router-link to="">Reclamacoes</router-link></li>
                    <li><router-link to="">Feedbacks</router-link></li>
                </ul>   
            </nav>
        </aside>
        <section id="view">
            <router-view></router-view>
        </section>
    </main>
    
@endsection

@section('script', '/js/dashapp.js')