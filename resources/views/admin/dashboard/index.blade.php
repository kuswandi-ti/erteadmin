@extends('admin.layouts.master')

@section('page_title')
    {{ __('Dashboard') }}
@endsection

@section('content')
    <!-- Wallet Card -->
    <div class="section wallet-card-section pt-1">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title">{{ __('Total Uang Masuk') }}</span>
                    <h1 class="total">$ 2,562.50</h1>
                </div>
                <div class="right">
                    <span class="title">{{ __('Total Uang Keluar') }}</span>
                    <h1 class="total">$ 2,562.50</h1>
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            <div class="wallet-footer">
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                        <div class="icon-wrapper bg-danger">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>Withdraw</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                        <div class="icon-wrapper">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <strong>Send</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="app-cards.html">
                        <div class="icon-wrapper bg-success">
                            <ion-icon name="card-outline"></ion-icon>
                        </div>
                        <strong>Cards</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                        <div class="icon-wrapper bg-warning">
                            <ion-icon name="swap-vertical"></ion-icon>
                        </div>
                        <strong>Exchange</strong>
                    </a>
                </div>

            </div>
            <!-- * Wallet Footer -->
        </div>
    </div>
    <!-- Wallet Card -->

    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Income</div>
                    <div class="value text-success">$ 552.95</div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Expenses</div>
                    <div class="value text-danger">$ 86.45</div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Total Bills</div>
                    <div class="value">$ 53.25</div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Savings</div>
                    <div class="value">$ 120.99</div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Stats -->

    <!-- Transactions -->
    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">Transactions</h2>
            <a href="app-transactions.html" class="link">View All</a>
        </div>
        <div class="transactions">
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Amazon</strong>
                        <p>Shopping</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger"> - $ 150</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Apple</strong>
                        <p>Appstore Purchase</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">- $ 29</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/avatar/avatar3.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Alex Ljung</strong>
                        <p>Transfer</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price">+ $ 1,000</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/avatar/avatar4.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Beatriz Brito</strong>
                        <p>Transfer</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">- $ 186</div>
                </div>
            </a>
            <!-- * item -->
        </div>
    </div>
    <!-- * Transactions -->

    <!-- Send Money -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Send Money</h2>
            <a href="#" class="link">Add New</a>
        </div>
        <!-- carousel small -->
        <div class="carousel-small splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                                <strong>Jurrien</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar3.jpg" alt="img" class="imaged w-100">
                                <strong>Elwin</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="img" class="imaged w-100">
                                <strong>Alma</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar5.jpg" alt="img" class="imaged w-100">
                                <strong>Justine</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar6.jpg" alt="img" class="imaged w-100">
                                <strong>Maria</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar7.jpg" alt="img" class="imaged w-100">
                                <strong>Pamela</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar8.jpg" alt="img" class="imaged w-100">
                                <strong>Neville</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar9.jpg" alt="img" class="imaged w-100">
                                <strong>Alex</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar10.jpg" alt="img" class="imaged w-100">
                                <strong>Stina</strong>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- * carousel small -->
    </div>
    <!-- * Send Money -->

    <!-- Monthly Bills -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Monthly Bills</h2>
            <a href="app-bills.html" class="link">View All</a>
        </div>
        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 14</div>
                            <p>Prime Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 9</div>
                            <p>Music Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <div class="iconbox bg-danger">
                                    <ion-icon name="medkit-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="price">$ 299</div>
                            <p>Monthly Health Insurance</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <div class="iconbox">
                                    <ion-icon name="card-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="price">$ 962</div>
                            <p>Credit Card Statement
                            </p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->
    </div>
    <!-- * Monthly Bills -->

    <!-- Saving Goals -->
    <div class="section mt-4 mb-3">
        <div class="section-heading">
            <h2 class="title">Saving Goals</h2>
            <a href="app-savings.html" class="link">View All</a>
        </div>
        <div class="goals">
            <!-- item -->
            <div class="item">
                <div class="in">
                    <div>
                        <h4>Gaming Console</h4>
                        <p>Gaming</p>
                    </div>
                    <div class="price">$ 499</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                        aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
            </div>
            <!-- * item -->
            <!-- item -->
            <div class="item">
                <div class="in">
                    <div>
                        <h4>New House</h4>
                        <p>Living</p>
                    </div>
                    <div class="price">$ 100,000</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55"
                        aria-valuemin="0" aria-valuemax="100">55%</div>
                </div>
            </div>
            <!-- * item -->
            <!-- item -->
            <div class="item">
                <div class="in">
                    <div>
                        <h4>Sport Car</h4>
                        <p>Lifestyle</p>
                    </div>
                    <div class="price">$ 42,500</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15"
                        aria-valuemin="0" aria-valuemax="100">15%</div>
                </div>
            </div>
            <!-- * item -->
        </div>
    </div>
    <!-- * Saving Goals -->
@endsection

<x-confirm-modal type="warning" id="modal_logout" headerTitle="{{ __('Log out') }}"
    body="{{ __('Anda yakin akan log out ?') }}" confirmId="logout" confirmText="{{ __('Log out') }}" />
