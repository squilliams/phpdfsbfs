$(document).ready(function() {
    $("#lesen").click(function() {
        $.ajax({
            url : "AlgoritmaBFS-DFS\AlgoritmaBFS-DFS\bin\Debug\MyTest.txt",
            dataType: "text",
            success : function (data) {
                $(".text").html(data);
            }
        });
    });
}); 