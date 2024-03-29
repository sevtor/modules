#  Four new modules for report generation in webtrees

Released: February 2024

<a name="Description"></a>

## Description

Four new report definitions:
1. descendents-overview that can be used to generate a simple chart of the descendents to one person, with years of birth, marriage / partnership, divorce / separation, and death (if the years are known and the events have happened).
2. family-tree that generates pedigree charts for a selected person. Up to eight generation including the start person can be shown depending on the paper size chosen. 8 generations can be viewed on A2 paper in landscape mode.
3. family-history will generate a report in a narrative style for the selected person and either the closest family, the descendents or the ancestors. Notes and primary photos can optionally be included.
4. family-individuals generates a report for the same selection of persons as family-history but all facts and events are presented in a table for each person.

## Requirements

This module requires some changes of the app/Report part of **webtrees** that can be installed from here:
1. <a href="https://github.com/sevtor/modules/releases/download/v1.0.1/new-reports.zip">new-reports.zip</a> for webtrees all versions

Unzip the archive and copy the the files to their corresponding place in your webtrees installation.

Hopefully version 2.1.19(?) or later, with will have these changes included to support the new xml report features.

<a name="Installation"></a>

## Installation

Use the Code->download link to get a zip archive. Unzip the files and upload the modules to the **webtrees** /modules_v4/ folder on your web server.
