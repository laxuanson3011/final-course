 <style>
          * {
            box-sizing:border-box
          }
          h2 {
            text-align: center;
          }
          /* Slideshow container */
          .slideshow-container {
            max-width: 500px;
            position: relative;
            margin: auto;
          }
          /* Ẩn các slider */
          .mySlides {
              display: none;
          }
          /* Định dạng nội dung Caption */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: ;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* định dạng các chấm chuyển đổi các slide */
          .dot {
            cursor:pointer;
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s ease;
          }
          /* khi được hover, active đổi màu nền */
          .active, .dot:hover {
            background-color: #717171;
          }

          /* Thêm hiệu ứng khi chuyển đổi các slide */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1s;
            animation-name: fade;
            animation-duration: 1s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: .4}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: .4}
          }
        </style>
    </head>
    <body> 
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="http://localhost:8080/final-course/public/uploads/11.jpg"  style="width: 100%" >
        </div>

        <div class="mySlides fade">
          <img src="http://localhost:8080/final-course/public/uploads/12.jpg" style="width: 100%" >
        </div>

        <div class="mySlides fade">
          <img src="http://localhost:8080/final-course/public/uploads/13.jpg" style="width: 100%" >
        </div>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
      </div>  
    </body>
    <script>
      var slideIndex;
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }

          slides[slideIndex].style.display = "block";  
          dots[slideIndex].className += " active";
          //chuyển đến slide tiếp theo
          slideIndex++;
          //nếu đang ở slide cuối cùng thì chuyển về slide đầu
          if (slideIndex > slides.length - 1) {
            slideIndex = 0
          }    
          //tự động chuyển đổi slide sau 5s
          setTimeout(showSlides, 5000);
      }
      //mặc định hiển thị slide đầu tiên 
      showSlides(slideIndex = 0);


      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
    </script>
