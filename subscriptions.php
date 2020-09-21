<?php include("path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_header.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_navigation.php"); ?>

<div class="container">

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Subscription</h1>
      <p class="lead">There are two subscription periods (Feb-Jan and June-May). Anyone who joins in between this
        subscription period will get the journals from that month as well as the journals from the missed-out month/s.
        The journals are issued every fortnight (10th and 25th). 1Year, 3 Years and 5years subscriptions are offered
        for the subscribers. Cost of subscription varies based on the type of subscriber and the duration of the
        subscription.</p>
    </div>
  </div>

  <div class="container">
    <h2>Universities/Institutions/Govt.Departments</h2>
    <br>
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">One Year Plan</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Rs 7000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Plan Duration: 12 Months</li>
          </ul>
          <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php?plan=University&dur=1&price=7000">Subcribe</a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Three Year Plan</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Rs 18000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Plan Duration: 36 Months</li>
          </ul>
          <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php?plan=University&dur=3&price=18000">Subcribe</a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Five Year Plan</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Rs 28000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Plan Duration: 60 Months</li>
          </ul>
          <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php?plan=University&dur=5&price=28000">Subcribe</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h2>Schools & Colleges</h2>
    <br>
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">One Year Plan</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Rs 2500 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Plan Duration: 12 Months</li>
          </ul>
          <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php?plan=School&dur=1&price=2500">Subcribe</a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Three Year Plan</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Rs 7000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Plan Duration: 36 Months</li>
          </ul>
          <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php?plan=School&dur=3&price=7000">Subcribe</a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Five Year Plan</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Rs 10000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Plan Duration: 60 Months</li>
          </ul>
          <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php?plan=School&dur=5&price=10000">Subcribe</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h2>Personal Subscriptions</h2>
    <br>
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">One Year Plan</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Rs 3000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Plan Duration: 12 Months</li>
          </ul>
          <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php?plan=Individual&dur=1&price=3000">Subcribe</a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Three Year Plan</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Rs 4000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Plan Duration: 36 Months</li>
          </ul>
          <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php?plan=Individual&dur=3&price=4000">Subcribe</a>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Five Year Plan</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">Rs 6000 <small class="text-muted">/ yr</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Plan Duration: 60 Months</li>
          </ul>
          <a type="button" class="btn btn-lg btn-block btn-primary" href="checkout.php?plan=Individual&dur=5&price=6000">Subcribe</a>
        </div>
      </div>
    </div>
  </div>

</div>


</div>

<?php include(ROOT_PATH . "/app/includes/_footer.php"); ?>