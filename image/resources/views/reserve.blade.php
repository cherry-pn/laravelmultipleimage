  <!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {
    box-sizing: border-box;
  }


  input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }

  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }

  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-left:300px;
    margin-right:400px; 
  }

  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }

  .col-75 {
    float: left;
    width: 70%;
    margin-top: 6px;
  }


  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
  </style>
  </head>
  <body>

  <h2>Responsive Form</h2>


  <div class="container">
    <form action="/action_page.php">
      <div class="row">
        <div class="col-25">
          <label for="name">Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="name" placeholder="Your name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="contact">Contact</label>
        </div>
        <div class="col-75">
          <input type="text" id="contact" name="contact" placeholder="Your contact number..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="end-date">start-date </label>
          </div>
          <div class="col-75">
          <input type="date" id="start-date" name="start-date" value="2018-07-22" min="2021-01-01" max="2022-12-31">
        </div>
      </div>
    
      <div class="row">
        <div class="col-25">
          <label for="end-date">end-date </label>
          </div>
          <div class="col-75">
          <input type="date" id="end-date" name="end-date" value="2018-07-22" min="2021-01-01" max="2022-12-31">
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>

  </body>
  </html>
