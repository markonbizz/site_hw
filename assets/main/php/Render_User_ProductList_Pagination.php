<?php

include_once("Database_EstConnection.php");
include_once("User_ProductList_Pagination_Base.php");

$SEARCH_PRODUCTS = 
"
    SELECT
        COUNT(*)
    FROM 
        Products
    WHERE
        UploaderID = :UploaderID
";

$SQL_STATMENT = $dbHandler -> prepare($SEARCH_PRODUCTS);
$SQL_STATMENT-> bindParam(":UploaderID", $_SESSION["UserID"]);
$SQL_STATMENT-> execute();

$totalProducts = $SQL_STATMENT -> fetchColumn();
$totalPages = ceil($totalProducts / MAX_DATA_PERPAGE);


// =====================================================================
// =========================== First Page =========================== 
// =====================================================================
echo 
"
    <li class=\"page-item\"> <!-- First Page -->
        <a class=\"page-link\" href=\"?CurrentPageIndex=1\" tabindex=\"-1\" aria-disabled=\"false\">First</a>
    </li>
";

// =====================================================================
// =========================== Previous Page =========================== 
// =====================================================================
if(isset($_GET["CurrentPageIndex"]) && ($_GET["CurrentPageIndex"] > 1)){

    $tmp = (int)$_GET["CurrentPageIndex"] - 1;

    echo 
    "
        <li class=\"page-item\"> <!-- Previous Page -->
            <a class=\"page-link\" href=\"?CurrentPageIndex={$tmp}\" tabindex=\"-1\" aria-disabled=\"false\">Previous</a>
        </li>
    ";
}else{

    echo 
    "
        <li class=\"page-item disable\"> <!-- Previous Page -->
            <a class=\"page-link\" tabindex=\"-1\" aria-disabled=\"true\">Previous</a>
        </li>
    ";
}

// =============================================================
// =========================== Pages =========================== 
// =============================================================
for($i = 1; $i <= $totalPages; $i++){

    if(isset($_GET["CurrentPageIndex"]) && ($i == (int)$_GET["CurrentPageIndex"])){

        echo "<li class=\"page-item active\"><a class=\"page-link\" href=\"?CurrentPageIndex={$i}\">{$i}</a></li>";
    }else{

        echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?CurrentPageIndex={$i}\">{$i}</a></li>";
    }
}


// =================================================================
// =========================== Next Page =========================== 
// =================================================================
if(isset($_GET["CurrentPageIndex"]) && ((int)$_GET["CurrentPageIndex"] < $totalPages)){

    $tmp = (int)$_GET["CurrentPageIndex"] + 1;

    echo 
    "
        <li class=\"page-item\"> <!-- Previous Page -->
            <a class=\"page-link\" href=\"?CurrentPageIndex={$tmp}\" tabindex=\"-1\" aria-disabled=\"false\">Next</a>
        </li>
    ";
}else{

    echo 
    "
        <li class=\"page-item disable\"> <!-- Previous Page -->
            <a class=\"page-link\" tabindex=\"-1\" aria-disabled=\"true\">Next</a>
        </li>
    ";
}


// =================================================================
// =========================== Last Page =========================== 
// =================================================================
echo
"
    <li class=\"page-item\"> <!-- End Page -->
        <a class=\"page-link\" href=\"?CurrentPageIndex={$totalPages}\" tabindex=\"-1\" aria-disabled=\"true\">Last</a>
    </li>
";