<?php include("path.php"); ?>

<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_header.php"); ?>

<?php include(ROOT_PATH . "/app/includes/_navigation.php"); ?>

<div class="container">


    <h1 class="py-4">About the Current Science Journal</h1>

    <div class="row py-3">
        <div class="col-lg-8">
            <p>Current Science, published every fortnight by the Association, in collaboration with the Indian
                Academy of Sciences, is the leading interdisciplinary science journal from India. It was started in
                1932 by the then stalwarts of Indian science such as CV Raman, Birbal Sahni, Meghnad Saha, Martin
                Foster and S.S. Bhatnagar. In 2011, the journal completed one hundred volumes. The journal is
                intended as a medium for communication and discussion of important issues that concern science and
                scientific activities. Besides full length research articles and shorter research communications,
                the journal publishes review articles, scientific correspondence and commentaries, news and views,
                comments on recently published research papers, opinions on scientific activity, articles on
                universities, Indian laboratories and institutions, interviews with scientists, personal
                information, book reviews, etc. It is also a forum to discuss issues and problems faced by science
                and scientists and an effective medium of interaction among scientists in the country and abroad.
                Current Science is read by a large community of scientists and the circulation has been continuously
                going up.</p>

            <p>Current Science publishes special sections on diverse and topical themes of interest and this has
                served as a platform for the scientific fraternity to get their work acknowledged and highlighted.
                Some of the special sections that have been well received in the recent past include remote sensing,
                waves and symmetry, seismology in India, nanomaterials, AIDS, Alzheimer's disease, molecular biology
                of ageing, cancer, cardiovascular diseases, Indian monsoon, water, transport, and mountain weather
                forecasting in India, to name a few. Contributions to these special issues ‘which receive widespread
                attention’ are from leading scientists in India and abroad.</p>

            <p>Current Science is indexed by Web of Science, Current Contents, Geobase, Chemical Abstracts, IndMed
                and Scopus. The Impact Factor of the journal for the year 2019 is 0.725.</p>


        </div>
        <div class="col-lg-1">

        </div>

        <div class="col-lg-3">
            <div class="card my-5 py-4">

                <div class="card-body">
                    <!-- <h2 class="card-title">Subscribe</h2> -->
                    <p class="card-text text-center"><b>Here's an opportunity for you to Subscribe to some enlightening
                            Journals for a year
                            or
                            more or a lifetime. Get your personal copy at your door step after every fortnight!</b></p>
                </div>

                <div class="card-footer">
                    <?php if (isset($_SESSION['id'])) : ?>
                        <a href="subscriptions.php" class="btn btn-primary btn-block">Subscribe</a>
                    <?php else : ?>
                        <a href="login.php" class="btn btn-primary btn-block">Subscribe</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>


    </div>

    <div class="row">

        <div class="card col-md-3 mb-3">
            <div class="card-body text-center">
                <img src="assets/images/Vol119No510September2020.png" alt="..." width="100" height="135" class="img-thumbnail rounded">
                <p class="card-text">Current Issue, Vol. 119, No. 5, 10 September 2020</p>
                <a class="btn btn-primary" href="https://www.currentscience.ac.in/php/cissue.php" target="_blank">Read More</a>
            </div>
        </div>

        <div class="col-md-1"></div>

        <div class="card col-md-3 mb-3">
            <div class="card-body text-center">
                <img src="assets/images/Vol-119-Issue-04-25August2020.png" alt="..." width="100" height="135" class="img-thumbnail rounded">
                <p class="card-text">Volume 119 - Issue 04 : 25 August 2020</p>
                <a class="btn btn-primary" href="https://www.currentscience.ac.in/cs/php/toc.php?vol=119&issue=04" target="_blank">Read More</a>
            </div>
        </div>

        <div class="col-md-1"></div>

        <div class="card col-md-3 mb-3">
            <div class="card-body text-center">
                <img src="assets/images/Vol-119-Issue-02-25July2020.png" alt="..." width="100" height="135" class="img-thumbnail rounded">
                <p class="card-text">Volume 119 - Issue 02 : 25 July 2020</p>
                <a class="btn btn-primary" href="https://www.currentscience.ac.in/cs/php/toc.php?vol=119&issue=02" target="_blank">Read More</a>
            </div>
        </div>

        <div class="col-md-1"></div>

        <div class="card col-md-3 mb-3">
            <div class="card-body text-center">
                <img src="assets/images/Volume 118 - Issue 12-25  June 2020.png" alt="..." width="100" height="135" class="img-thumbnail rounded">
                <p class="card-text">Volume 118 - Issue 12 : 25 June 2020</p>
                <a class="btn btn-primary" href="https://www.currentscience.ac.in/cs/php/toc.php?vol=118&issue=12" target="_blank">Read More</a>
            </div>
        </div>

        <div class="col-md-1"></div>

        <div class="card col-md-3 mb-3">
            <div class="card-body text-center">
                <img src="assets/images/Volume 118 - Issue 11-10  June 2020.png" alt="..." width="100" height="135" class="img-thumbnail rounded">
                <p class="card-text">Volume 118 - Issue 11 : 10 June 2020</p>
                <a class="btn btn-primary" href="https://www.currentscience.ac.in/cs/php/toc.php?vol=118&issue=11" target="_blank">Read More</a>
            </div>
        </div>

        <div class="col-md-1"></div>

        <div class="card col-md-3 mb-3">
            <div class="card-body text-center">
                <img src="assets/images/Volume 118 - Issue 10-25  May 2020.png" alt="..." width="100" height="135" class="img-thumbnail rounded">
                <p class="card-text">Volume 118 - Issue 10 : 25 May 2020</p>
                <a class="btn btn-primary" href="https://www.currentscience.ac.in/cs/php/toc.php?vol=118&issue=10" target="_blank">Read More</a>
            </div>
        </div>

    </div>

</div>
</div>

<?php include(ROOT_PATH . "/app/includes/_footer.php"); ?>