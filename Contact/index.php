<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="./responsive.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,700;1,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Chela One:wght@400&display=swap"
    />
  </head>
  <body>
  <div class="profile-page">
    <div class="menu">
      <a class="logo" href="/index"> </a>
      <div class="menu-items">
      <a class="home" href="../index.html">Home</a>
      <a class="home" href="/">My City</a>
      <a class="home" href="../Citadel/citadel.html">Heritage</a>
      <a class="home" href="../CV/index.html">CV</a>
      <a class="home" href="../api/index.html">My interests</a>
      <a class="home" href="../Contact/index.php">Contact</a>
        </div>
        <div class="account-buttons">
          <a class="log-in" href="../login2/index.php">
            <b class="explore-the-world">Log In</b>
          </a>
        <a class="sign-up" href="/">
          <b class="explore-the-world">Sign Up</b>
        </a>
      </div>
      <div id="mobile-menu-icon">
        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
      </div>
    </div>
  </div>
     
  <div class="contact-us">
    <main class="contact-us-inner">
      <div class="frame-parent">
        <div class="frame-container">
          <div class="frame-group">
            <div class="contact-us-wrapper">
              <h1 class="contact-us1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contact Us</h1>
            </div>
            <h3 class="any-question-or">
              Any question or remarks? Just write us a message!
            </h3>
          </div>
        </div>
        <section class="frame-section">
          <div class="frame-div">
            <div class="frame-parent1">
              <div class="frame-wrapper1">
                <div class="frame-parent2">
                  <img
                    class="frame-child"
                    alt=""
                    src="./public/group-1000001786.svg"
                  />

                  <div class="vector-parent">
                    <img
                      class="frame-item"
                      alt=""
                      src="./public/rectangle-3841.svg"
                    />

                    <div class="contact-information-parent">
                      <h1 class="contact-information">Contact Information</h1>
                      <h3 class="say-something-to">
                        Say something to start a live chat!
                      </h3>
                    </div>
                    <div class="frame-parent3">
                      <div class="bxsphone-call-parent">
                        <img
                          class="bxsphone-call-icon"
                          loading="lazy"
                          alt=""
                          src="./public/bxsphonecall.svg"
                        />

                        <div class="div">+905310158994</div>
                      </div>
                      <div class="icsharp-email-parent">
                        <img
                          class="icsharp-email-icon"
                          loading="lazy"
                          alt=""
                          src="./public/icsharpemail.svg"
                        />

                        <div class="jiyarkemalgmailcom">
                          Jiyarkemal@gmail.com
                        </div>
                      </div>
                      <div class="carbonlocation-filled-parent">
                        <img
                          class="carbonlocation-filled-icon"
                          loading="lazy"
                          alt=""
                          src="./public/carbonlocationfilled.svg"
                        />

                        <div class="kemalpaa-208-sk">
                          Kemalpaşa, 208. Sk., 54050 Serdivan/Sakarya
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div id="app">
              <form @submit.prevent="submitForm">
              <div class="user-form">
                <div class="name-fields-parent">
                  <div class="name-fields">
                    <div class="name-labels">
                      <div class="first-name">First Name</div>
                      <div class="first-name-example">
                        <input
                        name="username"
                        id="name"
                        v-model="name"
                        class="example"
                        type="text"
                        />
                      </div>
                      <img
                        class="name-input-icons"
                        alt=""
                        src="./public/vector-6.svg"
                      />
                      <span class="error">{{ nameError }}</span>
                    </div>
                    <div class="name-labels">
                      <div class="first-name">last Name</div>
                      <div class="first-name-example">
                        <input
                        name="lastname"
                        id="lastname"
                        v-model="lastname"
                        class="example"
                        type="text"
                        />
                      </div>
                      <img
                        class="name-input-icons"
                        alt=""
                        src="./public/vector-6.svg"
                      />
                      <span class="error">{{ lastnameError }}</span>
                    </div>
                  </div>
                  <div class="form">
                    <div class="form-fields">
                      <div class="email-input-box">
                        <div class="name-fields1">
                          <div class="email-input-content">
                            <div for="email" class="email">Email</div>
                            <input
                            name="email"
                            id="email"
                            v-model="email"
                            class="example"
                            placeholder="name@example.com"
                            type="email"
                            />
                            <img
                            class="email-input-icon"
                            alt=""
                            src="./public/vector-6.svg"
                          />
                          <span class="error">{{ emailError }}</span>
                          </div>
                          <div class="email-input-content">
                            <div for="email" class="email">Phone Number</div>
                            <input
                            name="number"
                            id="phoneNumber"
                            v-model="phoneNumber"
                            class="example"
                            placeholder="5*******"
                            type="text"
                            />
                            <img
                            class="email-input-icon"
                            alt=""
                            src="./public/vector-6.svg"
                          />
                          <span class="error">{{ phoneError }}</span>
                          </div>
                        </div>
                      </div>
                      <div class="message-field">
                        <div class="message-input">
                          <div class="message">Message</div>
                          <div class="write-your-message">
                            <textarea
                            name="number"
                            class="textarea"
                            v-model="message"
                            id="message"
                            placeholder="please write your message"
                            ></textarea>
                            <span class="error">{{ messageError }}</span>
                          </div>
                        </div>
                        <img
                          class="message-field-child"
                          loading="lazy"
                          alt=""
                          src="./public/vector-9.svg"
                        />
                      </div>

                    </div>
                    <button class="send-message-wrapper" @click="clearForm">
                      <div type="button" class="send-message">Clear Form</div>
                    </button>
                    <button class="send-message-wrapper">
                      <div class="send-message">Send Message</div>
                    </button>
                  </div>
                </div>

              </div>
              </form>
              </div>
            </div>
          </div>
          <div class="letter-send-1-wrapper">
            <img
              class="letter-send-1-icon"
              loading="lazy"
              alt=""
              src="./public/letter-send-1@2x.png"
            />
          </div>
        </section>
      </div>
    </main>
  </div>

<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="main.js"></script>
  <script src="app.js"></script>
  </body>
</html>