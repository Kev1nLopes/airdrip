@extends('layouts.app')

@section('title', 'Dashboard - AirDrip')

@section('css', '../../css/dash.css')

@section('content')
    <div id="dash">
        <main class="is-flex">
            <aside class="is-flex is-flex-direction-column is-justify-content-flex-start is-align-items-center">
                <div id="icon-user" class="is-flex is-align-items-center is-justify-content-center is-justify-self-flex-start">
                    <img src="" alt="user" srcset="">
                </div>
                <p>Nome: Jorginho</p>
                <nav id="aside-nav" class="is-flex is-flex-direction-column">
                    <router-link :to="{name: 'Users'}">Users</router-link>
                    <router-link :to="{name: 'Produtos'}">Produtos</router-link>
                    <router-link :to="{name: 'Vendas'}">Vendas</router-link>
                    <router-link :to="{name: 'Entrada'}">Entrada</router-link>
                    <router-link :to="{name: 'Feedbacks'}">Feedbacks</router-link>
                </nav>
            </aside>
            <section id="view">
                <router-view></router-view>
            </section>
        </main>
    </div>
@endsection

@section('script', '/js/app.js')