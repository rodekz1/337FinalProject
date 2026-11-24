
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Velmont Resorts | Reservation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="site-shell">

  <nav class="navbar navbar-expand-sm resort-navbar" aria-label="Main navigation">
    <div class="container-fluid">

      <a href="index.php" class="navbar-brand">
        <img src="images/logo.png" alt="Velmont Resort Logo" class="resort-logo">
        <span class="resort-title">Velmont Resorts</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#resortNavigation" aria-controls="resortNavigation"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="resortNavigation">
        <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
          <li class="nav-item"><a class="nav-link" href="dummy.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="dummy.html">Hotels</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="dummy.html">Reservations</a></li>
          <li class="nav-item"><a class="nav-link" href="reservation.html">Activities</a></li>
          <li class="nav-item"><a class="nav-link" href="dummy.html">Gallery</a></li>
        </ul>
      </div>

    </div>
  </nav>

  <main class="container-fluid page-content">
    <h2>Reservations at Velmont Resorts</h2>

    <div class="row">

      <div class="col-md-7">
        <form id="reservationForm" action="confirmation.php" method="get">

          <div class="form-row">
            <label for="name">Name:</label>
            <input id="name" name="name" type="text" required autofocus>
          </div>

          <div class="form-row">
            <label for="hotel">Hotel:</label>
            <select id="hotel" name="hotel" required>
              <option value="">Choose Hotel</option>
              <option value="Vermont">Velmont Burlington</option>
              <option value="Pennsylvania">Velmont Philadelphia</option>
              <option value="California">Velmont San Diego</option>
            </select>
          </div>

          <div class="form-row">
            <label for="address">Address:</label>
            <input id="address" placeholder="Bldg/Apt/House # and Street" name="address" type="text" required>
          </div>

          <div class="form-row">
            <label for="city">City:</label>
            <input id="city" name="city" type="text" required>
          </div>

          <div class="form-row">
            <label for="state">State:</label>
            <select id="state" name="state" required>
              <option value="">Choose State</option>
              <option value="Alabama">Alabama</option>
              <option value="Alaska">Alaska</option>
              <option value="Arizona">Arizona</option>
              <option value="Arkansas">Arkansas</option>
              <option value="California">California</option>
              <option value="Colorado">Colorado</option>
              <option value="Connecticut">Connecticut</option>
              <option value="Delaware">Delaware</option>
              <option value="Florida">Florida</option>
              <option value="Georgia">Georgia</option>
              <option value="Hawaii">Hawaii</option>
              <option value="Idaho">Idaho</option>
              <option value="Illinois">Illinois</option>
              <option value="Indiana">Indiana</option>
              <option value="Iowa">Iowa</option>
              <option value="Kansas">Kansas</option>
              <option value="Kentucky">Kentucky</option>
              <option value="Louisiana">Louisiana</option>
              <option value="Maine">Maine</option>
              <option value="Maryland">Maryland</option>
              <option value="Massachusetts">Massachusetts</option>
              <option value="Michigan">Michigan</option>
              <option value="Minnesota">Minnesota</option>
              <option value="Mississippi">Mississippi</option>
              <option value="Missouri">Missouri</option>
              <option value="Montana">Montana</option>
              <option value="Nebraska">Nebraska</option>
              <option value="Nevada">Nevada</option>
              <option value="New Hampshire">New Hampshire</option>
              <option value="New Jersey">New Jersey</option>
              <option value="New Mexico">New Mexico</option>
              <option value="New York">New York</option>
              <option value="North Carolina">North Carolina</option>
              <option value="North Dakota">North Dakota</option>
              <option value="Ohio">Ohio</option>
              <option value="Oklahoma">Oklahoma</option>
              <option value="Oregon">Oregon</option>
              <option value="Pennsylvania">Pennsylvania</option>
              <option value="Rhode Island">Rhode Island</option>
              <option value="South Carolina">South Carolina</option>
              <option value="South Dakota">South Dakota</option>
              <option value="Tennessee">Tennessee</option>
              <option value="Texas">Texas</option>
              <option value="Utah">Utah</option>
              <option value="Vermont">Vermont</option>
              <option value="Virginia">Virginia</option>
              <option value="Washington">Washington</option>
              <option value="West Virginia">West Virginia</option>
              <option value="Wisconsin">Wisconsin</option>
              <option value="Wyoming">Wyoming</option>
            </select>
          </div>

          <div class="form-row">
            <label for="zip">Zip Code:</label>
            <input id="zip" placeholder="12345" name="zip" type="text" inputmode="numeric"
                   pattern="[0-9]{5}(-[0-9]{4})?" required>
          </div>

          <div class="form-row">
            <label for="checkin">Check-in Date:</label>
            <input id="checkin" name="checkin" type="date" required>
          </div>

          <div class="form-row">
            <label for="checkout">Check-out Date:</label>
            <input id="checkout" name="checkout" type="date" required>
          </div>

          <div class="form-row">
            <label for="people">Number of Guests:</label>
            <input id="people" name="people" type="number" min="1" step="1" required>
          </div>

          <div class="form-row">
            <label for="room">Room Type:</label>
            <select id="room" name="room" required>
              <option value="">Choose a room</option>
              <option value="King">King</option>
              <option value="Queen">Queen</option>
              <option value="Suite">Suite</option>
            </select>
          </div>

          <div class="form-row">
            <label for="phone">Phone:</label>
            <input id="phone" name="phone" type="tel"
                   placeholder="(123) 456-7890"
                   pattern="\([0-9]{3}\) [0-9]{3}-[0-9]{4}" required>
          </div>

          <div class="form-row">
            <label for="email">E-mail Address:</label>
            <input id="email" name="email" type="email"
                   placeholder="name@domain.com" required>
          </div>

          <div class="form-row">
            <label for="payment">Payment Method:</label>
            <select id="payment" name="payment" required>
              <option value="">Choose payment method</option>
              <option value="MasterCard">MasterCard</option>
              <option value="VISA">VISA</option>
              <option value="AMEX">AMEX</option>
              <option value="Discover">Discover</option>
            </select>
          </div>

          <div class="form-row">
            <label for="card">Card Number:</label>
            <input id="card" name="card" type="text" inputmode="numeric"
                   placeholder="1234 5678 9012 3456"
                   pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}"
                   maxlength="19" required>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Reserve a room</button>
            <button type="reset" class="btn btn-success">Clear</button>
          </div>

        </form>
      </div>

      <div class="col-md-5">
        <img src="images/resort.jpeg"
             alt="Velmont Resorts"
             class="img-fluid reservation-image">
      </div>

    </div>
  </main>

  <footer class="site-footer">
    Copyright &copy; 2026 Velmont Resorts<br>
    email:
    <a href="mailto:velmont.resorts@gmail.com">
      velmont.resorts@gmail.com
    </a>
  </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
