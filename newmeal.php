<?php include 'partials/header.php'; ?>
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="nav-wrapper">
        <a href="home.php" class="nav-back hide-on-med-and-up"><i class="material-icons">arrow_back</i></a>
        <a href="#!" class="main-brand hide-on-med-and-down">New Meal</a>
        <a href="#!" class="brand-logo hide-on-med-and-up">New Meal</a>
        <ul class="main-nav hide-on-med-and-down">
          <li><a href="#">Account</a></li>
          <li><a href="#">Messages</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="index.php">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- Main Body Content -->
  <div class="container">
    <br><br>
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <form class="col s12" action="newmeal.php" method="post">
          <!-- meal name option -->
          <div class="row">
            <div class="input-field col s12">
              <input id="meal_name" name="meal_name" type="text" class="validate">
              <label for="meal_name">Meal name</label>
            </div>
          </div>
          <!-- meal type option -->
          <div class="row">
            <div class="input-field col s12">
              <input id="meal_type" name="meal_type" type="text" class="validate">
              <label for="meal_type">Meal type</label>
            </div>
          </div>
          <!-- date option -->
          <div class="row">
            <div class="input-field col s12">
              <input type="date" id="meal_date" name="meal_date" class="datepicker">
              <label for="meal_date">Meal date</label>
            </div>
          </div>
          <!-- food item option 1 -->
          <div class="row">
            <div class="input-field col s12">
              <input id="food_type_1"  name="meal_item_1" type="text" class="validate">
              <label for="food_type_1">Food item 1 (required)</label>
            </div>
          </div>
          <!-- food item option 2 -->
          <div class="row">
            <div class="input-field col s12">
              <input id="food_type_2"  name="meal_item_2" type="text" class="validate">
              <label for="food_type_2">Food item 2</label>
            </div>
          </div>
          <!-- food item option 3 -->
          <div class="row">
            <div class="input-field col s12">
              <input id="food_type_3"  name="meal_item_3" type="text" class="validate">
              <label for="food_type_3">Food item 3</label>
            </div>
          </div>
          <!-- food item option 4 -->
          <div class="row">
            <div class="input-field col s12">
              <input id="food_type_4"  name="meal_item_4" type="text" class="validate">
              <label for="food_type_4">Food item 4</label>
            </div>
          </div>
          <!-- food item option 5 -->
          <div class="row">
            <div class="input-field col s12">
              <input id="food_type_5"  name="meal_item_5" type="text" class="validate">
              <label for="food_type_5">Food item 5</label>
            </div>
          </div>
          <!-- save meal button -->
          <div class="row">
            <div class="input-field col s12">
              <button class="btn btn-large wide-btn waves-effect waves-light" type="submit" name="submit">Save Meal
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php include 'partials/footer.php'; ?>
