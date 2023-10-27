<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Scrap Car Network</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css?v=1.0">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="js/custom.js"></script>
</head>

<body class="home">

  <?php include('includes/header.php'); ?>

  <main class="site-main">

    <div class="hero">
      <picture>
        <source media="(max-width:767px)" srcset="images/hero-mobile.jpg"><!-- Image for mobile devices -->        
        <img src="images/hero-desktop.jpg" alt=""><!-- Image for desktop screens -->
      </picture>
    </div><!-- End Hero -->

    <div class="c-container">

      <div class="textblock">
        <h1>Text Block</h1>
        <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis. Proin accumsan eros non turpis ultricies, 
          tincidunt semper diam suscipit. Nullam risus tellus, tempus sed velit id, mollis porttitor nunc. 
          Praesent tempus quam sit amet auctor porta. Sed elementum porttitor enim, in consequat nulla aliquam vel. 
          Aliquam mollis, massa nec interdum tempor, leo leo mollis augue, eu ultricies lorem sapien at nisl. 
          Donec tristique, tellus eget elementum finibus, ex lorem tempor velit, tincidunt pulvinar dui orci vitae sapien. 
          Nullam varius hendrerit elementum.</p>
          <div class="btn-container">
            <a href="#" class="purple-solid">Button One</a>
            <a href="#" class="purple-outline">Button Two</a>
          </div>
      </div><!-- End Text Block -->

      <div class="textblock pt-0">
        <h1>Text Block With Read More...</h1>
        <div class="has-readmore">
        <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis. Proin accumsan eros non turpis ultricies, 
          tincidunt semper diam suscipit. Nullam risus tellus, tempus sed velit id, mollis porttitor nunc. 
          Praesent tempus quam sit amet auctor porta. Sed elementum porttitor enim, in consequat nulla aliquam vel.</p> 
        <p>Aliquam mollis, massa nec interdum tempor, leo leo mollis augue, eu ultricies lorem sapien at nisl. 
          Donec tristique, tellus eget elementum finibus, ex lorem tempor velit, tincidunt pulvinar dui orci vitae sapien. 
          Nullam varius hendrerit elementum.</p>
        </div>
          <div class="btn-container">
            <a class="read-more" href="#">readmore</a>
          </div>
      </div><!-- End Text Block -->

      <div class="accordion pt-0 dark-theme">

        <h2>Accordion</h2>
        <p>Below is an example of content being displayed within an accordion</p>

        <div class="accordion-container">

            <div class="accordion-item">
                <div class="accordion-heading">This is the heading for this accordion item</div>
                <div class="accordion-content" style="display:none;">
                  <p>Please see our Shipping & Returns Policy for an explanation of next steps. 
                    If you can’t find the answer to your question(s) in our returns policy then please contact email 
                    address and a member of our customer support team will get back to you.
                  </p>
                  <img src="images/square-placeholder.jpg">
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-heading">This is the heading for this accordion item</div>
                <div class="accordion-content" style="display:none;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in auctor erat, eu mattis sem. Donec bibendum ultricies tortor non tincidunt.</p>
                  <p>In urna sapien, sagittis vitae semper a, dictum non urna. Nam vehicula sit amet diam eu sagittis. Nunc tristique mauris vitae mauris tempor, non venenatis leo gravida. Vestibulum auctor auctor est, sit amet vestibulum dui aliquet vitae. <strong>Proin a dignissim elit</strong>. Proin accumsan semper porta.</p>
                  <p>Nunc sed sodales mi. Donec fermentum fermentum lorem, sed fermentum nulla blandit sit amet. Ut pulvinar lectus nec metus rhoncus, at maximus purus laoreet. Aliquam justo risus, pretium imperdiet dignissim vel, accumsan et dolor. <a href="#">Nullam sed nibh dolor</a>. Integer malesuada nisi nulla, id interdum tortor facilisis ac. Sed id molestie leo. Sed viverra sit amet lorem ut finibus. Sed cursus arcu eget blandit condimentum.</p>
                  <img src="images/hero-desktop.jpg">
                </div>
            </div>

        </div>

      </div><!-- End Accordion -->

      <div class="equal-block">
        <div class="equal-row">
          <div class="text-block">
            <h3 class="textblock-heading">Heading for this text block</h3>
            <p>This is the most basic use of this component...a single equal block consisting of text and an image</p>
            <a href="#" class="purple-solid">Link for this text block</a>
          </div>
          <div class="image-block">
            <img src="images/hero-desktop.jpg">
          </div>
        </div>
      </div><!-- End Equal Block -->

      <div class="equal-block grey-theme">
        <div class="equal-row reversed">
          <div class="text-block">
            <h3 class="textblock-heading">Heading for this text block</h3>
            <p>If you want to have a single equal block but reverse it then add the class of reversed to the main container</p>
            <a href="#" class="purple-solid">Link for this text block</a>
          </div>
          <div class="image-block">
            <img src="images/hero-desktop.jpg">
          </div>
        </div>
      </div><!-- End Equal Block -->

      <div class="points-of-interest">
            
        <ul>
          <li>
            <a href="#">
              <img src="images/square-placeholder.jpg">
            </a>
            <h3 class="poi-title"><a href="#">This is the heading for this POI</a></h3>
            <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis. Proin accumsan eros non turpis ultricies, tincidunt semper diam suscipit.</p>
            <a href="#" class="purple-solid">Link For This Block</a>
          </li>
          <li>
            <a href="#">
              <img src="images/square-placeholder.jpg">
            </a>
            <h3 class="poi-title"><a href="#">This is the heading for this POI but is longer to see how the text flows.</a></h3>
            <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis. Proin accumsan eros non turpis ultricies, tincidunt semper diam suscipit.</p>
            <a href="#" class="purple-solid">Link For This Block</a>
          </li>
          <li>
            <a href="#">
              <img src="images/square-placeholder.jpg">
            </a>
            <h3 class="poi-title"><a href="#">POI Heading</a></h3>
            <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis. Proin accumsan eros non turpis ultricies, tincidunt semper diam suscipit.</p>
            <a href="#" class="purple-solid">Link For This Block</a>
          </li>
        </ul>

      </div><!-- End Points Of Interest -->

      <div class="icon-list carousel-mode light-theme">
        <h2>Icon List</h2>
        <p>Below is the icon list in the most basic format. A simple list of icons.</p>
        <ul>
            <li>
                <img src="images/key-message-placeholder.png">
                <div class="icon-heading">This is the heading for this icon item</div>
                <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis.</p>
            </li>
            <li>
                <img src="images/key-message-placeholder.png">
                <div class="icon-heading">This is the heading for this icon item</div>
                <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis.</p>
            </li>
            <li>
                <img src="images/key-message-placeholder.png">
                <div class="icon-heading">This is the heading for this icon item</div>
                <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis.</p>
            </li>
            <li>
                <img src="images/key-message-placeholder.png">
                <div class="icon-heading">This is the heading for this icon item</div>
                <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis.</p>
            </li>
        </ul>

        <div class="carousel-controls">
          <div class="prev-icon"><img src="images/purple-arrow-prev.png"></div>
          <div class="next-icon"><img src="images/purple-arrow.png"></div>
        </div>

      </div><!-- End Icon List -->

      <div class="icon-list list-mode">
        <h2>Icon List (With Counter)</h2>
        <p>The below icons have a counter value that counts up</p>
        <ul class="counter">
          <li class="count">
            <img src="images/key-message-placeholder.png">
            <div class="counter-wrapper">
              <div class="counter-number" data-count="500000"><span>0</span></div>
              <div class="symbol">+</div>
            </div>
            <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis.</p>
          </li>
          <li class="count">
            <img src="images/key-message-placeholder.png">
            <div class="counter-wrapper">
              <div class="counter-number" data-count="150000"><span>0</span><span class="symbol">+</span></div>
              <div class="symbol">m+</div>
            </div>
            <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis.</p>
          </li>
          <li class="count">
            <img src="images/key-message-placeholder.png">
            <div class="counter-wrapper">
              <div class="symbol">+</div>
              <div class="counter-number" data-count="27"><span>0</span><span class="symbol">m+</span></div>
            </div>
            <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis.</p>
          </li>
        </ul>

      </div><!-- End Icon List -->

      <div class="callout">
        <img src="images/hero-mobile.jpg">
        <div class="callout-content is-centered">
          <div class="callout-content--heading">
            This is a <strong>callout block</strong>, this is to <strong>link to another</strong> part of the site.
          </div>
          <a href="#" class="purple-solid">Callout Link</a>
        </div>
      </div><!-- End Callout -->

      <div class="article-select carousel-mode">
        <h2>Article Select <a href="#" class="dark-outline">View All Articles</a></h2>
      
        <ul>
            <li>
                <a href="#"><img src="images/square-placeholder.jpg"></a>
                <div class="post-content">
                  <h4 class="post-title"><a href="#">This is the title of the post.</a></h4>
                  <p>Fusce pharetra odio non eros pellentesque fringilla.</p>
                  <a href="#" class="readmore">Read</a>
                </div>
            </li>
            <li>
                <a href="#"><img src="images/square-placeholder.jpg"></a>
                <div class="post-content">
                  <h4 class="post-title"><a href="#">This is the post title but has a much longer title</a></h4>
                  <p>Fusce pharetra odio non eros pellentesque fringilla.</p>
                  <a href="#" class="readmore">Read</a>
                </div>
            </li>
            <li>
                <a href="#"><img src="images/square-placeholder.jpg"></a>
                <div class="post-content">
                  <h4 class="post-title"><a href="#">This is the title of the post.</a></h4>
                  <p>Fusce pharetra odio non eros pellentesque fringilla.</p>
                  <a href="#" class="readmore">Read</a>
                </div>
            </li>
            <li>
                <a href="#"><img src="images/square-placeholder.jpg"></a>
                <div class="post-content">
                  <h4 class="post-title"><a href="#">This is the title of the post.</a></h4>
                  <p>Fusce pharetra odio non eros pellentesque fringilla.</p>
                  <a href="#" class="readmore">Read</a>
                </div>
            </li>
            <li>
                <a href="#"><img src="images/square-placeholder.jpg"></a>
                <div class="post-content">
                  <h4 class="post-title"><a href="#">This is the title of the post.</a></h4>
                  <p>Fusce pharetra odio non eros pellentesque fringilla.</p>
                  <a href="#" class="readmore">Read</a>
                </div>
            </li>
            <li>
                <a href="#"><img src="images/square-placeholder.jpg"></a>
                <div class="post-content">
                  <h4 class="post-title"><a href="#">This is the title of the post.</a></h4>
                  <p>Fusce pharetra odio non eros pellentesque fringilla.</p>
                  <a href="#" class="readmore">Read</a>
                </div>
            </li>
        </ul>

        <div class="carousel-controls">
          <div class="prev-post"><img src="images/purple-arrow-prev.png"></div>
          <div class="next-post"><img src="images/purple-arrow.png"></div>
        </div>

      </div><!-- End Article Carousel -->

      <div class="postcode-lookup">
        <p>Suspendisse vehicula nulla odio, et hendrerit massa accumsan quis. Proin accumsan eros non turpis ultricies.</p>
        <form>
          <input type="text" placeholder="Enter Reg">
          <input type="text" placeholder="Enter Postcode">
          <button type="submit" value="submit">Submit</button>
        </form>
      </div><!-- End Postcode Lookup -->

      <div class="form-block">
        <form action="thankyou.php">
          <label>Name</label>
          <input type="text">
          <label>Email</label>
          <input type="email">
          <label>Telephone (mobile)</label>
          <input type="tel">
          <label>What is the nature of your enquiry</label>
          <select>
            <option>Sales</option>
            <option>Customer Services</option>
            <option>Products</option>
            <option>General</option>
          </select>
          <label>Your Comments</label>
          <textarea></textarea>
        </form>
      </div>

    </div><!-- End Centered Container -->
  </main>

  <script src="js/number-counter.js"></script>

  <?php include('includes/footer.php'); ?>

</body>
</html>