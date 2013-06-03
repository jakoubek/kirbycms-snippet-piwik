# Piwik-snippet for Kirby CMS

## What is it?

This snippet generates the JavaScript for integrating Piwik website statistics to your Kirby-powered site.

## Installation

Copy piwik.php to your site/snippet directory.

## How to use it?

piwik_trackerurl is the url/path to your Piwik tracker script
piwik_siteid is the id of the site you wish to track

    <?php snippet('piwik', array('piwik_trackerurl' => 'piwik.example.com', 'piwik_siteid' => '15')) ?>

## Author
Oliver Jakoubek
<http://unlaengst.de>
