<div class="container">
  <div class="search-course-form h-white text-center">
    <h3>Search Scholarship</h3>
    <ul>
      <li>
        <div class="form-group">
          <select class="form-control">
            <option>Discipline</option>
            <option>Arts</option>
            <option>Humanities</option>
            <option>Social Sciences</option>
            <option>Natural Sciences</option>
            <option>Formal Sciences</option>
            <option>Professions & Applied Sciences</option>

          </select>
        </div>
      </li>
      <li>
        <div class="form-group">
          <select class="form-control">
            <option>Study level</option>
            <option>Barchelors</option>
            <option>Masters</option>
            <option>Doctorate/PhD</option>
          </select>
        </div>
      </li>
      <li>
        <div class="form-group">
          <select class="form-control">
            @include('partials.countries')
          </select>
        </div>
      </li>
      <li>
        <div class="form-group">
          <input class="form-control" placeholder="Search keyword" type="text">
        </div>
      </li>
      <li>
        <a class="btn orange full-width" href="#">Search<i class="fa fa-search"></i></a>
      </li>
    </ul>
  </div>
</div>
<!-- Search Course Form -->
