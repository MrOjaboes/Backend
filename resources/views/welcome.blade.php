<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>John and Jane's Wedding</title>
    <link rel="stylesheet" type="text/css" href="/Interface/theme.css" />
    <link rel="stylesheet" type="text/css" href="/Interface/icons/css/all.min.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Caveat|Quicksand&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <style>
    /* Style inputs, select elements and textareas */
    input[type="text"],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      resize: vertical;
    }

    /* Style the label to display next to the inputs */
    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    /* Style the submit button */
    input[type="submit"] {
      background-color: #04aa6d;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
    }

    /* Style the container */
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
.row{
  margin-bottom: 1.5rem !important;
}
    /* Floating column for labels: 25% width */
    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    /* Floating column for inputs: 75% width */
    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .col-25,
      .col-75,
      input[type="submit"] {
        width: 100%;
        margin-top: 0;
      }
    }
  </style>
  <body>
    <header class="header">
      <h1 class="heading">
        John & Jane
        <span class="heading-subtext"> are getting married!</span>
      </h1>
    </header>
    <a data-scroll class="fixed-button" href="#rsvp" id="rsvpButton">RSVP</a>
    <section class="section">
      <h2 class="sub-heading">Overview</h2>
      <p>
        Church wedding debt celebrate macarena embarrassing glitter Will.
        Forever happy salad cheers photobooth photographer limousine photobooth
        photographer limousine prime rib, guitar acoustic bass photobooth
        photographer limousine sparkles beautiful sparkles guitar acoustic bass
        beautiful. Cake dessert mother guitar acoustic bass cheers, uncle joe
        seat covers guitar acoustic bass macarena seat covers cake dessert
        embarrassing.
      </p>
    </section>
    <section class="section">
      <h2 class="sub-heading">The Details</h2>
      <div class="details">
        <i class="fas fa-calendar-check"></i>
        <h3 class="details-heading">When</h3>
        <p>January 1, 2020</p>
        <a
          title="Add to Calendar"
          rel="noopener"
          href="#"
          target="_blank"
          rel="nofollow"
          >Add to Calendar</a
        >
      </div>
      <div class="details">
        <i class="fas fa-map-marked-alt"></i>
        <h3 class="details-heading">Location</h3>
        <p><a rel="noopener" href="#">Grand Venue Place</a>, City, State</p>
        <img class="resort-image" src="./img/resort.jpeg" alt="Resort" />
      </div>
      <div class="details">
        <i class="fas fa-suitcase"></i>
        <h3 class="details-heading">Lodging</h3>
        <p>
          DJ Jazzy Nupitals guitar acoustic bass embarrassing first aisle guitar
          acoustic bass cheers glitter . Macarena fish aisle aisle wedding,
          forever happy salad drunk groomsman overpriced florist embarrassing
          coworkers tuxedo aisle guitar acoustic bass champagne bouquet. Ring
          wedding beautiful tuxedo fish toast, veil Bryna aisle centerpieces.
          Cheers embarrassing bouquet bouquet Bryna overpriced florist DJ Jazzy
          Nupitals Bryna macarena. DJ Jazzy Nupitals prime rib centerpieces
          centerpieces cake dessert, cake dessert tuxedo aisle seat covers
          aisle.
        </p>
        <p>
          Church Will chicken unity sparkles Bryna cake dessert, centerpieces
          aisle Will debt guitar acoustic bass glitter . Magic sparkles father
          bridesmaid champagne bouquet wedding mother. Magic first dancing fish
          chicken champagne debt mother guitar acoustic bass.
        </p>
      </div>
      <div class="details">
        <i class="fas fa-plane-departure"></i>
        <h3 class="details-heading">Flights</h3>
        <p>
          Ring wedding beautiful tuxedo fish toast, veil Bryna aisle
          centerpieces. Cheers embarrassing bouquet bouquet Bryna overpriced
          florist DJ Jazzy Nupitals Bryna macarena.
        </p>
        <p>
          Magic sparkles father bridesmaid champagne bouquet wedding mother.
          Magic first dancing fish chicken champagne debt mother guitar acoustic
          bass.
        </p>
      </div>
      <div class="details">
        <i class="fas fa-asterisk"></i>
        <h3 class="details-heading">Other Notes</h3>
        <p>
          Cake dessert mother guitar acoustic bass cheers, uncle joe seat covers
          guitar acoustic bass macarena seat covers cake dessert embarrassing.
        </p>
        <p>
          Also, your presence is the only present we desire. No gift required.
        </p>
      </div>
      <div class="details">
        <i class="fas fa-reply"></i>
        <h3 class="details-heading" id="rsvp">RSVP</h3>
        <p>[Embed your RSVP form here]</p>
        <!-- Include Embedded link of Google Form here in place of # -->

        <div class="container">
          <form action="action_page.php">
            <div class="row">

              <div class="col-100">
                <input
                  type="text"
                  id="fname"
                  name="firstname"
                  placeholder="Your name.."
                />
              </div>
            </div>
            <div class="row">

              <div class="col-100">
                <input
                  type="text"
                  id="lname"
                  name="lastname"
                  placeholder="Your last name.."
                />
              </div>
            </div>
            <div class="row">
              <div class="col-100">
                <select id="country" name="country">
                  <option value="australia">--- Relationship ---</option>
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="usa">USA</option>
                </select>
              </div>
            </div>

            <div class="row">
              <input type="submit" value="Submit" />
            </div>
          </form>
        </div>
        <!-- <iframe title="RSVP" src="" style="width:100%;" height="960" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
      </div>
    </section>
    <script src="/Interface/js/smooth-scroll.polyfills.min.js"></script>
    <script defer>
      var scroll = new SmoothScroll('a[href*="#"]');
      var rsvpButton = document.getElementById("rsvpButton");
      rsvpButton.addEventListener("click", hideButton, false);

      function hideButton() {
        rsvpButton.style.display = "none";
      }
    </script>
  </body>
</html>
