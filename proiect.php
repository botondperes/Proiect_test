<!DOCTYPE html>
<html>
  <head>
    <title>Example of Twitter Bootstrap</title>
    <!-- Include the bootstrap stylesheets -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  </head>
 
  <body>
    <div class="container">
      <h1>Search</h1>
      <label>Example for a simple search form.</label>
 
      <!-- Search form with input field and button -->
      <form class="well form-search">
        <input type="text" class="input-medium search-query">
        <button type="submit" class="btn btn-primary" >Search</button> 
      </form>
 
      <h2>Results</h2>
 
      <!-- Table with alternating cell background color and outer frame -->
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Lorem ipsum dolor ...</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Ut enim ad minim veniam, ...</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Duis aute irure dolor ...</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- JavaScript placed at the end of the document so the pages load faster -->
    <!-- Optional: Include the jQuery library -->
    <script src="http:/code.jquery.com/jquery-1.7.2.min.js"></script>
 
    <!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
    <script src="http:/netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>