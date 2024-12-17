<!-- resources/views/aboutus.blade.php -->
@extends('Components.Layout')

@section('title', 'About Us')

@section('content')
    <main class="about-main">
        <section class="intro-section">
            <h1>About Robiel Prince Cafe</h1>
        </section>

        <section class="about-section">
            <div class="about-content">
                <div class="text-container">
                    <h2>Introduction</h2>
                    <p>
                        Located in Centro, Guinobatan, Albay Robiel Prince Cafe is a small cafe serving light meals and snacks. 
                        It is managed by the owners, the <b><u>Jaylo Family</u></b>: <b><u>Rob</u></b>erto, C<b><u>iel</u></b>o, 
                        <b><u>Prince</u></b> Louis where that name of the cafe was taken from.
                    </p>
                </div>
            </div>

            <div class="about-content">
                <div class="text-container">
                    <h2>Product Services</h2>
                    <p>
                        Robiel Prince Cafe will be open from <b>7:00 a.m</b> to <b>10:00 p.m</b>. It will cater snacks and serve light meals
                        through <b><u>Breakfast</u></b> and <b><u>Lunch</u></b> hours, occasionally staying open for <b>Dinner</b>, for\
                        dine in customers and also for takeouts.
                    </p>
                </div> 
            </div> 

            <div class="about-content">
                <div class="text-container">
                    <h2>Our Values</h2>
                    <ul>
                        <li>Quality: We use only the finest ingredients.</li>
                        <li>Community: We aim to be a hub for the local community.</li>
                        <li>Sustainability: We are committed to eco-friendly practices.</li>
                        <li>Innovation: We constantly seek to improve our offerings.</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection