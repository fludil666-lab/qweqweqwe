@extends('layouts.marketplace')

@section('title', 'Личный кабинет')

@section('content')
<h1 style="margin-bottom: 20px; font-size: 22px;">Личный кабинет</h1>

<div class="card">
    <p>Вы вошли как <strong>{{ Auth::user()->name }}</strong> ({{ Auth::user()->role }})</p>
    <p style="margin-top: 12px;">
        <a href="{{ route('specialists.index') }}">Найти специалиста</a>
        · <a href="{{ route('orders.index') }}">Мои заказы</a>
        @if(Auth::user()->isSpecialist())
            · <a href="{{ route('specialist-profile.edit') }}">Мой профиль исполнителя</a>
        @else
            · <a href="{{ route('register') }}">Стать исполнителем</a>
        @endif
        @if(Auth::user()->isAdmin())
            · <a href="{{ route('admin.dashboard') }}">Админ-панель</a>
        @endif
    </p>
</div>
@endsection
