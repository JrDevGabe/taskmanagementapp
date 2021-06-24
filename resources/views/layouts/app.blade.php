<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js" defer></script>
	<title>Task Management App</title>
	<style>
    	html{
    		
    		font-family: 'Nunito Sans', sans-serif;
    	}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
    <a class="navbar-brand" href="/">Task Manager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/tasks">Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/create">Create Task</a>
        </li>
      </ul>
    </div>
      </div>
    </nav>

    <div class="container">
    	@yield('content');
    </div>
</body>
</html>