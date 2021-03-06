<?php get_header(); ?>

<div class="Ftab">
    <div class="container">
        <div class="firstScreen__inner content">
            <div class="content__text">
                <h2>A Simple Bookmark Manager</h2>
                <p>A clean and simple interface to organize your favourite websites. Open a new browser tab and see your
                    sites load instantly. Try it for free.</p>
                <div class="content__text-btn">
                    <button class="btn btn-m">Get it on Chrome</button>
                    <button class="btn btn-m">Get it on Firefox</button>
                </div>
            </div>
            <div class="content__img">
                <img src="images/illustration-hero.svg" alt="desktop screen ilustration">
                <div class="contentImg__rectangle">
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div id="features" class="features">
    <div class="container">
        <div  class="features__inner">
            <h3 class="title">Features</h3>
            <p class="subtitle">Our aim is to make it quick and easy for you to access your favourite websites. Your
                bookmarks sync between your
                devices so you can access them on the go.</p>
            <div class="features__tabs tabs">
                <div class="tab-links">
                    <button id="tab1" class="tabItem active" onclick="openTab('simpleBookmarking','tab1')">
                        <span>Simple Bookmarking</span>
                    </button>
                    <button id="tab2" class="tabItem" onclick="openTab('speedySearching','tab2')">
                        <span>Speedy Searching</span>
                    </button>
                    <button id="tab3" class="tabItem" onclick="openTab('easySharing','tab3')">
                        <span>Easy sharing</span>
                    </button>
                </div>
                <article id="simpleBookmarking" class="tabcontent content active">
                    <div class="content__img">
                        <img src="images/illustration-features-tab-1.svg"
                            alt="desktop screen ilustration">
                        <div class="contentImg__rectangle">
                        </div>
                    </div>
                    <div class="content__text">
                        <h5>Bookmark in one click</h5>
                        <p>Organize your bookmarks however you like. Our simple drag-and-drop interface gives you
                            complete
                            control over how you manage your favourite sites.</p>

                        <button class="btn btn-s">More Info</button>
                    </div>
                </article>
                <article id="speedySearching" class="tabcontent content">
                    <div class="content__img">
                        <img src="images/illustration-features-tab-2.svg"
                            alt="desktop screen ilustration">
                        <div class="contentImg__rectangle">
                        </div>
                    </div>
                    <div class="content__text">
                        <h5>Intelligent search</h5>
                        <p>
                            Our powerful search feature will help you find saved sites in no time at all. No need to
                            trawl through all of your bookmarks.</p>

                        <button class="btn btn-s">More Info</button>
                    </div>
                </article>
                <article id="easySharing" class="tabcontent content">
                    <div class="content__img">
                        <img src="images/illustration-features-tab-3.svg"
                            alt="desktop screen ilustration">
                        <div class="contentImg__rectangle">
                        </div>
                    </div>
                    <div class="content__text">
                        <h5>Share your bookmarks</h5>
                        <p>
                            Easily share your bookmarks and collections with others. Create a shareable link that you
                            can send at the click of a button.</p>
                        <button class="btn btn-s">More Info</button>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
    <div id="pricing" class="download">
    <div class="container">
        <div class="download__inner">
            <h3 class="title">Download the extension</h3>
            <p class="subtitle"> We???ve got more browsers in the pipeline. Please do let us know if you???ve got a
                favourite you???d like us to
                prioritize.</p>
            <div class="download__cards">
                <div class="card">
                    <img class="card__logo" src="images/logo-chrome.svg" alt="Chrome logo">
                    <h6>Add to Chrome</h6>
                    <span>Minimum version 62</span>
                    <img class="card__dots" src="images/bg-dots.svg" alt="dots picture">
                    <button class="btn btn-m">Add & Install Extension</button>
                </div>
                <div class="card">
                    <img class="card__logo" src="images/logo-firefox.svg" alt="Firefox logo">
                    <h6>Add to Firefox</h6>
                    <span>Minimum version 55</span>
                    <img class="card__dots" src="images/bg-dots.svg" alt="dots picture">
                    <button class="btn btn-m">Add & Install Extension</button>
                </div>
                <div class="card">
                    <img class="card__logo" src="images/logo-opera.svg" alt="Opera logo">
                    <h6>Add to Opera</h6>
                    <span>Minimum version 46</span>
                    <img class="card__dots" src="images/bg-dots.svg" alt="dots picture">
                    <button class="btn btn-m">Add & Install Extension</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="faq">
    <div class="container">
        <div class="faq__inner">
            <h3 class="title"> Frequently Asked Questions</h3>
            <p class="subtitle"> Here are some of our FAQs. If you have any other questions you???d like answered please
                feel free to email us.</p>
            <div class="faq__questions">
                <div class="question__item">
                    <div class="question__row tabQuestion" onclick="openQuestion(event, 'question1')">
                        <h6> What is Bookmark?</h6>
                        <img src="images/icon-arrow.svg" alt="arrow iccon">
                    </div>
                    <div id="question1" class="question__answer tabAnswer">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt justo eget
                            ultricies fringilla. Phasellus blandit ipsum quis quam ornare mattis.</p>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__row tabQuestion " onclick="openQuestion(event, 'question2')">
                        <h6> How can I request a new browser? </h6>
                        <img src="images/icon-arrow.svg" alt="arrow iccon">
                    </div>
                    <div id="question2" class="question__answer tabAnswer active">
                        <p> Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa, ultricies non ligula.
                            Suspendisse imperdiet. Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa,
                            ultricies non ligula. Suspendisse imperdie tVivamus luctus eros aliquet convallis ultricies.
                            Mauris augue massa, ultricies non ligula. Suspendisse imperdiet.</p>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__row tabQuestion" onclick="openQuestion(event, 'question3')">
                        <h6> Is there a mobile app?</h6>
                        <img src="images/icon-arrow.svg" alt="arrow iccon">
                    </div>
                    <div id="question3" class="question__answer tabAnswer">
                        <p> Sed consectetur quam id neque fermentum accumsan. Praesent luctus vestibulum dolor, ut
                            condimentum urna vulputate eget. Cras in ligula quis est pharetra mattis sit amet pharetra
                            purus. Sed sollicitudin ex et ultricies bibendum.</p>
                    </div>
                </div>
                <div class="question__item">
                    <div class="question__row tabQuestion" onclick="openQuestion(event, 'question4')">
                        <h6> What about other Chromium browsers?</h6>
                        <img src="images/icon-arrow.svg" alt="arrow iccon">
                    </div>
                    <div id="question4" class="question__answer tabAnswer">
                        <p> Integer condimentum ipsum id imperdiet finibus. Vivamus in placerat mi, at euismod dui.
                            Aliquam vitae neque eget nisl gravida pellentesque non ut velit.</p>
                    </div>
                </div>
                <button class="btn">More Info</button>
            </div>
        </div>
    </div>
</div>
    <div id="contact" class="contacts">
  <div class="container">
    <div class="contacts__inner">
      <span>35,000+ already joined</span>
      <p>Stay up-to-date with what we???re doing</p>
      <form action="#" method="post">
        <label for="email"></label>
        <div class="email-wrap">
          <input type="email" id="email" name="email" placeholder="Enter your email adress">
          <div class="error-mesage error" id="error" hidden>
            <p>Whoops, make sure it's an email</p>
          </div>
        </div>
        <button type="submit" value="Contact" class="btn ">Contact Us</button>
      </form>
    </div>
  </div>
</div>
<?php get_footer(); ?>
