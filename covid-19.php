<?php

require './setup.php';

use Utility\Functions;

$navbar = null;
const TITLE = 'COVID-19 Response';
$levels = [['title' => 'COVID-19 Response']];

Functions::extend('inner-header');
?>

<main id="main">
  <section>
    <div class="container">
      <h2 class="section-title">Our COVID Experience</h2>
      <p>
        When the world was rocked by the occurence of the coronavirus (COVID-19) pandemic, it became increasingly difficult to provide the interactive, hands-on care that we give to our patients, and among those who were affected greatly by this were our registered antenatal patients.
      </p>
      <p>However, the pandemic also brought about undeniable progress in the area of Telemedicine and Online Healthcare delivery by forcing healthcare providers to develop methods to consult with their patients remotely from the comfort of the patients' homes.</p>
      <p>One of the ways this was shown in our hospital was the use of teleconferencing software to reach out to our patients and continually confer with and educate them about their health and best health practices, especially during the pandemic.</p>
    </div>
  </section>
</main>

<?php

Functions::extend('footer');
