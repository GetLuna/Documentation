<?php $section = "docs"; $dsection = "for"; $dpage = "translations"; $subsection = "34";	include('../include/header.php') ?>
<div class="row main">
      <div class="col-sm-3">
            <?php include ('docsnav.php') ?>
      </div>
      <div class="col-sm-9">
      <h1>Language packs</h1>
      <p>For an overview of language packs and how to install them, please see the <a href="customizing.php">customizing</a> page.</li>
      <h2>Developing</h2>
      <p>Until the official Luna Translation Center is finished, which will allow for translating the software online, language packs have to be created by hand.</li>
      <p>To start translating Luna, you need software like Poedit to load the translation files and start translating.</li>
      <h3>Stopwords</h3>
      <p>The <code>stopwords.txt</code> file contains a list of words which should not be indexed in users comments. This should be used to filr ter out common words which do not add value to a search, for example, in English, words such as &ldquo;the&rdquo; and &ldquo;it's&rdquo;. For more information, check <a title="http://en.wikipedia.org/wiki/Stop_words" href="http://en.wikipedia.org/wiki/Stop_words" rel="nofollow">Wikipedia</a>.</li>
      <h2>Releasing</h2>
      <p>Until this will be possible online through the Translation Center, language packs will have to be packaged and uploaded manually. You can just comment a thread announcing and linking to your language pack.</li>
      </div>
</div>
<?php include '../include/footer.php' ?>