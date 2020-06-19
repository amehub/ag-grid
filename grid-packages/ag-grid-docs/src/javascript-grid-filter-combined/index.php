<?php
$pageTitle = "Combined Filter - Overview";
$pageDescription = "The Combined Filter is an Enterprise feature of ag-Grid supporting Angular, React, Javascript and more, allowing developers to combine the Set Filter with other filters.";
$pageKeywords = "ag-Grid JavaScript Data Grid Excel Set Filtering";
$pageGroup = "feature";
include '../documentation-main/documentation_header.php';
?>

<h1 class="heading-enterprise">Combined Filter - Overview</h1>

<p class="lead">
    The Combined Filter allows you to combine the <a href="../javascript-grid-filter-set/">Set Filter</a> with another
    filter, giving your users more flexibility in how they filter data in the grid.
</p>

<p>
    You can use any of the grid's provided filters or provide your own to be wrapped alongside the Set Filter.
    Only one filter will be active at a time: if you use the Set Filter, the other filter will be reset, and vice versa.
</p>

<h2>Enabling the Combined Filter</h2>

<p>
    To use a Combined Filter, specify the following in your Column Definition:
</p>

<?= createSnippet(<<<SNIPPET
// ColDef
{
    filter: 'agCombinedColumnFilter'
}
SNIPPET
) ?>

<p>
    The example below shows the Combined Filter in action. Note the following:
</p>

<ul>
    <li>The <strong>Athlete</strong> has a Combined Filter with default behaviour.</li>
    <li>
        The <strong>Country</strong>, <strong>Gold</strong> and <strong>Date</strong> columns have Combined Filters with
        the type of the wrapped filter stated explicitly, using
        <a href="../javascript-grid-filter-text/">Text</a>,
        <a href="../javascript-grid-filter-number/">Number</a> and
        <a href="../javascript-grid-filter-date/">Date</a> Simple Filters respectively.
    </li>
    <li>
        The <strong>Year</strong> column has a <a href="../javascript-grid-filter-custom/">Custom Filter</a>
        specified.
    </li>
    <li>
        Filter params supplied to the Combined Filter will be passed to the Set Filter, but different
        <code>filterParams</code> can be supplied to wrapped filter, as shown in the <strong>Date</strong> column.
    </li>
    <li>
        Floating filters are enabled for all columns. The floating filter reflects the active filter for that column,
        so changing whether you are using the wrapped filter or the Set Filter within a Combined Filter will change
        which floating filter is shown.
    </li>
    <li>
        By default, both conditions in the wrapped filter are shown at all times. This reduces the amount of UI movement
        when the users changes which filter within the Combined Filter they are interacting with. You can disable this
        by setting <code>alwaysShowBothConditions</code> to <code>false</code>, as shown in the
        <strong>Country</strong> column.
    </li>
    <li>
        You can print the current filter state to the console and save/restore it using the buttons at the top of the
        grid.
    </li>
</ul>

<?= grid_example('Combined Filter', 'combined-filter', 'generated', ['enterprise' => true, 'exampleHeight' => 700, 'modules' => ['clientside', 'setfilter', 'menu']]) ?>

<h2>Synchronisation</h2>

<p>
    When using the <a href="../javascript-grid-client-side-model/">Client-Side Row Model</a> and filtering using the
    wrapped filter, the Set Filter will update to show the same selection as if the user had manually chosen the
    matching items in the Set Filter instead. This allows a user to use the wrapped filter as a starting point to create
    a set of values that can then be tweaked in the Set Filter.
</p>

<p>
    This synchronisation does not happen when using any other row model; instead the Set Filter will simply show
    everything as deselected when the wrapped filter is active. You can also specify this behaviour if you would prefer
    it by setting <code>suppressSynchronisation</code> in the <code>filterParams</code>:
</p>

<?= createSnippet(<<<SNIPPET
// ColDef
{
    filter: 'agCombinedColumnFilter',
    filterParams: {
        suppressSynchronisation: true,
    }
}
SNIPPET
) ?>

<p>
    The following example demonstrates synchronisation.
</p>

<ul>
    <li>
        The <strong>Athlete</strong> column shows the default behaviour, where the selections in the Set Filter are
        kept in sync when the wrapped filter is used.
    </li>
    <li>
        The <strong>Country</strong> column has synchronisation disabled so the Set Filter has everything deselected
        whenever the wrapped filter is used.
    </li>
</ul>

<?= grid_example('Sychronisation', 'sychronisation', 'generated', ['enterprise' => true, 'exampleHeight' => 700, 'modules' => ['clientside', 'setfilter', 'menu']]) ?>

<h2>Combined Filter Parameters</h2>

<p>
    Parameters that are common to all <a href="../javascript-grid-filter-provided/">Provided Filters</a>:
</p>

<?php createDocumentationFromFile('../javascript-grid-filter-provided/providedFilters.json', 'filterParams') ?>

<p>
    Parameters that are specific to the Combined Filter:
</p>

<?php createDocumentationFromFile('combinedFilterParams.json', 'filterParams') ?>

<?php include '../documentation-main/documentation_footer.php';?>