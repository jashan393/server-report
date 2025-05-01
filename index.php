<?php
  // Update $name variable with your name
  $name = '';
  
  // Create $section variable with your course section
  $section = '';

  // SQLite version
  $db = new PDO('sqlite:data.sqlite');
  $sqlite = $db->getAttribute(PDO::ATTR_SERVER_VERSION);

  // Full URL
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
  $port = ($_SERVER['SERVER_PORT'] != 80) ?  ':' . $_SERVER['SERVER_PORT'] : '';
  $url = $protocol . $_SERVER['SERVER_NAME'] . $port . $_SERVER['PHP_SELF'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4 my-5">Server Report</h1>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            Name
          </div>
          <div class="card-body">
            <div class="card-title"><?php echo $name; ?></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            Section
          </div>
          <div class="card-body">
            <div class="card-title"><?php echo $section; ?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            Server API
          </div>
          <div class="card-body">
            <div class="card-title"><?php echo php_sapi_name(); ?></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            Operating System
          </div>
          <div class="card-body">
            <div class="card-title"><?php echo php_uname('s') . ' ' . php_uname('r'); ?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            PHP Version
          </div>
          <div class="card-body">
            <div class="card-title"><?php echo phpversion(); ?></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            SQLite Version
          </div>
          <div class="card-body">
            <div class="card-title"><?php echo $sqlite; ?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            URL
          </div>
          <div class="card-body">
            <div class="card-title"><?php echo $url; ?></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            Date
          </div>
          <div class="card-body">
            <div class="card-title"><?php echo date('F j, Y', $_SERVER['REQUEST_TIME']); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>