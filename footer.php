
<div class="container footer position-relative">
    <div class="row ">
    <h3 class="f-md-36 fw-bold my-2">Client</h3>
    <p class="header-text f-md-16">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
    dummy text ever since the 1500s,</p>
    </div>

    <div class="row px-1 mb-5 mt-3">

    <div class="owl-carousel-2 owl-carousel owl-theme">

        <div class="item">
            <a href="#">
                <img src="images/frame.svg" alt="">
            </a>
        </div>

        <div class="item">
            <a href="#">
                <img src="images/ekvita.svg" alt="">
            </a>
        </div>

        <div class="item">
            <a href="#">
                <img src="images/cashpay.svg" alt="">
            </a>
        </div>
        <div class="item">
            <a href="#">
                <img src="images/Azersu_logo.png" alt="">
            </a>
        </div>

    </div><!--owl carousel end-->

       

    </div><!--row end-->

    

</div><!--container-end-->


<div class="container-fluid footer-bottom bg-color d-block d-md-none position-relative">

   <div class="ms-3 py-3">
      <p class="f-md-18">Sosial mediada izlə</p>
      <div class="social d-block d-md-none">
            <a href="#" class="me-2"><img src="images/facebook-icon.svg"></a>
            <a href="#" class="mx-2"><img src="images/youtube-icon.svg"></a>
            <!-- <a href="#" class="mx-2"><img src="images/whatsapp-icon.svg"></a> -->
            <a href="#" class="mx-2"><img src="images/twitter-icon.svg"></a>
            <a href="#" class="mx-2"><img src="images/linkedin-icon.svg"></a>
        </div>
   </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" 
 integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
<!--index carousel-->
  <script>
    $('.owl-carousel-1').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:false,
    autoplay: true,
	autoplayTimeout: 4000,
	autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
  </script>

<!--footer carousel-->
<script>
    $('.owl-carousel-2').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    dots:false,
    autoplay: true,
	autoplayTimeout: 5000,
	autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
})
  </script>




  <script src="script.js"></script>
</body>
</html>