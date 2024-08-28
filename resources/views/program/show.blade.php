@extends('layouts.master')

@section('content')
    <div class="main__course">
        <div class="container">
            <div class="course__image main__image">
                <img src="{{ asset($program->image) }}" alt="" />
            </div>
            <div class="course__title title">
                {{ $program->name }}
            </div>
            <div class="course__text text">
                @if($sections->count())
                    @foreach($sections as $section)
                        @if($section->name === 'heading')
                            <h2 class='text__title'> {{ $section->content }} </h2>
                        @elseif($section->name === 'paragraph')
                            <p>{{ $section->content }}</p>
                        @endif
                    @endforeach
                @endif
                <p class="text__desc">
                    Курс розрахований для дітей віком від <span>{{ $program->recommended_age }} років</span>, триває
                    навчальний рік, складається з {{ $program->number_lesson }} занять тривалістю по 2 години.
                    Ціна за курс вказана у відповідному
                    <a href="">розділі</a> на веб-сайті.
                </p>
                <p class="text__desc">
                    Після проходження курсу: <span>“{{ $program->name }}”</span>, учень отримує сертифікат, який
                    засвідчує його знання та навички за обраним напрямком!
                </p>
                <a href="/" class="button master_class bouncy button__course">Записатись на майстер клас</a>
            </div>
            <div class="course__title title">
                Опису даного курсу ще немає :(
            </div>
        </div>
    </div>

    @include('includes.questions')
@endsection
