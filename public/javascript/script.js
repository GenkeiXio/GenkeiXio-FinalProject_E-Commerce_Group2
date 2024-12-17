let searchForm = document.querySelector('.search-form');
        document.querySelector('#search-btn').onclick = () => {
            searchForm.classList.toggle("active");
            myCart.classList.remove("active");
            navBar.classList.remove("active");
        };

        let myCart = document.querySelector('.shopping-cart');
        document.querySelector('#cart-btn').onclick = () => {
            myCart.classList.toggle("active");
            searchForm.classList.remove("active");
            navBar.classList.remove("active");
        };

        let navBar = document.querySelector('.nav');
        document.querySelector('#menu-hmbtn').onclick = () => {
            navBar.classList.toggle("active");
            searchForm.classList.remove("active");
            myCart.classList.remove("active");
        };

        window.onscroll = () =>{
            searchForm.classList.remove("active");
            myCart.classList.remove("active");
            navBar.classList.remove("active");
        }

        var swiper = new Swiper(".seller-box", {
                loop: true,
                spaceBetween: 20,
                autoplay: {
                        delay: 7500,
                        disableOnInteraction: false,
                },
                centeredSlides: true,
                breakpoints: {
                  0: {
                    slidesPerView: 1,
                  },
                  768: {
                    slidesPerView: 2,
                  },
                  1020: {
                    slidesPerView: 3,
                  },
                },
              });