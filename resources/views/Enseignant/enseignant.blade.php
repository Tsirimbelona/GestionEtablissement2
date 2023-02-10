@extends('base')

@section('title', 'Enseignant')

@section('content')

{{-- style --}}
<link rel="stylesheet" href="css1/main.css">

<div class="container">
<div class="navigation">
    <ul>
        <li>
            <a href="#">
                     <span class="icon">
                        <ion-icon name="accessibility"></ion-icon>
                    </span>
                     <span class="title">Enseignants</span>
            </a>
        </li>

        <li>
            <a href="#">

                     <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                     <span class="title">Dashboard</span>

            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="person-add-outline"></ion-icon>
                </span>
                <span class="title">Compte Enseignant</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="document-text-outline"></ion-icon>
                </span>
                <span class="title">Gestion Documents</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="help-outline"></ion-icon>
                </span>
                <span class="title">Buletin des notes</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="megaphone-outline"></ion-icon>
                </span>
                <span class="title">Actualité</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
                <span class="title">Gestion emploi du temps</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Sing out</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="help-outline"></ion-icon>
                </span>
                <span class="title">help</span>
            </a>
        </li>
    </ul>
</div>

 <!-- =============Main================== -->
 <div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>

        <div class="user">
            <img src="assets/imgs/customer01.jpg" alt="">
        </div>
    </div>

</div>

@endsection
