@extends('layouts.app')

@section('content')
    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <!-- login form  -->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="">
            <h3>ورود</h3>
            <span>نام کاربری</span>
            <input type="email" name="" class="box" placeholder="ایمیل خود را وارد کنید" id="">
            <span>رمز عبور</span>
            <input type="password" name="" class="box" placeholder="رمز عبور خود را وارد کنید" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> به خاطر سپردن</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <p>رمز خود را فراموش کرده اید ؟ <a href="#">اینجا کلیک کنید</a></p>
            <p>ثبت نام نکرده اید ؟ <a href="#">ساخت حساب</a></p>
        </form>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>تا 75٪ تخفیف</h3>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                <a href="#" class="btn">اکنون خرید کنید</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide">
                        <img src="{{ asset('book-dist/image/book-1.png') }}" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="{{ asset('book-dist/image/book-2.png') }}" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="{{ asset('book-dist/image/book-3.png') }}" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="{{ asset('book-dist/image/book-4.png') }}" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="{{ asset('book-dist/image/book-5.png') }}" alt="">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="{{ asset('book-dist/image/book-6.png') }}" alt="">
                    </a>
                </div>
                <img src="{{ asset('book-dist/image/stand.png') }}" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ense  -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>ارسال رایگان</h3>
                <p>سفارش بالای 100 هزار تومان</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>پرداخت امن</h3>
                <p>100 پرداخت مطمئن</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>بازگشت آسان</h3>
                <p>10 روز مهلت بازگشت</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>پشتیبانی 7/24</h3>
                <p>در هر زمان با ما تماس بگیرید</p>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>کتابهای برجسته</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-1.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-2.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-3.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-4.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-5.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-6.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-7.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-8.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-9.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('book-dist/image/book-10.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>کتاب برجسته</h3>
                        <div class="price">5 هزار تومان <span>10 هزارتومان</span></div>
                        <a href="#" class="btn">اضافه کردن به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->
@endsection
