#  Five new modules for report generation in webtrees

Released: September 2025

## Description

Five new report definitions:
1. **descendents-overview** that can be used to generate a simple chart of the descendants to one person, with years of birth, marriage/ partnership, divorce/separation, and death (if the years are known and the events have happened).
2. **family-tree** that generates pedigree charts for a selected person. Up to eight generations including the start person can be shown depending on the paper size chosen. 8 generations can be viewed on A2 paper in landscape mode.
3. **family-history** will generate a report in a narrative style for the selected person and either the closest family, the descendants or the ancestors. Notes and primary photos can optionally be included.
4. **family-individuals** generates a report for the same selection of persons as family-history but all facts and events are presented in a table for each person.
5. **missing_tags** generates a report of all persons who don't have birth, marriage or death records, selectable what to report.

## Requirements

**This module requires some changes to the app/Report AND resources/xml/reports parts of webtrees** and they can be downloaded here:

<a href="https://github.com/sevtor/modules/releases/latest/download/new-reports-v15.zip">new-reports.zip</a> **v15 for webtrees version 2.2.n**

Version v15: Descendants overview updated to indicate when one person appears in two places,
e.g. when cousins have married. Their children, grandchildren et c. are hidden in the second occurrance.


## Installation

Get the modules by tapping the 'Code' button and then 'Download zip'.
Unzip the archive and copy the files to their corresponding place in your **webtrees** installation. The new-reports.zip  must also be installed in the same way. The latter archive includes new versions of many xml report definitions that give clickable links in reports formatted for html.

The list of report modules is now very long and I  recommend disabling some. In the control panel one can select Modules --> Reports and uncheck some reports. Ancestors is replaced by Family tree, Ancestors and Descendents are replaced by Family history, Related families and Related individuals are replaced by Family individuals.  Some other reports may also be unused and can be disabled.

Hopefully, a later version of **webtrees** will include these changes to support the new xml report features.

Use the Code->download link to get a zip archive. Unzip the files and upload the modules to the webtrees /modules_v4/ folder on your web server. **N.B. The corresponding new-reports.zip archive must also be installed!**
