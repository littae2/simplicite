<!-- <div class= "nav">
      <a class="nav-link" href="{{url('/welcome')}}">Home</a>
      <a class="nav-link" href="{{url('/view-cohorts')}}">Cohort</a>
      <a class="nav-link" href="{{url('/students')}}">Students</a>
      <a class="nav-link" href="{{url('/upload')}}">Upload</a>
      <a class="nav-link" href="{{url('/enrolment')}}">Enrollment</a>
</div> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="nav">
  <div class="col-md-12 school-options-dropdown text-center nav-link">

    <div class="nav">
      <a class="nav-link" href="{{url('/welcome')}}">Home</a>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Students
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{url('/upload')}}">Upload Files</a>
          <a class="dropdown-item" href="{{url('/students/create')}}">Add Student</a>
          <a class="dropdown-item" href="{{url('/students')}}">View Students</a>
          <div class="dropdown-submenu">
          </div>
      </li>

      <a class="nav-link" href="{{url('/view-cohorts')}}">Cohort</a>
      <!-- <a class="nav-link" href="{{url('/enrolment')}}">Enrollment</a> -->

      <form action="{{route('logout')}}" method="POST">
        @csrf
        @method('POST')
        <button class="btn btn-link nav-link" id="logout-btn">Logout</button>
      </form>

    </div>
  </div>
</div>
</div>