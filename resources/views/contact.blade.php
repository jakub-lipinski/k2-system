@extends('layouts.main') @section('title', "Kontakt") @section('meta')
<meta
    name="description"
    content="K2System Robert Białogłowicz, ul. Spółdzielcza 2, 43-400 Cieszyn. NIP 5482751226, REGON 525240321. Skontaktuj się z nami przez formularz."
/>
<meta
    name="keywords"
    content="kontakt k2system, K2System Robert Białogłowicz, Cieszyn, NIP 5482751226, REGON 525240321, biuro@ksero-k2system.pl"
/>
@endsection @section('content')

<main class="contact">
    <div class="contact__container">
        <ul class="page__breadcrumbs">
            <li class="page__breadcrumb-item">
                <a href="{{ route('home') }}" class="page__breadcrumbs-link"
                    >Strona główna</a
                >
            </li>
            <li class="page__breadcrumbs-item">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 -960 960 960"
                    class="page__breadcrumbs-spacer"
                >
                    <path
                        d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"
                    />
                </svg>
            </li>
            <li class="page__breadcrumbs-item">Kontakt</li>
        </ul>

        <section class="contact__hero">
            <div class="contact__intro">
                <h1 class="contact__title">
                    Kontakt z
                    <span class="contact__title contact__title--colored"
                        >K2System</span
                    >
                </h1>
                <p class="contact__description">
                    Napisz do nas w sprawie sprzedaży, dzierżawy lub serwisu
                    urządzeń Konica Minolta. Odpowiemy na podany adres e-mail
                    lub telefon.
                </p>
                <div class="contact__topics">
                    <div class="contact__topic">
                        <div class="contact__topic-icon-wrapper">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 -960 960 960"
                                class="contact__topic-icon"
                            >
                                <path
                                    d="M856-390 570-104q-12 12-27 18t-30 6q-15 0-30-6t-27-18L103-457q-11-11-17-25.5T80-513v-287q0-33 23.5-56.5T160-880h287q16 0 31 6.5t26 17.5l352 353q12 12 17.5 27t5.5 30q0 15-5.5 29.5T856-390ZM513-160l286-286-353-354H160v286l353 354ZM260-640q25 0 42.5-17.5T320-700q0-25-17.5-42.5T260-760q-25 0-42.5 17.5T200-700q0 25 17.5 42.5T260-640Zm220 160Z"
                                />
                            </svg>
                        </div>
                        <div class="contact__topic-text">
                            <span class="contact__topic-title"
                                >Sprzedaż i dzierżawa</span
                            >
                            <span class="contact__topic-description"
                                >Dobór urządzeń do biura i stałych kosztów
                                druku.</span
                            >
                        </div>
                    </div>
                    <div class="contact__topic">
                        <div class="contact__topic-icon-wrapper">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 -960 960 960"
                                class="contact__topic-icon"
                            >
                                <path
                                    d="M756-120 537-339l84-84 219 219-84 84Zm-552 0-84-84 276-276-68-68-28 28-51-51v82l-28 28-121-121 28-28h82l-50-50 142-142q20-20 43-29t47-9q24 0 47 9t43 29l-92 92 50 50-28 28 68 68 90-90q-4-11-6.5-23t-2.5-24q0-59 40.5-99.5T701-841q15 0 28.5 3t27.5 9l-99 99 72 72 99-99q7 14 9.5 27.5T841-701q0 59-40.5 99.5T701-561q-12 0-24-2t-23-7L204-120Z"
                                />
                            </svg>
                        </div>
                        <div class="contact__topic-text">
                            <span class="contact__topic-title"
                                >Serwis i materiały</span
                            >
                            <span class="contact__topic-description"
                                >Zgłoszenia serwisowe, części i tonery Konica
                                Minolta.</span
                            >
                        </div>
                    </div>
                    <div class="contact__topic">
                        <div class="contact__topic-icon-wrapper">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 -960 960 960"
                                class="contact__topic-icon"
                            >
                                <path
                                    d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"
                                />
                            </svg>
                        </div>
                        <div class="contact__topic-text">
                            <span class="contact__topic-title"
                                >Dostawa i instalacja</span
                            >
                            <span class="contact__topic-description"
                                >Transport, konfiguracja sieciowa i uruchomienie
                                sprzętu.</span
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact__details">
                <div class="contact__detail">
                    <span class="contact__label">Nazwa pełna</span>
                    <span class="contact__value"
                        >K2System Robert Białogłowicz</span
                    >
                </div>
                <div class="contact__detail">
                    <span class="contact__label">Adres rejestrowy</span>
                    <span class="contact__value"
                        >ul. Spółdzielcza 2<br />43-400 Cieszyn</span
                    >
                </div>
                <div class="contact__detail">
                    <span class="contact__label">NIP</span>
                    <span class="contact__value">5482751226</span>
                </div>
                <div class="contact__detail">
                    <span class="contact__label">REGON</span>
                    <span class="contact__value">525240321</span>
                </div>
                <div class="contact__links">
                    <a
                        href="mailto:biuro@ksero-k2system.pl"
                        class="contact__link"
                        >biuro@ksero-k2system.pl</a
                    >
                    <a href="tel:+48500638676" class="contact__link"
                        >+48 500 638 676</a
                    >
                </div>
            </div>
        </section>

        <section class="contact__form-section">
            <div class="section__heading">
                <div class="section__title-wrapper">
                    <h2 class="section__title">
                        Formularz
                        <span class="section__title section__title--colored"
                            >kontaktowy</span
                        >
                    </h2>
                </div>
            </div>

            @if (session('status'))
                <div class="contact__alert contact__alert--success">
                    {{ session('status') }}
                </div>
            @endif

            <form
                action="{{ route('contact.send') }}"
                method="POST"
                class="contact__form"
            >
                @csrf

                <input
                    type="text"
                    name="website"
                    value="{{ old('website') }}"
                    class="contact__honeypot"
                    tabindex="-1"
                    autocomplete="off"
                />

                <div class="contact__field">
                    <label for="name" class="contact__label"
                        >Imię i nazwisko lub firma</label
                    >
                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="contact__input"
                        autocomplete="name"
                        required
                    />
                    @error('name')
                        <span class="contact__error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="contact__field contact__field--half">
                    <label for="email" class="contact__label">E-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="contact__input"
                        autocomplete="email"
                        required
                    />
                    @error('email')
                        <span class="contact__error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="contact__field contact__field--half">
                    <label for="phone" class="contact__label">Telefon</label>
                    <input
                        id="phone"
                        type="tel"
                        name="phone"
                        value="{{ old('phone') }}"
                        class="contact__input"
                        autocomplete="tel"
                    />
                    @error('phone')
                        <span class="contact__error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="contact__field">
                    <label for="message" class="contact__label"
                        >Treść wiadomości</label
                    >
                    <textarea
                        id="message"
                        name="message"
                        rows="7"
                        class="contact__textarea"
                        required
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <span class="contact__error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="contact__button">
                    Wyślij wiadomość
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 -960 960 960"
                        class="contact__button-icon"
                    >
                        <path
                            d="M120-160v-640l760 320-760 320Zm80-120 474-200-474-200v140l240 60-240 60v140Zm0 0v-400 400Z"
                        />
                    </svg>
                </button>
            </form>
        </section>
    </div>
</main>

@endsection
