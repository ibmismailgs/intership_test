<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Internship Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .container {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .content {
      flex: 1;
      display: flex;
    }
    .sidebar {
      background: #f4f4f4;
      width: 200px;
    }
    .main-content {
      flex: 1;
      padding: 20px;
      height: 600px;
      width: 728px;
    }
    header {
      background-color: #3800af;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
    }
    header b {
      margin-right: 10px; /* Add some space between the times */
    }
    footer {
      background-color: #3800af;
      color: #fff;
      padding: 20px;
      text-align: center;
      margin-top: auto;
      width: 100%;
    }
  </style>
</head>
<body>

<div class="container">
  <header><div>
    Start Time: <b>10:32am</b>
  </div>
  <div>
    End Time: <b>12:30pm</b>
  </div></header>
  <div class="content">
    <div class="sidebar">
        <p>
            With due respect, I’m starting that, I’m <b>Md Ismail Ghoni Sarkar. </b> have completed my bachelor of Science degree in CSE from Uttara University.
        </p>
        <p>Looking for a hard and challenging job where I can utilize my potentiality and skills to do something innovative. As a student of CSE Department, I would I like to show my immense aspiration to prove myself as a sincere and energetic person through my skills, methods, extensive hard working and integrity.</p>
    </div>
    <div class="main-content">
        <table id="data_table" class="table table-bordered table-striped data-table table-hover">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>User</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $post->title ?? '' }}</th>
                    <th>{{ isset($post->user) ? $post->user->name : " not found" }}</th>
                    <th>{{ $post->created_at->format('d-M-Y, h:s:a A') }}</th>
                    <th>
                        <a id="view" href="{{ route('post.view', $post->id)}}" class="btn btn-sm btn-primary" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
  <footer >GitHub: <b>https://github.com/ibmismailgs</b> </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
