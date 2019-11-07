@extends('layouts.app')

@section('page-name')
    Адвокат:  Щербина Євгеній Євгенійович
@endsection

@section('content')
    <h1>Про мене</h1>
    <div class="aboutMe">
        <div class="aboutMe__iconWrap">
            <div class="aboutMe__icon aboutMe__iconMain">
                <a href="img/aboutMe1.jpg" data-toggle="lightbox" data-gallery="gallery">
                    <img src="img/aboutMe1.jpg" alt="lawyer" class="img-fluid">
                </a>
            </div>
            <div class="aboutMe__iconWrap-small">
                <div class="aboutMe__icon">
                    <a href="img/aboutMe2.jpeg" data-toggle="lightbox" data-gallery="gallery">
                        <img src="img/aboutMe2.jpeg" alt="lawyer" class="img-fluid">
                    </a>
                </div>
                <div class="aboutMe__icon">
                    <a href="img/aboutMe3.jpeg" data-toggle="lightbox" data-gallery="gallery">
                        <img src="img/aboutMe3.jpeg" alt="lawyer" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <div class="aboutMe__text">
            <h4 class="aboutMe__text-title">Адвокат:  Щербина Євгеній Євгенійович  <span>з  10  річним стажем роботи</span></h4>
            <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab adipisci amet atque aut earum eligendi et fuga hic impedit iste nesciunt officia perferendis quae reprehenderit, sit unde voluptas voluptatem.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab adipisci amet atque aut earum eligendi et fuga hic impedit iste nesciunt officia perferendis quae reprehenderit, sit unde voluptas voluptatem.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab adipisci amet atque aut earum eligendi et fuga hic impedit iste nesciunt officia perferendis quae reprehenderit, sit unde voluptas voluptatem.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab adipisci amet atque aut earum eligendi et fuga hic impedit iste nesciunt officia perferendis quae reprehenderit, sit unde voluptas voluptatem.
            <br>
            <br>
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
