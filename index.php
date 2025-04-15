<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - drecar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eeeeee;
        }

        .main-header {
            display: flex;
            align-items: center;
            justify-content: space-between; /* chia 3 phần đều: trái - giữa - phải */
            padding: 10px 40px;
            height: 50px;
            background-color: #ffffff;
        }

        /* Logo trái */
        .logo img {
            height: 40px;
        }

        /* Nav giữa */
        .nav-center {
            flex: 1; /* để nav chiếm phần còn lại giữa logo và icons */
            display: flex;
            justify-content: center;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        .nav-menu li a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            font-family: "Rubik", sans-serif;
        }

        /* Icon phải */
            .header-icons {
            display: flex;
            gap: 20px;
        }

        .header-icons .icon {
            height: 24px;
            cursor: pointer;
        }        

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 30px;
        }

        footer {
            background-color: #333;
            padding: 10px 0;
            text-align: center;
        }

        footer ul {
            list-style: none;
        }

        footer ul li {
            /* display: inline; */
            text-align: left;
            margin: 0 10px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
        }

        .headings{
            text-align: center;
        }

        /* .slider {
        position: relative;
        width: 100%;
        overflow: hidden;
        } */

        /* .slider-wrapper {
            display: flex;
            transition: transform 0.5s ease;
            width: 500%; 
        }

        .slider-wrapper img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        } */

        /* Nút trái phải */
        /* /* .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0,0,0,0.4);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 24px;
            z-index: 10;
            border-radius: 50%;
        }

        .prev { left: 10px; }
        .next { right: 10px; }

        .dots {
            text-align: center;
            position: absolute;
            width: 100%;
            bottom: 15px;
        }

        .dots span {
            display: inline-block;
            height: 12px;
            width: 12px;
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .dots span.active {
            background-color: #ffffff;
        } */

        /* Responsive */
    /* @media (max-width: 768px) {
        .slider-wrapper img {
            height: 250px;
        }

        .prev, .next {
            font-size: 18px;
            padding: 6px 10px;
        }
    }  */

        .slider {
            width: 100%;
            margin-top: 0; 
            overflow: hidden;
        }

        #slider .item1 img {
            width: 100%;         
            height: auto;       
            display: block;    
            object-fit: cover;   
        }

        .products {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(4, 1fr); /* Desktop */
            margin-top: 20px;
            padding: 0 20px;
        }

    @media (max-width: 1024px) {
        .products {
            grid-template-columns: repeat(3, 1fr); /* Tablet */
        }
    }

    @media (max-width: 768px) {
        .products {
            grid-template-columns: repeat(2, 1fr); /* Phone */
        }
    }

        .product-card {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 6px;
        }

        .product-card h3 {
            margin: 10px 0 5px;
            font-size: 16px;
        }

        .product-card p {
            color: #e60000;
            font-weight: bold;
        }


    </style>







  
    <!-- header -->
    <header class="main-header">
        <div class="logo">
          <img src="/assets/images/Web/Asset1.jpg" alt="Logo">
          <!-- <img src="IMG_3021.jpg" alt="Logo"> -->

        </div>
      
        <nav class="nav-center">
          <ul class="nav-menu">
            <li><a href="index.html">HOME</a></li>
            <li><a href="shop.html">SHOP</a></li>
            <li><a href="gallery.html">GALLERY</a></li>
            <li><a href="about.html">ABOUT US</a></li>

          </ul>
        </nav>
      
        <div class="header-icons">
            <a href="account.html"><img src="account_icon.png" alt="Account" class="icon"></a>
            <a href="cart.html"><img src="cart_icon.png" alt="Cart" class="icon"></a>
        </div>
    </header>

    

    <!-- body -->
    <main>
        <section class="slider">
            <div id="slider">
                <div class="item1">
                    <img src="IMG_2306-min.jpg" alt="image">

                </div>

            </div>
        </section>



        <!-- <section class="slider">
            <div class="slider-wrapper" id="slider-wrapper">
                
                <div class="item1"><img src="IMG_2306-min.jpg" alt="Image 1" ></div>
                <div class="item2"><img src="IMG_3021-min.jpg" alt="Image 1" ></div>
                <div class="item3"><img src="IMG_2402-min.jpg" alt="Image 1" ></div>
                <div class="item4"><img src="IMG_2609-min.jpg" alt="Image 1" ></div>
                <div class="item5"><img src="IMG_2610-min.jpg" alt="Image 1" ></div>
                
                <img src="IMG_3021-min.jpg" alt="Image 2" class="item2">
                <img src="IMG_2402-min.jpg" alt="Image 3" class="item3">
                <img src="IMG_2609-min.jpg" alt="Image 4" class="item4">
                <img src="IMG_2610-min.jpg" alt="Image 5" class="item5">
            </div>
          
            Nút điều hướng
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
          
            Dots
            <div class="dots" id="dots">
              <span onclick="goToSlide(0)"></span>
              <span onclick="goToSlide(1)"></span>
              <span onclick="goToSlide(2)"></span>
              <span onclick="goToSlide(3)"></span>
              <span onclick="goToSlide(4)"></span>
            </div>
        </section>  -->
       

        

        <section class="sales-off">
            <h1 class="headings">NEW ARRIVALS</h1>
            <div class="products">
                <div class="product-card">
                    <!-- <img src="11.png" alt="Product 1"> -->
                    <a href="detail.html"><img src="11.png" alt="Product 1" class="icon"></a>
                    <h3>Sản phẩm 1</h3>
                    <p>₫1.200.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 2">
                    <h3>Sản phẩm 2</h3>
                    <p>₫980.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 3">
                    <h3>Sản phẩm 3</h3>
                    <p>₫1.500.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 4">
                    <h3>Sản phẩm 4</h3>
                    <p>₫1.100.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 1">
                    <h3>Sản phẩm 1</h3>
                    <p>₫1.200.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 2">
                    <h3>Sản phẩm 2</h3>
                    <p>₫980.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 3">
                    <h3>Sản phẩm 3</h3>
                    <p>₫1.500.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 4">
                    <h3>Sản phẩm 4</h3>
                    <p>₫1.100.000</p>
                </div>
            </div>
        </section>

        <section class="best-sellers">
            <h2 class="headings">SALES OFF</h2>
            <div class="products">
                <div class="product-card">
                    <img src="11.png" alt="Product 5">
                    <h3>Sản phẩm 5</h3>
                    <p>₫890.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 6">
                    <h3>Sản phẩm 6</h3>
                    <p>₫750.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 7">
                    <h3>Sản phẩm 7</h3>
                    <p>₫1.000.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 5">
                    <h3>Sản phẩm 5</h3>
                    <p>₫890.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 6">
                    <h3>Sản phẩm 6</h3>
                    <p>₫750.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 7">
                    <h3>Sản phẩm 7</h3>
                    <p>₫1.000.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 6">
                    <h3>Sản phẩm 6</h3>
                    <p>₫750.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 7">
                    <h3>Sản phẩm 7</h3>
                    <p>₫1.000.000</p>
                </div>
            </div>
        </section>

        <section class="collab-collection">
            <h2 class="headings">BEST SALERS</h2>
            <div class="products">
                <div class="product-card">
                    <img src="IMG_2609-min.jpg" alt="Product 8">
                    <h3>Sản phẩm 8</h3>
                    <p>₫1.350.000</p>
                </div>
                <div class="product-card">
                    <img src="IMG_2610-min.jpg" alt="Product 9">
                    <h3>Sản phẩm 9</h3>
                    <p>₫990.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 7">
                    <h3>Sản phẩm 7</h3>
                    <p>₫1.000.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 5">
                    <h3>Sản phẩm 5</h3>
                    <p>₫890.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 6">
                    <h3>Sản phẩm 6</h3>
                    <p>₫750.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 7">
                    <h3>Sản phẩm 7</h3>
                    <p>₫1.000.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 6">
                    <h3>Sản phẩm 6</h3>
                    <p>₫750.000</p>
                </div>
                <div class="product-card">
                    <img src="11.png" alt="Product 7">
                    <h3>Sản phẩm 7</h3>
                    <p>₫1.000.000</p>
                </div>
            </div>
        </section>
    </main>



    <!-- footer -->
    <footer>
        <!-- <ul>
            <li><a href="#">Mạng Xã Hội</a></li>
            <li><a href="#">Liên Lạc</a></li>
            <li><a href="#">Địa Chỉ</a></li>
            <li><a href="#">Privacy</a></li>
        </ul> -->

        <div class="info">
            <ul>
                <li><a href="#">Mạng Xã Hội</a></li>
                <li><a href="#">Liên Lạc</a></li>
                <li><a href="#">Địa Chỉ</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
    </footer>



    <!-- script -->
    <!-- <script>
        let currentSlide = 0;
        const totalSlides = 5;
        const wrapper = document.getElementById('slider-wrapper');
        const dots = document.getElementById('dots').children;
      
        function showSlide(index) {
          if (index >= totalSlides) currentSlide = 0;
          else if (index < 0) currentSlide = totalSlides - 1;
          else currentSlide = index;
      
          wrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
      
          // Update dots
          for (let i = 0; i < dots.length; i++) {
            dots[i].classList.remove('active');
          }
          dots[currentSlide].classList.add('active');
        }
      
        function nextSlide() {
          showSlide(currentSlide + 1);
        }
      
        function prevSlide() {
          showSlide(currentSlide - 1);
        }
      
        function goToSlide(index) {
          showSlide(index);
        }
      
        // Auto slide
        setInterval(() => {
          nextSlide();
        }, 4000); // 4s
      
        // Khởi tạo ban đầu
        showSlide(0);
    </script> -->
      

    <script src="scripts.js"></script>
</body>
</html>
