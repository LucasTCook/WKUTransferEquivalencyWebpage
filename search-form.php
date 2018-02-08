<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Live MySQL Database Search</title>
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        margin-left: auto;
        margin-right: auto;
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 60%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
    button:focus{
        outline:0;
    }

</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        $('#nextButton').hide();
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $('#nextButton').show();
        $(this).parent(".result").empty();
    });
});

function selectSchool(id){
    $('#schoolID').val(id);   
}
function redirect() {
  window.location.replace("compareCourses.php?schoolID=" + $('#schoolID').val());
  return false;
}

</script>
</head>
<body>

<input type="hidden" name="schoolID" id="schoolID" value="">    
    
<div style="text-align: center">
    <img src="wku.jpeg" alt="WKU_LOGO" style="align: center">
    <h2 style="margin-top: -30px;">Undergraduate Admissions - Transfer Credit Articulation</h2>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search transfer school..." />
        <div class="result"></div>
    </div>
    <br>
    <button id="nextButton" style="display:none;width: 200px;height: 50px;border-radius: 11px;background-color: red;color: white;font-size: 20px;border-style: unset;" onclick="redirect()">Compare Courses</button>
</div>
    
</body>
</html>
