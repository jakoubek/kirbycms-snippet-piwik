<?php

// set the defaults
if(!isset($piwik_trackerurl))  die('Please pass the url of your piwik script');
if(!isset($piwik_siteid))      die('Please pass the id of your piwik site');

?>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  var piwik_trackerurl = '<?php echo $piwik_trackerurl ?>';
  var piwik_siteid     = '<?php echo $piwik_siteid ?>';

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + '://' + piwik_trackerurl + '/';
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "" + piwik_siteid + ""]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->