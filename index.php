<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css" type="text/css">

  </head>
  <body>
  <h1>Maak je eigen pizza</h1> 

  <div class="form-group">
    <label for="exampleFormControlSelect1">Bodemformaat</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Maak een keuze...</option>
      <option>20 centimeter</option>
      <option>25 centimeter</option>
      <option>30 centimeter</option>
      <option>35 centimeter</option>
      <option>40 centimeter</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Saus</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Maak een keuze...</option>
      <option>Tomatensaus</option>
      <option>Extra tomatensaus</option>
      <option>Spicy Tomatensaus</option>
      <option>BBQ saus</option>
      <option>Creme fraiche</option>
    </select>
  </div>

  <div>
  <label for="exampleFormControlSelect1">Pizzatoppings</label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    vegan
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    vegetarisch
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    vlees
  </label>
</div>

<div>
  <label for="exampleFormControlSelect1">Kruiden</label>
  </div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Peterselie
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Oregano
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Chili flakes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Zwarte peper
  </label>
</div>

<div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>