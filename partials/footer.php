<footer class="ftco-footer ftco-bg-dark">
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-4 col-lg-4">
        <div class="contact__us ftco-footer-widget">
          <h2 class="ftco-heading-2">Have Questions?</h2>
          <!-- <form method="POST"> -->
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea id="message" id="" cols="30" rows="7" class="form-control"
                placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" id="sendmsg" value="Send Message" class="btn btn-primary modal-btn py-3 px-5">
            </div>
          <!-- </form> -->
        </div>
      </div>

      <div class="col-md-6 col-lg-8">
        <div class="ftco-footer-widget">
          <h2 class="ftco-heading-2">Links</h2>
          <ul class="list-unstyled footer-list">
            <li><a href="#">TEST </a></li>
            <li><a href="#">TEST </a></li>
            <li><a href="#">TEST </a></li>
            <li><a href="#">TEST </a></li>
            <li><a href="#">TEST </a></li>
          </ul>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="ftco-footer-widget">
              <div class="block-23 mb-1">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"> St. Johan Gete
                      no. 30, Arberi, Prishtine, 10000 Kosove</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+321233421 23</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span
                        class="text">lorem@ipsum.net</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <p>Lorem ipsum has become the industry standard for design mockups and prototypes. By adding a little bit of Latin to a mockup, you’re able to show clients a more complete version of your design without actually having to invest time and effort drafting copy.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script>

  var btnsend = document.getElementById("sendmsg");
  btnsend.addEventListener("click", function() {
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        alert("Thank you for writing to us")
        window.location.reload()
      }
    }
    xmlhttp.open("POST","./api.php",true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("email=" + email + "&message=" + message);
  })
</script>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
