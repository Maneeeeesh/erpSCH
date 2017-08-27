$(function () {
    $(window).on("load", function () {
        if ($("#frmSession").length != 0) {
            fillSessions();
        }
    });

    function fillSessions() {
        url_ = site_url_ + "/master/getsession";
        $.ajax({
            type: "POST",
            url: url_,
            success: function (data) {
                var obj = JSON.parse(data);

                var str_html = '';
                for (i = 0; i < obj.session.length; i++) {
                    str_html = str_html + "<tr class='gradeX'>";                    
                    str_html = str_html + "<td> <button class='btn btn-danger btn-mini deleteMe' id='" + obj.session[i].SESSID + "'><i class='icon-minus'></i></button></td>";
                    str_html = str_html + "<td><b>" + obj.session[i].SESSID + "</b></td>";
                    str_html = str_html + "<td>" + obj.session[i].SESSSTART + "</td>";
                    str_html = str_html + "<td>" + obj.session[i].SESSEND + "</td>";
                    str_html = str_html + "</tr>";
                }
                $('#tabSession1').html(str_html);
            }
        });
    }

    $('.sessionSubmit').click(function () {
        //alert($('#startYear').val());
        if ($('#startYear').val() === $('#endYear').val()) {
            callDanger("Please select Different Dates for Session Start and Session End!!");
        } else {
            data_ = $('#frmSession').serialize();
            url_ = site_url_ + "/master/create_Session";

            $.ajax({
                type: 'POST',
                url: url_,
                data: data_,
                success: function (data) {
                    var obj = JSON.parse(data);
                    //alert(obj.res_);
                    if (obj.res_ === false) {
                        callDanger(obj.msg_);
                    } else {
                        callSuccess(obj.msg_);
                        fillSessions();
                    }
                }, error: function (xhr, status, error) {
                    callSuccess(xhr.responseText);
                }
            });
        }
    });

    $('body').on('click', '.deleteMe', function () {
        var sessid = this.id;
        url_ = site_url_ + "/master/delete_Session/" + sessid;
        if (confirm('Are you sure you want to delete session ' + sessid)) {
            $.ajax({
                type: 'POST',
                url: url_,
                success: function (data) {
                    var obj = JSON.parse(data);
                    if (obj.res_ === false) {
                        callDanger(obj.msg_);
                    } else {
                        callSuccess(obj.msg_);
                        fillSessions();
                    }
                }, error: function (xhr, status, error) {
                    callSuccess(xhr.responseText);
                }
            });
        }
    });

    // Popup boxes
    function callDanger(message) {
        $.gritter.add({
            title: 'Error . . .',
            text: message,
            image: base_url_ + '/assets_/img/demo/error-circle.png',
            sticky: false,
        });
    }
    function callSuccess(message) {
        $.gritter.add({
            title: 'Congratulations!!',
            text: message,
            image: base_url_ + '/assets_/img/demo/envelope.png',
            sticky: false,
            class_name: 'gritter-success'
        });
    }
    // -----------
});