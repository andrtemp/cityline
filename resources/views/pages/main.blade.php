@extends('layouts.app')

@section('page-name')
    Адвокат:  Щербина Євгеній Євгенійович
@endsection

@section('content')
    <h1>Про мене</h1>
    <div class="aboutMe">
        <div class="aboutMe__iconWrap">
            <div class="aboutMe__icon aboutMe__iconMain">
                <a href="{{ asset('img/aboutMe1.jpg') }}" data-toggle="lightbox" data-gallery="gallery">
                    <img src="{{ asset('img/aboutMe1.jpg') }}" alt="lawyer" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="aboutMe__text">
            <h4 class="aboutMe__text-title">Адвокат: Щербина Євгеній Євгенійович
                <span>з  10  річним стажем роботи</span>
            </h4>
            <img class="aboutMe__text-image" src="{{ asset('img/photo.png') }}" alt="Фото"/>
            <br/>
            <p>Вітаю Вас на своєму сайті</p>
            <br/>
            <p>Готовий надати дійсно кваліфіковану та якісну правову допомогу та вирішити питання, які виникли у Вашому
                житті.</p>
            <br/>
            <p>Маю необхідні знання, досвід та розуміння юридичного супроводження процесу надання адвокатських
                послуг.</p>
            <br/>
            <p>В жодному разі не буду вводити в оману клієнта (видавати бажане за дійсне) та гарантую повний та
                всебічний захист Ваших прав та інтересів.</p>
            <br/>
            <p>Ваші проблеми стануть моїми.</p>
            <p>Я докладу усіх зусиль для їх скорішого вирішення.</p>
            <p>Я зацікавлений у кожному клієнті тому працюю на совість.</p>
            <br/>
            <div class="aboutMe__text-phone">
                <i class="fa fa-phone"></i>
                <a href="tel:066-884-53-50">097-02-04-083</a>
            </div>
            <div class="aboutMe__text-phone">
                <i class="fa fa-phone"></i>
                <a href="tel:066-884-53-50">066-884-53-50</a>
            </div>
        </div>
    </div>
@endsection
