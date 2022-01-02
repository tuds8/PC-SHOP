<style>
.card {
  /* Add shadows to create the "card" effect */
  width: 200px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
.table_design{
    border-spacing: 100px;
    column-gap: 200px;
    top: 0px;
    left: 300px;
}
/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>


<div class="row">
  <div class="column">
    <img src="assets/img/1.jpg" alt="Snow" style="width:10%">
  </div>
  <div class="column">
    <img src="assets/img/1.jpg" alt="Forest" style="width:10%">
  </div>
  <div class="column">
    <img src="assets/img/1.jpg" alt="Mountains" style="width:10%">
  </div>
</div>