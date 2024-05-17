
<!-- footer section -->
<footer class="main-footer container-fluid">  

 <div class="footer-row row">
        <div class="logo-image col-md-3">
          <div class="logoo">
            <img src="<?php bloginfo('template_directory'); ?> /photos/BG R (2).png" alt="">
            <p>Lorem ipsum dolor, sit amet  <br>
              consectetur adipisicing elit. <br>
              
             </p> 
             <a href="#">Make Appointment</a>
            </div>
            </div>
            <div class="scnd col-md-3">
              <div class="links container p-0 ">
                <h2 class="half-underline ">Quick Links</h2>
                <table class="table">
    
                  <tbody>
                    <tr>
                      <td><a href="#home"> Home</a></td>
    
                    </tr>
                    <tr>
                      <td><a href="#about"> About Us</a></td>
    
                    </tr>
                    <tr>
                      <td><a href="#services"> Services</a></td>
    
                    </tr>

                    <tr>
                      <td><a href="#about"> About Us</a></td>
    
                    </tr>
                    <tr>
                      <td><a href="#services"> Services</a></td>
    
                    </tr>
    
    
                   
                  </tbody>
                </table>
    
              </div>
            </div>

        <div class="text-two col-md-3">
            <h2 class="half-underline">Photo Gallery</h2>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4"><img src="<?php bloginfo('template_directory'); ?> /photos/cherry-tomato-6601698_1280.jpg" alt="...">
                </div>
                <div class="col-md-4"><img src="<?php bloginfo('template_directory'); ?> /photos/cow-3383624_1280.jpg" alt="...">
                </div>
                <div class="col-md-4"><img src="<?php bloginfo('template_directory'); ?> /photos/jason-mitrione-ZnV9AtOu2sE-unsplash.jpg" alt="...">
                </div>
              </div>
            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4"><img src="<?php bloginfo('template_directory'); ?> /photos/melon-166835_1280.jpg" alt="...">
                </div>
                <div class="col-md-4"><img src="<?php bloginfo('template_directory'); ?> /photos/green-striped-ripe-watermelon-with-slice-cross-section-isolated-white-background-with-copy-space-text-images-special-kind-berry-sweet-pink-flesh-with-black-seeds-side-view.jpg" alt="...">
                </div>
                <div class="col-md-4"><img src="<?php bloginfo('template_directory'); ?> /photos/tomatoes-4474174_1280.jpg" alt="...">
                </div>
              </div>
            </div>
        </div>

        <div class="text-three col-md-3">
            <h2 class="half-underline">Contact Info</h2>
            <p>Lorem ipsum dolor, sit amet  <br>
              consectetur adipisicing elit. <br>
              </p> 

              <h2>  Follow Us On</h2>

              <li><a href="#"><i class="fa-brands fa-square-facebook"></i> </a></li>
              <li><a href="#"><i class="fa-brands fa-square-whatsapp"></i></a></li>




        </div>
      </div>

    <div class="container foot-copy ">
        <div class="copyright row">
            <div class="copy col-md-4">
                <p>Copyright <i class="fa-regular fa-copyright"></i> 2024 Marge Ventures Limited </p>
            </div>

            <div class="links col-md-4">
              <li><a href="#">All Rights Reserved </a></li>
          </div>


            <div class="links col-md-4">
                <li><a href="#">Designed By Daisy Designs</a></li>
            </div>
        </div>
    </div>

    
    </div>
</footer>
  <script>

    
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
      const updateCounter = () => {
        const targetCount = +counter.getAttribute('data-count');
        const currentCount = +counter.querySelector('h2').innerText;

        const increment = targetCount / 100;

        if (currentCount < targetCount) {
          counter.querySelector('h2').innerText = Math.ceil(currentCount + increment);
          setTimeout(updateCounter, 50);
        } else {
          counter.querySelector('h2').innerText = targetCount;
        }
      }

      updateCounter();
    });
  </script>

  <!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="jquery.min.js"></script>
  <script src="owlcarousel/owl.carousel.min.js"></script> -->
</body>

</html>

