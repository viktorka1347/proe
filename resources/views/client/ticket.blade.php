{{-- Электронный билет--}}

@extends('layouts.header')
@section('content')
<main>
    <section class="ticket">

      <header class="tichet__check">
        <h2 class="ticket__check-title">Электронный билет</h2>
      </header>

      <div class="ticket__info-wrapper">
        <p class="ticket__info">На фильм: <span class="ticket__details ticket__title">{{$film['title']}}</span></p>
        <p class="ticket__info">Места: <span class="ticket__details ticket__chairs">{{$selected}}</span></p>
        <p class="ticket__info">В зале: <span class="ticket__details ticket__hall">{{$seance['hall_id']}}</span></p>
        <p class="ticket__info">Начало сеанса: <span class="ticket__details ticket__start">{{\Carbon\Carbon::parse($seance['startSeance'])->format('d.m.Y H:i')}}</span></p>

        <img class="ticket__info-qr" src="/ticket/qr?qrCod={{rawurlencode($qrCod)}}">

        <p class="ticket__hint">Покажите QR-код нашему контроллеру для подтверждения бронирования.</p>
        <p class="ticket__hint">Приятного просмотра!</p>
      </div>
    </section>
</main>
@endsection

