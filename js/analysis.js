$(document).ready(function () {
    // $("#formDetails").css("display", "none");
    $(function () {
        $("#navbartoggler").bind('blur focusout', function () {
            var screenWidth = window.innerWidth;
            if (screenWidth < 606.99) {
                $("#nav").collapse('hide');
            }
        });
    });




    function load_json_data(id, parent_id) {
        var html_code = '';
        $.getJSON('js/analysis.json', function (data) {

            html_code += '<option value="">Select ' + id + '</option>';
            $.each(data, function (key, value) {
                if (id == 'analysis') {
                    if (value.parent_id == '0') {
                        html_code += '<option value="' + value.id + '">' + value.analysis + '</option>';
                    }
                }
                else {
                    if (value.parent_id == parent_id) {
                        html_code += '<option value="' + value.id + '">' + value.analysis + '</option>';
                    }
                }
            });
            $('#' + id).html(html_code);
        });
    }
    load_json_data('analysis');
    $(document).on('change', '#analysis', function () {
        var analysis_id = $(this).val();
        if (analysis_id != '') {
            load_json_data('sub-analysis', analysis_id);
        }
        else {
            $('#sub-analysis').html('<option value="">Select sub analysis</option>');
        }
    });
});

function copy(element_id) {
    var aux = document.createElement("div");
    aux.style.position = "absolute";
    aux.style.top = 0;
    aux.setAttribute("contentEditable", true);
    aux.innerHTML = document.getElementById(element_id).innerHTML;
    aux.setAttribute("onfocus", "document.execCommand('selectAll',false,null)");
    document.body.appendChild(aux);
    aux.focus();
    document.execCommand("copy");

    document.body.removeChild(aux);
}
