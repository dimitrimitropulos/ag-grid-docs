<?php
$key = "Pagination";
$pageTitle = "ag-Grid Pagination";
$pageDescription = "You can load data in pages from the server, delegating filtering and sorting to the server also. This page explains how to do this with ag-Grid.";
$pageKeyboards = "ag-Grid Paging Pagination";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2 id="pagination">Pagination</h2>

    <p>
        Pagination allows the grid to lazy load rows from the server and display the rows one page at a time. The page to display is selected
        by he user using the pagination panel that appears at the bottom of the page.
    </p>

    <p>
        To enable pagination, set the grid property <i>rowModelType='pagination'</i>.
    </p>

    <p>
        If the grid knows how many pages in total at the start, the total page and row count will appear in the pagination panel, and the user will
        be restricted to this range.
    </p>

    <p>
        If the grid does not know how many pages at the start, the user will be able to continue clicking on 'next' until the last page is
        loaded. During the search for the last page, the grid is said to be in 'infinite pagination'. During infinite pagination,
        the total rows and pages are displayed as 'more' at the bottom of the page, and the 'last' button is disabled.
    </p>

    <h4 id="aggregation-and-grouping">Aggregation and Grouping</h4>

    <p>
        Aggregation and grouping work exactly as when no paging, however their effect will be on the currently displayed page only. It is not
        posible to have the client aggregate or group on data that is not loaded from the server.
    </p>

    <h4 id="sorting-filtering">Sorting & Filtering</h4>

    <p>
        You have two options for both sorting and filtering. Either you can allow the grid to do it on a particular page
        (in-grid) or you do it on the server side across the entire data-set.
    </p>

    <p>
        For sorting, you must choose whether you want in-grid sorting or server side sorting, you cannot mix.
    </p>

    <p>
        For filtering, you must choose whether you want in-grid filtering or server side filtering, you cannot mix.
    </p>

    <p>
        It is possible to mix between in-grid sorting / filtering with server side filtering / sorting. Eg if you
        are doing in-grid sorting, you can do server side filtering, and vice versa.
    </p>

    <h4 id="example-in-grid-sorting-and-filtering">Example - In Grid Sorting and Filtering</h4>

    <p>
        The following example shows pagination. The sorting and filtering is all done in the grid.
    </p>

    <show-example example="examplePaging"></show-example>

    <h4 id="example-server-side-sorting-and-filtering">Example - Server Side Sorting and Filtering</h4>

    <p>
        The following example extends the example above by adding server side filtering and sorting.
    </p>

    <p>
        Any column can be sorted by clicking the header. When this happens, the datasource is called
        again with the new sort options.
    </p>

    <p>
        The columns <b><i>Age</i></b>, <b><i>Country</i></b> and <b><i>Year</i></b> can be filtered. When this happens, the datasource is called
        again with the new filtering options.
    </p>

    <p>
        <b>Note:</b> The set filters are provided with the list of available values. This is because it is not
            possible for the grid to know the entire set of values as they reside on the server.
    </p>

    <p>
        <b>Note:</b> The filters below have <i>newRowsAction='keep'</i>. This is so the filters are kept when you move between pages.
    </p>

    <p>
        <b>Note:</b> The example below uses ag-Grid-Enterprise, this is to demonstrate the set filter with server side filtering,
        ag-Grid-Enterprise is not required for pagination)
    </p>

    <show-example example="examplePagingServerSide"></show-example>

    <h4 id="configuring-a-bit-differently">Configuring A Bit Differently</h4>

    <p>
        The examples above use old style JavaScript objects for the datasource. This example turns things around slightly
        and creates a datasource Class. The example also just creates (makes up) data on the fly.
    </p>

    <show-example example="examplePagingMadeUpData"></show-example>

</div>

<?php include '../documentation-main/documentation_footer.php';?>