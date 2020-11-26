

<!doctype html>
<html lang="en" class="h-100">


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Device Detector</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body class="bg-white d-flex h-100">
  <div class="container d-flex p-3 mx-auto flex-column">
    <header class="mb-auto">
      <!-- <h3 class="float-left">DD</h3>
      <nav class="nav justify-content-center float-right">
        <a class="nav-link active" href="#">Download</a>
        <a class="nav-link active" href="#">Github</a>
      </nav> -->
    </header>

    <main role="main">
      <h1 class="text-center">Device Detector</h1>
      <p class="lead text-center">Deteksi jenis perangkat dan browse melalui user agent</p>
      <form method="POST" action="" class="text-center mb-4">
        <div class="d-flex justify-content-center form-group">
          <input type="text" class="form-control" style="width: 600px;" name="agent" placeholder="<?= $_SERVER['HTTP_USER_AGENT'] ?>">
        </div>
        <button type="submit" class="btn btn-secondary">Detect</button>
      </form>
      <?php
      include 'detector.php';
      $agent = $_SERVER['HTTP_USER_AGENT'];

      if (isset($_POST['agent']) && !empty($_POST['agent'])) {
        $agent = htmlspecialchars(addslashes(trim($_POST['agent'])));
        $detec = detector($agent);
      } else {
        $detec = detector($agent);
      }
      ?>

      <div class="row">
        <?php if (isset($detec['os']['name'])) : ?>
        <div class="col-lg mb-3">
          <div class="card">
            <div class="card-header py-2">
              <h6>Device</h6>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <td>OS</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['os']['name']))) ?></td>
                </tr>
                <tr>
                  <td>Version</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['os']['version']))) ?></td>
                </tr>
                <tr>
                  <td>Platform</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['os']['platform']))) ?></td>
                </tr>
                <?php if (isset($detec['device']['brand'])) : ?>
                <tr>
                  <td>Brand</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['device']['brand']))) ?></td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['device']['model']))) ?></td>
                </tr>
                <?php endif; ?>
              </table>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php if (isset($detec['browse']['name'])) : ?>
        <div class="col-lg mb-3">
          <div class="card">
            <div class="card-header py-2">
              <h6>Browse</h6>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <td>Name</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['browse']['name']))) ?></td>
                </tr>
                <tr>
                  <td>Version</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['browse']['version']))) ?></td>
                </tr>
                <tr>
                  <td>engine</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['browse']['engine']))) ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php if (isset($detec['bot']['name'])) : ?>
        <div class="col-lg mb-3">
          <div class="card">
            <div class="card-header py-2">
              <h6>Bot</h6>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <td>Name</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['bot']['name']))) ?></td>
                </tr>
                <tr>
                  <td>Category</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['bot']['category']))) ?></td>
                </tr>
                <tr>
                  <td>Url</td>
                  <td> : </td>
                  <td><?= htmlspecialchars(addslashes(trim($detec['bot']['url']))) ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
      
    </main>

    <footer class="mt-auto text-center">
      <p>Copyright © Your Website 2020 - W3LL SQUAD</p>
    </footer>

  </div>
</body>

</html>
