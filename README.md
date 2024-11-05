#  Five new modules for report generation in webtrees

Released: November 2024

## Description

Five new report definitions:
1. descendents-overview that can be used to generate a simple chart of the descendents to one person, with years of birth, marriage / partnership, divorce / separation, and death (if the years are known and the events have happened).
2. family-tree that generates pedigree charts for a selected person. Up to eight generation including the start person can be shown depending on the paper size chosen. 8 generations can be viewed on A2 paper in landscape mode.
3. family-history will generate a report in a narrative style for the selected person and either the closest family, the descendents or the ancestors. Notes and primary photos can optionally be included.
4. family-individuals generates a report for the same selection of persons as family-history but all facts and events are presented in a table for each person.
5. missing_tags generates a report of all persons who don't have birth, marriage or death records, selectable what to report.

## Requirements

I was optimistic on compatibility between the app/Report module of different versions of **webtrees**. Therefore there are now more versions!
This module requires some changes of the app/Report part of **webtrees** that can be installed from here:
1. <a href="https://github.com/sevtor/modules/releases/download/v1.0.1/new-reports.zip">new-reports.zip</a> for webtrees versions 2.1.17-18
2. <a href="https://github.com/sevtor/modules/releases/download/v1.0.2/new-reports-2.1.20.zip">new-reports.zip</a> for webtrees version 2.1.20
Other version may be added when new versions of **webtrees** are released.

Unzip the archive and copy the the files to their corresponding place in your webtrees installation.

The list of report modules is now very long and I recommend to disable some. In the control panel one can select Modules --> Reports and uncheck some reports. Ancestors is replaced by Family tree, Ancestors and Descendents are replaced by Family history, Related families and related individuals are replaced by Family individuals. Some other reports may also be unused and can be disabled.

Hopefully a later version of **webtrees** will have the changes included to support the new xml report features.

## Installation

Use the Code->download link to get a zip archive. Unzip the files and upload the modules to the **webtrees** /modules_v4/ folder on your web server.
