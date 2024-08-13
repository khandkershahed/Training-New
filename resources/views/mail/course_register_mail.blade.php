<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h4 class="fw-bold">Dear {{ $mailData['name'] }}</h4>

    <p>Congratulations! You have registered for this course successfully. Please log in to your dashboard for further details and make the payment as soon as possible.</p>

    <p class="mb-0">Email: {{ $mailData['email'] }}</p>
    <p class="mb-0">password: <span class="text-primary fw-bolder">{{ $mailData['phone'] }}</span></p>
    <p>Visit URL: <a href="https://training.ngengroup.org/login">https://training.ngengroup.org/login</a></p>

    <p class="mb-0">Regards and Thanks,</p>
    <span class="fw-bolder">NgenIt Training Team</span>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </div>
</body>
</html>
