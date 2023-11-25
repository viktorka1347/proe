<div id="{{$seance->id}}_{{$film->id}}" class="popup">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__header">
                <h2 class="popup__title">
                    Снятие с сеанса
                    <a class="popup__dismiss" href="#" onclick = " window.location.href='{{ route('admin.home', ['open'=> $open,'selected_hall' => $hall->{'id'}]) }}' "><img src="i/close.png" alt="Закрыть"></a>
                </h2>
            </div>
            <div class="popup__wrapper">
                {{-- seance_delete{{$seance->id}} - id реального сеанса--}}
                <form name="seance_delete{{$seance->id}}" action="{{ route('admin.destroySeance', ['id' => $seance->id]) }}" method="post" accept-charset="utf-8">
                    @csrf
                    {{--@method('DELETE')--}}
                    <p class="conf-step__paragraph">Вы действительно хотите снять с сеанса фильм: <span>"{{$film->title}}"</span>?</p>
                    <!-- В span будет подставляться название фильма -->
                    <div class="conf-step__buttons text-center">
                        <input id="{{$seance->id}}" type="submit" value="Удалить" class="conf-step__button conf-step__button-accent" @if ($open === '1') disabled @endif >
                        <button onclick = " window.location.href='{{ route('admin.home', ['confstep' => ['conf-step__header_closed', 'conf-step__header_closed', 'conf-step__header_closed', 'conf-step__header_opened', 'conf-step__header_closed'],'open'=> $open,'selected_hall' => $hall->{'id'}]) }}' " href="#" class="conf-step__button conf-step__button-regular"  @if ($open === '1') disabled @endif>Отменить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
