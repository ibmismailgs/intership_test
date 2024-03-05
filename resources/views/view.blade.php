<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $post->title }} Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row">

      <div class="col-md-4">
        <div class="card mb-4">
            <img src="{{ asset($post->image) }}" class="card-img-top" alt="post image" title="post image">
            <div class="card-body">
            <h5 class="card-title">Title : {{ $post->title ?? '' }}</h5>
            <p class="card-text">User Name: {{ isset($post->user) ? $post->user->name : " not found" }}
            </p>
            <p class="card-text">Created At: {{ $post->created_at->format('d-M-Y, h:i:s a') }}</p>
            </div>
        </div>
        </div>

  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
