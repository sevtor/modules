#  Five new modules for report generation in webtrees

Released: April 2025

## Description

Five new report definitions:
1. **descendents-overview** that can be used to generate a simple chart of the descendants to one person, with years of birth, marriage/ partnership, divorce/separation, and death (if the years are known and the events have happened).
2. **family-tree** that generates pedigree charts for a selected person. Up to eight generations including the start person can be shown depending on the paper size chosen. 8 generations can be viewed on A2 paper in landscape mode.
3. **family-history** will generate a report in a narrative style for the selected person and either the closest family, the descendants or the ancestors. Notes and primary photos can optionally be included.
4. **family-individuals** generates a report for the same selection of persons as family-history but all facts and events are presented in a table for each person.
5. **missing_tags** generates a report of all persons who don't have birth, marriage or death records, selectable what to report.

## Requirements

I was optimistic about the compatibility between the app/Report module of the different versions of **webtrees**. Therefore there are now more versions!

**This module requires some changes to the app/Report AND resources/xml/reports parts of webtrees** and they can be downloaded here:

1. <a href="https://github.com/sevtor/modules/releases/download/v1.0.1/new-reports.zip">new-reports.zip</a> **v1.0.1 for webtrees versions 2.1.17-18**

2. <a href="https://github.com/sevtor/modules/releases/download/v1.0.3/new-reports-v3.zip">new-reports.zip</a> **v3 for webtrees version 2.1.20-22**

3. <a href="https://github.com/sevtor/modules/releases/latest/download/new-reports-v10.zip">new-reports.zip</a> **v10 for webtrees version 2.2.1-**

In version v7 treament of non-UTF-8 strings is corrected. In version v8 the relationship indicator (fmf...) can be hidden and some security issues are handled.

Version v9 includes enhancements and correction from issues 24-34.

Version v10 includes a possibility to print nicknames (if given) in the reports family-history and descendants-overview. Note that nicknames are normally not shown in the user interface unless other modules are added to support it. See issue 29 for a discussion about nicknames.

Version v11 has more consistent support for nicknames plus a possibility to choose which name to show: the first, normally at birth, or the latest, normally at death or now if still living (applies to family-history report).

Other versions may be added when new versions of **webtrees** are released.

## Installation

Get the modules by tapping the 'Code' button and then 'Download zip'.
Unzip the archive and copy the files to their corresponding place in your **webtrees** installation. The new-reports.zip  must also be installed in the same way. The latter archive includes new versions of many xml report definitions that give clickable links in reports formatted for html.

The list of report modules is now very long and I  recommend disabling some. In the control panel one can select Modules --> Reports and uncheck some reports. Ancestors is replaced by Family tree, Ancestors and Descendents are replaced by Family history, Related families and related individuals are replaced by Family individuals.  Some other reports may also be unused and can be disabled.

Hopefully, a later version of **webtrees** will include these changes to support the new xml report features.

Use the Code->download link to get a zip archive. Unzip the files and upload the modules to the webtrees /modules_v4/ folder on your web server. **N.B. The corresponding new-reports.zip archive must also be installed!**
